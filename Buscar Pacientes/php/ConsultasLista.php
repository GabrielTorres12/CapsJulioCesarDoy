<!DOCTYPE html>
<html>
<head>
	<title> Consultas </title>
<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body style="background-color: #424949" >
	<?php
if (isset($_POST['btn1'])){

include('conexion.php');

	

		$insert="SELECT * FROM paciente WHERE DNI='$12345678'";

				$resultado=mysqli_query($conexion, $insert)
					or die ("Error al Buscar Paciente");


echo "Se muestra por pantalla Ficha, Apellido y Nombre, DNI, Diagnostico Del Paciente.";

echo '<table border="10" style="background-color:yellow">';
	echo '<tr>';		
		echo '<th id="Ficha"> Ficha </th>';
		echo '<th id="Apellido_Nombre"> Apellido_Nombre </th>';
		echo '<th id="DNI"> DNI </th>';
		echo '<th id="Diagnostico"> Diagnostico </th>';
	echo '</tr>"';
	

	while ($extraer=mysqli_fetch_array($consulta)) 
	{
		echo '<tr>';
			echo '<td>'.$extraer['Ficha'].'</td>';
			echo '<td>'.$extraer['Apellido_Nombre'].'</td>';
			echo '<td>'.$extraer['DNI'].'</td>';
			echo '<td>'.$extraer['Diagnostico'].'</td>';
		echo '</tr>';	

	}

	mysqli_close($conexion);

	echo "</table>";

}

?>

</br>
<a href="javascript: history.go(-1)">VOLVER PARA ATRAS</a>
</body>
</html>
