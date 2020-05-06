<h3>Iniciar Sesión</h3>



<div class="d flex" >

<form method="post">

<div class="form-group">
    <label for="text">Usuario:</label>
    <input type="text" class="form-control"  id="usuario" name="usuario">
  </div>



  <div class="form-group">
    <label for="password">Contraseña:</label>
    <input type="password" class="form-control" id="psw" name="psw">
  </div>


<?php 

/*INSTANCIA CLASE NO ESTATICO*/

   /*   $registro = new ControladorFormularios();
      $registro -> ctrRegistro();*/

/*INSTANCIA ESTATICO*/

  $ingreso =  new ControladorFormularios();
  $ingreso -> ctrIngreso();
    ?>
    


        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
      