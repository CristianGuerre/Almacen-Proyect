<?php 

require_once "modelos/conexion.php";

class ModeloFormularios{

	static public function mdlRegistro($tabla, $datos){


			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(clave, nombre, descripcion, existencia, precio) VALUES (:clave, :nombre, :descripcion, :existencia, :precio)");

			$stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$stmt->bindParam(":existencia", $datos["existencia"], PDO::PARAM_STR);
			$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "ok";
		

			}else{
		
		print_r(Conexion::conectar()->errorInfo());
		print_r(Conexion::conectar());
		print_r("Error,else");
			

			}

			

				

	}


static public function mdlSeleccionarRegistros($tabla, $item, $valor){

	if($item == null && $valor==null){
	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
	$stmt->execute();

	return $stmt->fetchAll();
}else{
$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:$item");

$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
	$stmt->execute();

	return $stmt->fetch();

	}
}


static public function mdlActualizarRegistro($tabla, $datos){


			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, descripcion=:descripcion, existencia=:existencia, precio=:precio WHERE clave = :clave");

			
			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$stmt->bindParam(":existencia", $datos["existencia"], PDO::PARAM_STR);
			$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
			$stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "ok";
		

			}else{
		
		print_r(Conexion::conectar()->errorInfo());
		print_r(Conexion::conectar());
		print_r("Error,else");
			

			}

			

				

	}


static public function mdlEliminarRegistro($tabla, $valor){


			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE clave = :clave");

			$stmt->bindParam(":clave", $valor, PDO::PARAM_STR);

			if($stmt->execute()){
				return "ok";
		

			}else{
		
		print_r(Conexion::conectar()->errorInfo());
		print_r(Conexion::conectar());
		print_r("Error,else");
			

			}

			

				

	}

}

?>