lines (15 sloc)  380 Bytes
  
  <?php 
  
	  require_once "conexion.php";
	  $conexion=conexion();
  
	  $id=$_POST['idjuego'];
	  $sql="CALL ps_Buscar_ley($id)";
  
	  $result=mysqli_query($conexion,$sql);
  
	  $ver=mysqli_fetch_row($result);
  
	  $datos=array(
			  'id_leyes'=>$ver[0],
				'NombreU'=>$ver[1],
				'GrupoU'=>$ver[2],
					  );
	  echo json_encode($datos);
   ?>