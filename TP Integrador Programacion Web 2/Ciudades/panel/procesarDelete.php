<?php

	require_once("../database/ciudades.php");
	
	if(empty($_POST["id"])){
		header("Location:index.php?seccion=ciudades&borrado=error");	
		die();
	}	 

	$idEliminar = $_POST["id"];
			
    foreach($ciudades as $posicion => $queciudad){				
        if($queciudad["id"] == $idEliminar){
            $ciudadEliminar = $posicion;
        }				
    }		
	
	if(!isset($ciudadEliminar)){
		header("Location:index.php?seccion=ciudades&borrado=error");	
		die();
	}
	
    //verificado el id en la estructura de datos	 
    //elimina los archivos de la imagen y descripcion, + la carpeta que los contenía
	unlink('../'.$ciudades[$ciudadEliminar]["imagen"]);
	unlink('../'.$ciudades[$ciudadEliminar]["descripcion"]);
	rmdir('../ciudades/'.$ciudades[$ciudadEliminar]["nombre"]);

    //borra la posisión de la estructura de datos (array $ciudades)
	unset($ciudades[$ciudadEliminar]);

    //actualizar el json
	$json = json_encode($ciudades);	
	file_put_contents("../database/ciudades.json",$json);
	
	
    header("Location:index.php?seccion=ciudades&borrado=ok");
	
	