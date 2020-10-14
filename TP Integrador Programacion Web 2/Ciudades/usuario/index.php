<!DOCTYPE html>
<?php session_start();
if(!$_SESSION['ingreso']){
    header("Location:../index.php?iniciar=error");
}


?>


<html>
    <head>
       
        <meta charset="UTF-8">
        <title>Usuario</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../img/icono.png"/>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        
        
        
    </head>
    
    <body background="../img/fondoBody.jpg">
      <div class="contenedor">

            

            <div id="menu">
                <ul>
                   
                   
                    <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "home" ? "class='active'" : '' ?> ><a class="lista" href="index.php?seccion=home">Usuario</a></li>
                    
                    <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "ciudades" ? "class='active'" : '' ?> ><a class="lista" href="index.php?seccion=perfil"> Mi Perfil</a></li>
                    
                    <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "ciudadesArgentinas" ? "class='active'" : '' ?> ><a class="lista" href="index.php?seccion=ciudadArgentinas"> Ciudades Argentinas</a></li>
                
                
                    <li class="contacto">
                        <form action="../logout.php" method="post">
                        <div class="d-flex justify-content-end">
                        <input class="btn btn-default" type="submit" value="Cerrar Sesión">
                        </div>
                        </form> 
                    </li>
                    
                </ul>
           </div>
                    
          <?php

            if(!empty($_GET["seccion"])):
        
                $seccion = $_GET["seccion"];
                
                if($seccion == "home"):
                    
                    require_once ("secciones/home.php");
                
        
                elseif($seccion == "perfil"):
        
                    require_once("secciones/perfil.php");
                        
                elseif($seccion == "ciudadArgentinas"):
        
                    require_once("secciones/ciudadesArgentinas.php");
        
                else:
                        require_once("error.php");
                    endif;
        
                else:
        
                    require_once("secciones/home.php");
        
                endif;

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