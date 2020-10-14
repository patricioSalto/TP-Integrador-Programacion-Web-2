<?php

	require_once("../database/usuarios.php");
	
	if(empty($_POST["id"])){
		header("Location:index.php?seccion=ciudades&borrado=error");	
		die();
	}	 

	$idEliminar = $_POST["id"];
			
    foreach($usuarios as $posicion => $queusuario){				
        if($queusuario["id"] == $idEliminar){
            $usuarioEliminar = $posicion;
        }				
    }		
	
	if(!isset($usuarioEliminar)){
		header("Location:index.php?seccion=usuarios&borrado=error");	
		die();
	}
	
    //verificado el id en la estructura de datos	 
    //elimina los archivos de la imagen y descripcion, + la carpeta que los contenía
	unlink('../'.$usuarios[$usuarioEliminar]["nombre"]);
	unlink('../'.$usuario[$usuarioEliminar]["apellido"]);
	unlink('../'.$usuario[$usuarioEliminar]["usuario"]);
	unlink('../'.$usuario[$usuarioEliminar]["password"]);
	unlink('../'.$usuario[$usuarioEliminar]["rol"]);



    //borra la posisión de la estructura de datos (array $ciudades)
	unset($usuarios[$usuarioEliminar]);

    //actualizar el json
	$json = json_encode($usuarios);	
	file_put_contents("../database/usuarios.json",$json);
	
	
    header("Location:index.php?seccion=listarUsuarios");
	
	