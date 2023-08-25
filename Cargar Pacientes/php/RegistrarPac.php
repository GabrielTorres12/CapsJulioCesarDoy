<!DOCTYPE html>
<html>
<head>
	<title>CAPS Julio Cesar Doy </title>
</head>
<body>
	<?php

	if (isset($_POST['btnRegistrarPac'])){

		include("conexion.php");

 	
		$fich=$_POST['Ficha'];
		$ayn=$_POST['Apellido_Nombre'];
		$dni=$_POST['DNI'];
		$diag=$_POST['Diagnostico'];
		
		

			$insert="INSERT into paciente values ('$fich','$ayn','$dni','$diag')";

				$resultado=mysqli_query($conexion,$insert)
					or die ("Error al inserta Registro");

		mysqli_close($conexion);
		echo "Datos insertado correctamente";
	}
?>

</br>
<a href="javascript: history.go(-2)">VOLVER PARA ATRAS</a>

</body>
</html>