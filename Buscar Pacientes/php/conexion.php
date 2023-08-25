<?php 
		$server="localhost";
		$usuario="root";
		$contraseña="";
		$bd="pacientes";


		$conexion=mysqli_connect($server,$usuario,$contraseña,$bd)
				or die( "NO SE PUDO CONECTAR CON LA BASE DE DATOS ");
?>
