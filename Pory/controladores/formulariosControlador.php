<?php

	class ControladorFormularios{

		/*ACTUALIZAR --------------------------------*/

	public function ctrActualizarRegistro(){
			if(isset($_POST["actualizarNombre"])){

				$tabla = "almaceng";

				$datos = array("clave" => $_POST["actualizarProd"],
							   "nombre" => $_POST["actualizarNombre"],
							   "descripcion" => $_POST["actualizarDesc"],
							   "existencia" => $_POST["actualizarExis"],
							   "precio" => $_POST["actualizarPrecio"]);

	$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

					if($respuesta == "ok"){

						 echo '<script>
          if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
          }

      </script>';
  echo '<div class="alert alert-success">Datos Actualizados</div>

  <script>

  		setTimeout(function(){
  			window.location = "index.php?pagina=inicio";

  		},2000);
  	</script>
  ';
		}
					}
				


	}



		static public function ctrRegistro(){
			if(isset($_POST["registroProd"])){

				$tabla = "almaceng";

				$datos = array("clave" => $_POST["registroProd"],
							   "nombre" => $_POST["registroNombre"],
							   "descripcion" => $_POST["registroDesc"],
							   "existencia" => $_POST["registroExis"],
							   "precio" => $_POST["registroPrecio"]);

				$respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);


				return $respuesta;

				/*return $_POST["registroProd"]."<br>".$_POST["registroNombre"]."<br>".$_POST["registroDesc"]."<br>".$_POST["registroExis"]."<br>".$_POST["registroPrecio"];*/

			}
		}
	

			static public function ctrSeleccionarRegistros($item, $valor){

					$tabla = "almaceng";

					$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla,$item,$valor);

					return $respuesta;
			}


/*INGRESO--------------------------------*/

public function ctrIngreso(){
	if(isset($_POST["usuario"])){
		
		$tabla = "usuarios";
		$item = "usuario";
		$valor = $_POST["usuario"];

		$respuesta =  ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		if($respuesta["Usuario"] == $_POST["usuario"] && $respuesta["Psw"] == $_POST["psw"] ){

			$_SESSION["validar"] = "no";

echo '<script>
          if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
          }

          window.location = "index.php?pagina=inicio";

      </script>';
      echo '<pre>';print_r($respuesta);echo'</pre>';

		}else{

			echo '<script>
          if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
          }

      </script>';

      echo '<div class="alert alert-danger">usuario o contraseña incorrectos</div>';
       echo '<pre>';print_r($respuesta);echo'</pre>';
		}

		
	}
}


public function ctrEliminarRegistro(){

	if(isset($_POST["eliminarRegistro"])){

		$tabla = "almaceng";

		$valor = $_POST["eliminarRegistro"];

		$respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);
		
		if($respuesta == "OK"){
			echo '<script>
				if ( window.history.replaceState){

					window.history.replaceState(null, null, window.location.href);}

					window.location = "index.php?pagina=inicio";

					</script>';
			
		}

		

	}
}



}
	
?>