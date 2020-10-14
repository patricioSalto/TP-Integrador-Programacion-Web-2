<?php 
             
    require_once("../arrays.php");


?>
             
    <h1>Los 10 Mejores Lugares Turísticos de Argentina</h1>
             
    <p>Descubre la belleza de sus paisajes, a través de la siguiente selección de los mejores lugares turísticos de Argentina, espectaculares escenarios entre verdes viñedos, montañas nevadas, campos de hielo eterno, grandes urbes cosmopolitas y encantadores caseríos rurales.</p>         

  <?php           

 foreach($galeria3 as $foto3):
                ?>
                
                <div class="card bg-dark text-white">
                      <img src="<?= $foto3["url"]; ?>" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title"><?= $foto3["nombre3"]; ?></h5>
                        <p class="card-text"><?= $foto3["descripcion3"]; ?></p>
                        <p class="card-text">Last updated 3 mins ago</p>
                  </div>
                </div>
             

                  <?php    
                endforeach;
                 ?>


        
         
            
        