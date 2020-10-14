<?php 
    require_once("funciones.php");      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Descubrir</title>
    <link rel="stylesheet" href="./css/galeria.css">
</head>
<body>

        <div class="container_categorias">

		<div class="galeria">
			<div class="title-img">
				<h3>Galeria de Ciudades</h3>
			</div>

        <?php
        
            $carpeta = opendir("ciudades");
    
            while($ciudad = readdir($carpeta)):
                if($ciudad != "." && $ciudad != ".."):
    
                    echo crear_galeria($ciudad);
    
                endif;
            endwhile;
    
            closedir($carpeta);
        
        ?>

		</div>
	</div>

</body>
</html>