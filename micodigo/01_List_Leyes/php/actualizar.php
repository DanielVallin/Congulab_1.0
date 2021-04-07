<?php 

	require_once "conexion.php";

	$conexion=conexion();

	$id_leyes=$_POST['id_leyes'];
	$Nombre=$_POST['NombreU'];
	$Grupo=$_POST['GrupoU'];

	$sql="CALL ps_Actualizar_ley('$id_leyes',
									'$Nombre',
									'$GrupoU')";
									
	echo mysqli_query($conexion,$sql);
 ?>