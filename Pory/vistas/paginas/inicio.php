<?php



if(!isset($_SESSION["validar"])){

    
      echo '<script>window.location = "index.php?pagina=ingreso";</script>';
      return;
    

    }else{
      if($_SESSION["validar"] == "yes"){

      echo '<script>window.location = "index.php?pagina=ingreso";</script>';

      return;
    }
  }
  

$usuarios = ControladorFormularios::ctrSeleccionarregistros(null, null);


 

  
    ?>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>Clave</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Exitencia</th>
        <th>Precio</th>
        <th>Acciones</th>

      </tr>
    </thead>
    

<?php foreach ($usuarios as $key => $value): ?>

  <tr>
        <td><?php echo $value["clave"]; ?></td>
        <td><?php echo $value["nombre"]; ?></td>
        <td><?php echo $value["descripcion"]; ?></td>
        <td><?php echo $value["existencia"]; ?></td>
        <td><?php echo $value["precio"]; ?></td>
       
        <td>

          <div class="btn-g">
            <div class="px1">
              
            
          <a href="index.php?pagina=editar&clave=<?php echo $value["clave"]?>" class="btn btn-warning">Editar</a>

          </div>

          <div class="px1">

<form method="post">

<input type="hidden" value="<?php echo $value["clave"]; ?>" name="eliminarRegistro">
<button type="submit" class="btn btn-success">Vender</button>

<?php 

$eliminar = new ControladorFormularios();
$eliminar -> ctrEliminarRegistro();
?>

</form>

          </div>
          </div>
        </td>
        </tr>
}
<?php endforeach ?>
<tbody>
      
    </tbody>
  </table>
</div>
</thead>
</table>
</div>
</div>