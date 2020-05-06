<?php

	class Conexion{

		static public function conectar(){
			/*Nombre servidor; nombre base de datos*/
			$link = new PDO("mysql:host=localhost;dbname=alcacenphp",
							"warrior",
							"Adminward12");
			$link -> exec("set names utf8");

			return $link;
		}
	}
?>