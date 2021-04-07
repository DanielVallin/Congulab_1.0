
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>PHP Search</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
				<?php 
					$connection = mysqli_connect('localhost','root','','congulab');
					if(isset($_POST['search'])) {
						$searchKey = $_POST['search'];
						
						$sql = "SELECT * FROM pruebas  WHERE campo1 LIKE '%$searchKey%' limit 5 ";	
					}else
					$sql = "SELECT * FROM pruebas limit 5";
					$searchKey = "";
					
					$result = mysqli_query($connection,$sql);
				?>
				<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By Name" value="" > 
					</div>
					<div class="col-md-6 text-left">
						<button class="btn">Search</button>
					</div>
				</form>
				<br>
				<br>
				</div>
				<table>
		<tr>
			<th>Nombre de la Ley</th>
			<th>Ultima reforma</th>
			<th>FechaEmitida</th>
			<th><td><button class="btn">AGREGAR NUEVO</button></td></th>
		</tr>
		<?php while($row = mysqli_fetch_object($result)) { ?>
		<tr>
			<td><?php echo $row->campo1 ?></button></td>
			<td><?php echo $row->campo2 ?></button></td>
			<td><?php echo $row->campo3 ?></button></td>
			<td><button class="btn">VER</button></td>
			<td><button class="btn">EDITAR</button></td>
			<td><button class="btn">PDF</button></td>
		</tr>
		<?php } ?>
	</table>
			</div>
		</div>
	</div>
</body>
</html> 