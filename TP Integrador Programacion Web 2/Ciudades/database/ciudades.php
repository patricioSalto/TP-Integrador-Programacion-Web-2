<?php


if(file_exists("database/ciudades.json")){    
    $datos = file_get_contents("database/ciudades.json");    
    $ciudades = json_decode($datos,true);
 
}else if(file_exists("../database/ciudades.json")){ // para que lo levante desde el panel    
    $datos = file_get_contents("../database/ciudades.json");    
    $ciudades = json_decode($datos,true);
 
}else{
 
//tabla ciudades
$ciudades = [];

};