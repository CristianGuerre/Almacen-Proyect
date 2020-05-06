
<h3>Productos Nuevos</h3>



<div class="d flex" >

<form method="post">

  <div class="form-group">
    <label for="text">Clave del producto:</label>
    <input type="text"  class="form-control" id="registroProd" name="registroProd">
  </div>
  

 <div class="form-group">
    <label for="text">Nombre:</label>
    <input type="text" class="form-control"  id="registroNombre" name="registroNombre">
  </div>



  <div class="form-group">
    <label for="text">Descripción:</label>
    <input type="text" class="form-control" id="registroDesc" name="registroDesc">
  </div>

  <div class="form-group">
    <label for="text">Existencia:</label>
    <input type="text" class="form-control" id="registroexis" name="registroExis">
  </div>

  <div class="form-group">
    <label for="text">Precio:</label>
    <input type="text" class="form-control" id="registroPrecio" name="registroPrecio">
  </div>

<?php 

/*INSTANCIA CLASE NO ESTATICO*/

   /*   $registro = new ControladorFormularios();
      $registro -> ctrRegistro();*/

/*INSTANCIA ESTATICO*/

  $registro =  ControladorFormularios::ctrRegistro();

    if($registro == "ok"){

      echo '<script>
          if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
          }

      </script>';
  echo '<div class="alert alert-success">Registro Exitoso</div>';
              }
    ?>
    


        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
      