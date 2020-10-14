 <?php
//si hay un parámetro id en la url, es la referencia del pokemon a editar
$modoformulario = isset($_GET['id']) ? $_GET['id'] : 'alta';

if($modoformulario != 'alta'){ //si el valor del parámetro es distinto a 'alta'
    $titulo = "Editar";
    $actionphp = "procesarEdicion.php";
    
    
}else{
    $titulo = "Nueva";
    $actionphp = "procesarUpload.php";
    
}

?>
	 <div class="row">
	     <p style="text-aling=center;"><?php echo $titulo ?> Ciudad</p>
		 <div class="col-xs-6 col-xs-offset-3">
			
			<?php
             
                if(!empty($_GET["estado"])):
                    $estado = $_GET["estado"];
             
                    if($estado == "vacio"):
                        
                        $mensaje = "El campo nombre, descripción e imagen son obligatorios";
             
                    elseif($estado == "existe"):
                        
                        $mensaje = "La ciudad ya está creada";
             
                    elseif($estado == "formato"):
                        
                        $mensaje = "La imagen debe ser en formato JPG, PNG o GIF.";
             
                    endif;
             

             ?>
			
			<div class="alert alert-danger">
			   <p> <?= $mensaje ?> </p>
			</div>
			
			
			<?php
                endif;
        
		
		
		
		  


	if(!empty($_GET)){
		
		if(!empty($_GET["id"])){
			
			$idEditar = $_GET["id"];
			
			foreach($ciudades as $posicion => $queciudad){
				
				if($queciudad["id"] == $idEditar){
					$ciudadEditar = $queciudad;
				}
				
			}			
		}
				
	}
		
            ?>
			
			
			
			 
			 <form method="POST" action="<?php echo $actionphp; ?>" enctype="multipart/form-data">
				  <div class="form-group">
					<input type="text" class="form-control" id="nombrePokemon" placeholder="Ingrese nombre de la ciudad" name="nombre"  value="<?php  echo isset($ciudadEditar) ? $ciudadEditar["nombre"] : ""; ?>">
				</div>
               
                <?php
                    if(isset($ciudadEditar)){
                ?>
                 <div class="thumbnail"><img src="../<?php echo $ciudadEditar["imagen"]; ?>" ></div>
                 <input type="hidden" value="<?php echo $ciudadEditar["id"]; ?>" name="id">
                <?php	
                    }
                ?>
                
				<div class="input-group image-preview">
					<input type="text" class="form-control image-preview-filename" disabled="disabled">
					<span class="input-group-btn">
						
						<button type="button" class="btn btn-default image-preview-clear" style="display:none;">
							<span class="fa fa-trash"></span> Limpiar
						</button>

						<div class="btn btn-default image-preview-input">
							<span class="fa fa-folder-open-o"></span>
							<span class="image-preview-input-title">Buscar</span>
							<input type="file" accept="image/png, image/jpeg, image/gif" name="fotoCiudad"/> 
						</div>
					</span>
				</div>
				<br />
				<div class="form-group">
					<label for="descripcion">Descripción de la ciudad</label>
					<textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"><?php 
                        
                        if(isset($ciudadEditar)){
                            $ruta = "../".$ciudadEditar["descripcion"];
                          echo  file_get_contents( $ruta );
                        }
                         ?></textarea>
				</div>
				<button type="submit" class="btn btn-default">Cargar</button>
			</form>
		 </div>
	 </div>
 
 