<?php 

	require_once "conexion.php";

	$conexion=conexion();

	$Nombre=$_POST['nombrel'];
	$Grupo=$_POST['aniol'];

	$sql="CALL ps_Alta_ley ('$Nombre','$Grupo')";

	echo mysqli_query($conexion,$sql);

 ?>