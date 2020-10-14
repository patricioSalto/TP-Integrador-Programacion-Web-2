<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <title>Ciudades</title>
</head>

<body background="img/fondo.jpg">
      <div class="contenedor">
           <header>
               <img class="imgheader" src="img/header.jpg";
           </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Ciudades del Mundo</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">


              <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "home" ? "class='active'" : '' ?>  class="nav-item">
                <a class="nav-link" href="index.php?seccion=home">Inicio</a>
              </li>

              <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "galeria" ? "class='active'" : '' ?> class="nav-item">
                <a class="nav-link" href="index.php?seccion=galeria">Galeria</a>
              </li>

            </ul>

            <ul class="navbar-nav m-auto">

              <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "login" ? "class='active'" : '' ?> class="nav-item">
                <a class="nav-link" href="index.php?seccion=login">Iniciar sesión</a>
              </li>

            </ul>

          </div>
    </nav>
    
        <!-- secciones -->    
            <?php

               if(!empty($_GET["seccion"])){
                $seccion = $_GET["seccion"];

                if($seccion == "home"):
                    require ("secciones/home.php");

                elseif($seccion == "galeria"):
                    require ("secciones/galeria.php");
                   
                elseif($seccion == "no_usuario"):
                    require ("no_usuario.php");
                   
                elseif($seccion == "login"):

                    require ("login.php");
                   
                elseif($seccion == "reg"):
                   
                   require ("secciones/RegIn.php");
                else:
                    require ("secciones/error.php");
                endif;
                   }else{
                   
                    require ("home.php");
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