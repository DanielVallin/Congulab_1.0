<?php 
	require_once "php/conexion.php";
	$conexion=conexion();

	$sql="CALL ps_Buscar_leyes";
	$result=mysqli_query($conexion,$sql);
 ?>

<span class="btn btn-raised btn-primary btn-lg" data-toggle="modal" data-target="#addmodal">
			<span class="fa fa-plus-circle"></span> agrega nuevo
		</span>

<table id="example" class="table table-sm table-inverse table-bordered">
		<tr style="font-weight: bold" >
			<td>Nombre</td>
			<td>Grupo</td>
		</tr>
	<?php 

		while ($ver=mysqli_fetch_row($result)):
	 ?>
		<tr>
			<td><?php echo $ver[1]; ?></td>
			<td><?php echo $ver[2]; ?></td>
		</tr>

		<?php 
			endwhile;
		 ?>
</table>


