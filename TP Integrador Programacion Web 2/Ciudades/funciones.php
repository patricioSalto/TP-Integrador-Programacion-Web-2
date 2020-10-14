<?php

function crear_galeria($nombre){
   
        $carp = opendir("ciudades/$nombre");
    
        while($imagen = readdir($carp)):
            if($imagen != "." && $imagen != ".." && $imagen != "descripcion.txt"):

            return '<div class="box-img disenio_multimedial">
				<img src="ciudades/'. $nombre .'/'. $imagen .'" alt="'. $nombre .'" alt="">
                <p>'. ucfirst($nombre) .' </p> <p class="scrollable">'. nl2br(file_get_contents("ciudades/$nombre/descripcion.txt")) .'</p>
			</div>';
                
    
            endif;
        endwhile;
        closedir($carp);
}

function limpiar_inputs($input){
        
    return htmlentities(trim(strtolower($input)));
        
}

function limpiar($name){
    return htmlspecialchars(trim($name));
}


function validar_Registro($nombre,$apellido,$usuario,$password,$nuevoid,$nuevoindice){

    if(!empty($nombre)&&!empty($apellido)&&!empty($usuario)&&!empty($password)){

        $usuarionuevo= [
        "id" => $nuevoid,
        "nombre" => $nombre,
        "apellido" => $apellido,
        "usuario" => $usuario,
        "inicio" => time(),
        "password" => password_hash($password, PASSWORD_DEFAULT),
        "rol" => "5"
        ];

        $usuarios[$nuevoindice] = $usuarionuevo;
        $datos = json_encode($usuarios);

        file_put_contents("database/usuarios.json", $datos);
        foreach($usuarios as $indice => $user){
            if($user["usuario"] == $usuario
            &&
            password_verify($password, $user['password'])
            ){
                $_SESSION['ingreso'] = $user;
                header("Location:usuario/index.php?seccion=home");         
            }else{
                header("Location:index.php?iniciar=error"); 
            }
        }
    }else{
        header("Location:index.php?iniciar=error"); 
    }




}

?>