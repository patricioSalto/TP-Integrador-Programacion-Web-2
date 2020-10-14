<!DOCTYPE html>
<html>
    <head>
       
        <meta charset="UTF-8">
        <title>Mundo Turistico</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/icono.png"/>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        
        
    </head>
    
    <body background="img/fondoBody.jpg">
      <div class="contenedor">
           <header>
               <img class="imgheader" src="img/header.jpg";>
           </header>
            
<?php

$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$email = $_POST ['email'];
$mensaje = $_POST ['mensaje'];




if(!empty($nombre) && !empty($apellido) && !empty($email) && !empty($mensaje)){

    ?>
    <h2>el Mensaje se envio correctamente</h2>
    
    <h3>Nombre:</h3>    
    <p> <?= $_POST["nombre"] ?></p> 
    
    <h3>Apellido:</h3> 
    <p> <?= $_POST["apellido"] ?> </p>     
         
    <h3>Mail:</h3>
    <p> <?= $_POST["email"] ?> </p>
    
    <h3>Mensaje:</h3>
    <p> <?= $_POST["mensaje"] ?> </p>
    
    
    <br>
    <h4>checkbox seleccionados:</h4>
    <?php

    

    if (isset($_POST["checkbox1"])) {
            echo "playas";
    }
               
    ?>
    <br>
    <?php               

    if (isset($_POST["checkbox2"])) {
            echo "glaciares";
    }
    ?>
    <br>
    <?php           

    if (isset($_POST["checkbox3"])) {
            echo "montañas";
    }
               
    ?>
    <br>
    <?php           

    if (isset($_POST["checkbox4"])) {
            echo "selvas";
    }
    
    ?>
    <br>
    <a href="index.php?seccion=contacto">Volver Atras</a>
    <?php

?>
    
    
    
    
    
  
    <?php  
    
}else{
    ?>
    <h1>el mensaje no se pudo enviar debido a que:</h1>
     <?php
    
    if($nombre == ''){
        echo "debe ingresar el nombre";
        
    }
    
    ?>
    <br>
    <?php
    
    if($apellido == ''){
        echo "debe ingresar el apellido";
    }
    
    ?>
    <br>
    <?php
    
    if($email == ''){
        echo "debe ingresar la direccion del mail";
        
    }
    
    ?>
    <br>
    <?php
    
    if($mensaje == ''){
        echo "debe ingresar el mensaje";
    }
    ?>
    <br>
    <a href="index.php?seccion=contacto">Volver Atras</a>
    <?php
        
}

   ?>                          
        
            <footer>   
                <img src="img/facebook.png" alt="">
                <img src="img/twitter.png" alt="">
                <img src="img/google.png" alt="">
                <img src="img/instagram.png" alt="">  
            </footer>
        </div>
    </body>
    
</html>

