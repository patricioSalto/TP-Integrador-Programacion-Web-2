<?php
//procesarUpload
require_once('../funciones.php');
require('../database/ciudades.php');

if(empty($_POST["nombre"]) || empty($_FILES["fotoCiudad"])):
    header("Location:index.php?seccion=upload&estado=vacios");
    die();
endif;

$nombre = limpiar_inputs($_POST["nombre"]);

$descripcion = limpiar_inputs($_POST["descripcion"]);

$imagen = $_FILES["fotoCiudad"];



$nombreCarpeta = "ciudades/$nombre";

if(is_dir($nombreCarpeta)):
    
    header("Location:index.php?seccion=upload&estado=existe");
    die();
endif;
    

//qué formato tiene la imagen
if($imagen["type"] == "image/jpeg"):
    $formato = "jpg";

elseif($imagen["type"] == "image/png"):
    $formato = "png";

elseif($imagen["type"] == "image/gif"):
    $formato = "gif";
else:
    header("Location:index.php?seccion=upload&estado=formato");
    die();
endif;



//creo la carpeta
mkdir("../".$nombreCarpeta);

//creo descripcion.txt
file_put_contents("../$nombreCarpeta/descripcion.txt",$descripcion);

//cambiar el tamaño de ancho = 350

$altoNuevo = 195;

if($formato == "jpg"):
    $original = imagecreatefromjpeg($imagen["tmp_name"]);

    $anchoOriginal = imagesx($original);
    $altoOriginal = imagesy($original);

    $anchoNuevo = $altoNuevo * $anchoOriginal / $altoOriginal;
    

    $copia = imagecreatetruecolor($anchoNuevo,$altoNuevo);


elseif($formato == "png"):
    $original = imagecreatefrompng($imagen["tmp_name"]);

    $anchoOriginal = imagesx($original);
    $altoOriginal = imagesy($original);

    $anchoNuevo = $altoNuevo * $anchoOriginal / $altoOriginal;

    $copia = imagecreatetruecolor($anchoNuevo,$altoNuevo);
    
    imagesavealpha($copia,true);
    imagealphablending($copia,false);

elseif($formato == "gif"):
    $original = imagecreatefromgif($imagen["tmp_name"]);

    $anchoOriginal = imagesx($original);
    $altoOriginal = imagesy($original);

    $anchoNuevo = $altoNuevo * $anchoOriginal / $altoOriginal;

    $copia = imagecreate($anchoNuevo,$altoNuevo);

    imagesavealpha($copia,true);
    imagealphablending($copia,false);

endif;

    
imagecopyresampled($copia,$original,0,0,0,0,$anchoNuevo,$altoNuevo,$anchoOriginal,$altoOriginal);

    
$calidad = 9;
$ruta = "$nombreCarpeta/$nombre.$formato";
$rutasubirdesdepanel = "../$nombreCarpeta/$nombre.$formato";

if($formato == "jpg"):
    imagejpeg($copia,$rutasubirdesdepanel,100);

elseif($formato == "png"):
    imagepng($copia,$rutasubirdesdepanel,$calidad);

elseif($formato == "gif"):
    imagegif($copia,$rutasubirdesdepanel,$calidad);
endif;



$copiaciudades = $ciudades;
end($copiaciudades);//ubica el puntero en la última posición del array
$ultimoindice = key($copiaciudades); //extrae la llave (índice)
var_dump($ultimoindice);

$nuevoindice = $ultimoindice  + 1; //al valor del id en la última posición del array, le suma 1
$nuevoid = $ciudades[$ultimoindice]['id'] + 1; //al valor del id en la última posición del array, le suma 1

//estructura de datos de la ciudad

$ciudadnueva = [
    "id" => $nuevoid,
    "nombre" => $nombre,
    "descripcion" => "$nombreCarpeta/descripcion.txt",
    "imagen" => $ruta
];
//lo incluye en el array que se toma como fuente de datos de los pokemones 
$ciudades[$nuevoindice] = $ciudadnueva;
//pasa a formato json toda la colección
$datos = json_encode($ciudades); 

//actualiza el json
file_put_contents("../database/ciudades.json", $datos);




header("Location:index.php?seccion=ciudades");








