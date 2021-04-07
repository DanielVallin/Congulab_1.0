<?php 

	require_once "conexion.php";

	$conexion=conexion();
	$id=$_POST['id_leyes'];
	$sql="CALL ps_Eliminar_ley('$id')";
	echo mysqli_query($conexion,$sql);
 ?>