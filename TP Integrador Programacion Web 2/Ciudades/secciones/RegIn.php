<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <script src="js/validarcampos.js"></script>

</head>
<body>
       <div class="container text-center">
        <div class="d-flex">

           
            <div class="p-2 m-4">
              
               <form class="form-signin" action="register.php" method="POST" onsubmit="return validarRegistro();">
                   
                    <p class="p mb-3 font-weight-normal">Iniciar Sesion</p>
                    <input type="text" class="form-control" placeholder="Ingrese Nombre" name="usuario" id="nombre">
                  <br>
                    <input type="text" class="form-control" placeholder="Ingrese Apellido" name="usuario" id="apellido">
                  <br>
                    <input type="text" class="form-control" placeholder="Ingrese Usuario" name="usuario" id="usuario">
                  <br>
                    <input type="password" class="form-control" placeholder="Ingrese contraseña" name="password" id="contrasenia">
                  <br>
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Registrarse"> 
                    <p><a href="index.php?seccion=login">Ya estas registrado? inicia sesion desde aqui!</a></p>
                </form>     
            </div>
    
        </div>
    </div>
    
</body>
</html>