<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
   <br>
    <h1>LAS CIUDADES MAS TURISTICAS DEL MUNDO</h1>
    
    <p>Para encontrar la primera ciudad europea en número de turistas internacionales hay que situarse en el cuarto puesto, ocupado por Londres, y hasta el 25 para localizar a la primera española, Barcelona, y eso que España es una potencia en el sector. Pero alcanzar los 25. 587.300 turistas que ha recibido Hong Kong en 2013, un 7,6 por ciento más que el año anterior, parece un reto difícil. Son los datos de un estudio publicado por la empresa consultora de investigación de mercado Euromonitor International, que revela cuáles son las ciudades que dominan el mundo del turismo. Las cifras han sido reunidas por analistas de más de medio centenar de países, las cuales tienen en cuenta las llegadas en los aeropuertos, la información de las oficinas nacionales de estadística, grupos de estudio de la industria y otras fuentes. Aquí están las 15 primeras en 15 instantáneas.</p>
    
    
     <ul>
   
       <?php
         require_once('arrays.php');
        foreach($galeria as $foto):
        ?>

            <li>
                <p class="titulo"><?= $foto["nombre"]; ?></p>
                
                <img class="foto" src="<?= $foto["url"]; ?>" alt="<?= $foto["nombre"]; ?>">
                
                <p class="descripcion"><?= $foto["descripcion"]; ?></p>
                
            </li>

        <?php    
        endforeach;

    ?>
    </ul>
    

    
</body>
</html>