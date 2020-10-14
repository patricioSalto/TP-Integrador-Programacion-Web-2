<?php
	require_once("../database/ciudades.php");
	
	if(empty($_POST["id"])){
		header("Location:index.php?seccion=ciudades&edicion=error");
	
		die();
	}
	 

	$idEditar = $_POST["id"];
			
    foreach($ciudades as $posicion => $queciudad){
        if($queciudad["id"] == $idEditar){
            $ciudadEditar = $posicion;
        }
    }		
	
	if(!isset($ciudadEditar)){
		header("Location:index.php?seccion=ciudad&edicion=error");	
		die();
	}
	
    //verificado el id en la estructura de datos	
	$nombre = $_POST["nombre"];
	$descripcion = $_POST["descripcion"];
	



    //si cambia el nombre, debería cambiar el nombre de la carpeta
    if($nombre != $ciudades[$ciudadEditar]['nombre']){
            
        $nombreCarpeta = "ciudades/$nombre";

        if(is_dir("../".$nombreCarpeta)):
            header("Location:index.php?seccion=ciudades&estado=existe");
            die();
        endif;
      
    
        //creo la carpeta
        mkdir("../".$nombreCarpeta);        
        //actualiza descripcion en la nueva carpeta
        $descripcionruta = "$nombreCarpeta/descripcion.txt"; 
        file_put_contents("../$descripcionruta",$descripcion);
        
        //elimina la descripción de la carpeta anterior
        $rutadescripcionanterior = $ciudades[$ciudadEditar]["descripcion"];
        unlink("../$rutadescripcionanterior");
    
    
    }else{
            
        //actualiza descripcion
        $descripcionruta = $ciudades[$ciudadEditar]['descripcion'];    
        file_put_contents("../$descripcionruta",$descripcion);
  
    
    
    }



 
	 if($_FILES["fotoCiudad"]["size"] > 0){
	     
         //qué formato tiene la imagen
        if($_FILES["fotoCiudad"]["type"] == "image/jpeg"):
            $formato = "jpg";

        elseif($_FILES["fotoCiudad"]["type"] == "image/png"):
            $formato = "png";

        elseif($_FILES["fotoCiudad"]["type"] == "image/gif"):
            $formato = "gif";
        else:
            header("Location:index.php?seccion=upload&estado=formato");
            die();
        endif;
		//borra la imagen anterior
		unlink("../".$ciudades[$ciudadEditar]["imagen"]);
        //sube la imagen
        $imagen = "ciudades/".$nombre."/".$nombre.".".$formato;
		$rutasubirahora = "../".$imagen;
		move_uploaded_file($_FILES["fotoCiudad"]["tmp_name"],$rutasubirahora);
		
		
		 
	}else{ //no se adjunto imagen   
        
         if($nombre != $ciudades[$ciudadEditar]['nombre']){
            //si cambia el nombre, debería cambiar el nombre de la carpeta           
            //actualiza el nombre de carpeta      
            $imagen = str_replace($ciudades[$ciudadEditar]["nombre"],$nombre,$ciudades[$ciudadEditar]["imagen"]);
            $rutasubirahora = "../".$imagen;
            //copia la imagen al nuevo destino     
            rename("../".$ciudades[$ciudadEditar]["imagen"],$rutasubirahora);
            //borra la imagen de la carpeta anterior 
            unlink("../".$ciudades[$ciudadEditar]["imagen"]);            
             
         }else{
             $imagen = 	$ciudades[$ciudadEditar]["imagen"];
         }
         
     }  
	
		  

    if($nombre != $ciudades[$ciudadEditar]['nombre']){
        //si cambia el nombre, debería cambiar el nombre de la carpeta 
        //elimina la carpeta anterior
        rmdir("../".$ciudades[$ciudadEditar]["nombre"]);
    }

    //actualizar el json
	$ciudades[$ciudadEditar]["nombre"] = $nombre;  
	$ciudades[$ciudadEditar]["imagen"] = $imagen;  
	$ciudades[$ciudadEditar]["descripcion"] = $descripcionruta;  	 
	$json = json_encode($ciudades); 
	file_put_contents("../database/ciudades.json",$json);
		
	
	header("Location:index.php?seccion=ciudades&edicion=ok");
	
	
	
	
	
	
	
	