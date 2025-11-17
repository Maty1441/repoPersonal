<?php
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("127.0.0.1", "root", "", "marcas_db", "3306"); //cambiar puerto y nombre del servidor.
			return $conexion;
		}
	}
?>