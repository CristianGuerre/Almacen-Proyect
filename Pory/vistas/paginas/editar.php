<?php
  
  if(isset($_GET["clave"])){

    $item="clave";
    $valor = $_GET["clave"];

    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);

   /* echo'<pre>'; print_r($usuario);'</pre>';*/

  }
  
?>
<h3>Editar producto</h3>



<div class="d flex" >

<form method="post">

  <div class="form-group">
    <label for="text">Clave del producto:</label>
    <input type="text" value="<?php echo $usuario["clave"];?>" class="form-control" id="actualizarProd" name="actualizarProd">
  </div>
  

 <div class="form-group">
    <label for="text">Nombre:</label>
    <input type="text" class="form-control" value="<?php echo $usuario["nombre"];?>" id="registractualizarNombre" name="actualizarNombre">
  </div>



  <div class="form-group">
    <label for="text">Descripción:</label>
    <input type="text" class="form-control" value="<?php echo $usuario["descripcion"];?>" id="actualizarDesc" name="actualizarDesc">
  </div>

  <div class="form-group">
    <label for="text">Existencia:</label>
    <input type="text" class="form-control" value="<?php echo $usuario["existencia"];?>" id="actualizarExis" name="actualizarExis">
  </div>

  <div class="form-group">
    <label for="text">Precio:</label>
    <input type="text" class="form-control" value="<?php echo $usuario["precio"];?>" id="actualizarPrecio" name="actualizarPrecio">

    <input type="hidden" class="form-control" value="<?php echo $usuario["clave"];?>" id="claveUsser" name="claveUsser">
  </div>


    
<?php 

$actualizar = new ControladorFormularios();
$actualizar -> ctrActualizarregistro();

  ?>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
      