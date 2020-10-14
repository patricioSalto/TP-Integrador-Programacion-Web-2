<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
    <script src="js/validarcampos.js"></script>
</head>
<body>
    <div class="container text-center">
        <div class="d-flex">
           <?php
            if(!empty($_GET["seccion"])){
                $iniciar=$_GET["seccion"];
                if($iniciar=="reg"){
                    include("secciones/RegIn.php");
                }
            }
            ?>
            <div class="p-2 m-4">
               <form class="form-signin" action="validacion.php" method="POST" onsubmit="return validarLogin();">
                 <p class="p mb-3 font-weight-normal">Iniciar Sesion</p>
                  <input type="text" class="form-control" placeholder="Ingrese Usuario" name="usuario" id="usuario">
                  <br>
                  <input type="password" class="form-control" placeholder="Ingrese Password" name="password" id="contrasenia">
                  <br>
                 <input class="btn btn-lg btn-primary btn-block" type="submit" value="Ingresar"> 
                 <p><a href="index.php?seccion=reg">Aun no te registraste?</a></p>
                </form>     
            </div>

        </div>
    </div>
    
</body>
</html>