
<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
if(file_exists("database/usuarios.json")){
    $datos = file_get_contents("database/usuarios.json");
    $usuarios = json_decode($datos,true);
 
}else if(file_exists("../database/usuarios.json")){
    $datos = file_get_contents("../database/usuarios.json");
    $usuarios = json_decode($datos,true);
 
}else{

    $usuarios = [];

$usuarios[] = [
    "id" => 1,
    "nombre" => "Patricio",
    "apellido" => "Salto",
    "usuario" => "admin",
    "password" => password_hash("1234", PASSWORD_DEFAULT), // genera una nueva cadena de texto
    "rol" => "1"   
];

$usuarios[] = [
    "id" => 2,
    "nombre" => "Juana",
    "apellido" => "Perez",
    "usuario" => "juni22",
    "password" => password_hash("1234", PASSWORD_DEFAULT), // genera una nueva cadena de texto
    "rol" => "5"   
];
    
}  

?>