<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
        if(isset($_POST['btnEliminarPac'])){

             include('conexion.php');

             $dni=(int)$_POST['DNI'];
     
      
             mysqli_query($conexion,"DELETE FROM paciente where DNI='$dni'")or die("No se Borraron los datos");
             mysqli_close($conexion);
             echo"Datos Eliminados Correctamente";
              }
    ?>
</br>
<a href="javascript: history.go(-2)">VOLVER PARA ATRAS</a>
</body>
</html>