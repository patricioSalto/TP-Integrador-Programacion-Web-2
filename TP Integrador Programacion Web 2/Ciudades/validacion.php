<?php session_start(); 


require_once("database/usuarios.php"); 



$usuario = $_POST['usuario'];
$password = $_POST['password'];


foreach($usuarios as $user){
    

    if(!empty($usuario) && !empty($password)){
    foreach($usuarios as $user){
        if($user["usuario"] == $usuario && password_verify($password, $user['password']) && $user['rol'] === "1"){
        
            $_SESSION['ingreso'] = $user;
            header("Location:panel/index.php"); 
        }else{       
            if($user["usuario"] == $usuario && password_verify($password, $user['password'])){
                $_SESSION['ingreso'] = $user;
                
                header("Location:usuario/index.php?seccion=ciudades"); 
            }
        }
    }
    
    if($_SESSION['ingreso']['usuario'] != $usuario){
        header("Location:index.php?seccion=no_usuario");
    }
    
}else{
   header("Location:index.php?iniciar=error");
}
    
}

?>