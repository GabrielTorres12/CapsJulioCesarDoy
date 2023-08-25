<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	if (isset($_POST['btnModificarPac'])){

		include("conexion.php");

  
		$fich=$_POST['Ficha'];
		$ayn=$_POST['Apellido_Nombre'];
		$dni=$_POST['DNI'];
		$diag=$_POST['Diagnostico'];
		
		

		mysqli_query($conexion , "UPDATE paciente set Ficha='$fich', Apellido_Nombre='$ayn', DNI='$dni', Diagnostico='$diag' where Ficha='$fich'") or die ("Error de datos");

		mysqli_close($conexion);

		echo "Datos modificados correctamente";
	}
?>
</br>
<a href="javascript: history.go(-2)">VOLVER PARA ATRAS</a>
</body>
</html>
