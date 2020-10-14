<?php session_start();


require_once("funciones.php");
require_once("database/usuarios.php");



$nombre = limpiar($_POST["nombre"]);
$apellido = limpiar($_POST["apellido"]);
$usuario = limpiar($_POST['usuario']);
$password = limpiar($_POST['password']);

        $copiau = $usuarios;
        end($copiau);
        $ultimoindice = key($copiau);
        var_dump($ultimoindice);

        $nuevoindice = $ultimoindice  + 1;
        $nuevoid = $usuarios[$ultimoindice]['id'] + 1; 
    
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










?>