   <div class="row container d-inline-flex p-2 justify-content-center p-3 mb-2 bg-light">

    <div class="container col-xs-12">
      <h2 class="text-center p-2">Usuarios</h2>
      <div class="d-flex justify-content-end p-2">
       <a href="index.php?seccion=cargarUsuario" class="pull-right btn btn-primary"> Nuevo Usuario</a>
        </div>
        <table class="table table-list-search">
            <thead class="h5">
                <tr>
                    <th>#id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
               <?php
                
                foreach($usuarios as $us){
                ?>
                    <tr>
                        <td><?php echo $us["id"]; ?></td>
                        <td><?php echo $us["nombre"]; ?></td>
                        <td><?php echo $us["apellido"]; ?></td>

                        
                        
                        <td>
                            <form action="eliminarUsuario.php" method="post">
                                <input type="hidden" value="<?php echo $us["id"]; ?>" name="id">
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