<?php 
	
	class Conectar {

		public function conexion(){
			$conexion = mysqli_connect('localhost',
										'root',
										'',
										'juegos');
			return $conexion;
		}
	}

 ?>