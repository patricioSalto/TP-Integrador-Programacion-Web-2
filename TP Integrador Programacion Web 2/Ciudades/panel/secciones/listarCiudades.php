   <div class="row container d-inline-flex p-2 justify-content-center p-3 mb-2 bg-light">

    <div class="container col-xs-12">
      <h2 class="text-center p-2">Ciudades</h2>
      <div class="d-flex justify-content-end p-2">
       <a href="index.php?seccion=uploadCiudad" class="pull-right btn btn-primary"> Nueva Ciudad</a>
        </div>
        <table class="table table-list-search">
            <thead class="h5">
                <tr>
                    <th>#id</th>
                    <th>Nombre</th>
                    <th>Imágen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
               <?php
                
                foreach($ciudades as $ciudad){
                ?>
                    <tr>
                        <td><?php echo $ciudad["id"]; ?></td>
                        <td><?php echo $ciudad["nombre"]; ?></td>
                        <td>
                            <img src="../<?php echo $ciudad["imagen"] ;?>" alt="<?php  echo $ciudad["nombre"] ;?>" width="100"> 
                        </td>
                        <td>
                            <a href="index.php?seccion=uploadCiudad&id=<?php echo $ciudad["id"] ;?>" class="btn btn-success btn-xs">Editar</a>
                            <form action="procesarDelete.php" method="post">
                                <input type="hidden" value="<?php echo $ciudad["id"]; ?>" name="id">
                                <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>