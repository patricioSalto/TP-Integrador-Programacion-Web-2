 <link rel="stylesheet" href="./css/contacto.css">
       <div class="container mb-20">
        <h1 class="titulos center-block" id="home">Comunicate con nosotros!</h1>

    <div class="titulos container">
    <form action="procesar.php" method="post">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="nombre" name="nombre">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Apellido" name="apellido">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Mail</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" placeholder="email" name="email">
    </div>
  </div>

        
  <div class="form-group row">
   
    
    <div class="col-sm-2">Que lugares le gustaria visitar?</div>
    <div class="col-sm-10">
     
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="checkbox1">
        <label class="form-check-label" for="gridCheck1">
          Playas
        </label>
      </div>
      
            <div class="form-check">
        <input class="form-check-input" type="checkbox" name="checkbox2">
        <label class="form-check-label" for="gridCheck1">
          Glaciares
        </label>
      </div>
      
            <div class="form-check">
        <input class="form-check-input" type="checkbox" name="checkbox3">
        <label class="form-check-label" for="gridCheck1">
          Montañas
        </label>
      </div>
      
            <div class="form-check">
        <input class="form-check-input" type="checkbox" name="checkbox4">
        <label class="form-check-label" for="gridCheck1">
          Selvas
        </label>
      </div>
      
    </div>  
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensaje</label>
    <textarea class="form-control" name="mensaje" rows="4" cols="30"></textarea>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>

</div>
    </div>
    








