<?php

    session_start();
    if(!$_SESSION['ingreso']){
    header("Location:../index.php?iniciar=error");
        
    }

    //require_once("../config.php");
    require_once("../arrays.php");
    require_once("../funciones.php");
    require_once("../database/ciudades.php");
    require_once("../database/usuarios.php");

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <title>Panel de administracion</title>
</head>

<body background="../img/fondo.jpg">
      <div class="contenedor">
           <header>
               <img class="imgheader" src="../img/header.jpg";
           </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Panel de administracion</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">


              <li  <?= isset($_GET["seccion"]) && $_GET["seccion"] == "ciudades" ? "class='active'" : '' ?> class="nav-item">
                <a class="nav-link" href="index.php?seccion=ciudades">Ciudades</a>
              </li>

              <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "usuarios" ? "class='active'" : '' ?> class="nav-item">
                <a class="nav-link" href="index.php?seccion=usuarios">Usuarios</a>
              </li>

            </ul>

            <ul class="navbar-nav m-auto">

                    <form action="../logout.php" method="post">
                        <div class="d-flex justify-content-end">
                        <input class="btn btn-default" type="submit" value="Cerrar Sesión">
                        </div>
                    </form>

            </ul>

          </div>
    </nav>
    
        <!-- secciones -->    
          <?php

            if(!empty($_GET["seccion"])):
        
                $seccion = $_GET["seccion"];
                
                if($seccion == "ciudades"):
        
                    require_once("secciones/listarCiudades.php");
                        
        
                elseif($seccion == "uploadCiudad"):
        
                    require_once("secciones/uploadCiudades.php");
                        
                        
                 elseif($seccion == "usuarios"):
        
                    require_once("listarUsuarios.php");
                        
                        
                elseif($seccion == "cargarUsuario"):
        
                    require_once("cargarUsuario.php");
                        
                        
                elseif($seccion == "editarUsuarios"):
        
                    require_once("editarUsuario.php");
                        
                        
        
                else:
                        require_once("error.php");
                    endif;
        
                else:
        
                    require_once("secciones/listarCiudades.php");
        
                endif;

            ?>       
        </div>
  
</body>
</html>