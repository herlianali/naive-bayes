<!DOCTYPE html>
<?php 
include 'connect.php';
include 'page_probabilitas.php';
include 'navbar.php'; 
include 'hitung_data_uji';?>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><div class="card border-dark mb-2" style="max-width: 35rem;">
  <div class="card-header">Data testing</div>
  <div class="card-body text-dark">
		<form action = "upload1.php" class = "form-inline" method = "POST" enctype = "multipart/form-data">
			<div class = "form-group" style="padding: 15px 32px;">
				<label>CSV File: <input type = "file" name = "file" class = "form-control"/></label>
				<button type = "submit" name = "save" class="btn btn-outline-secondary"><span class = "glyphicon glyphicon-upload"></span> UPLOAD</button>
			</div>
		</form>
		<form action="" method="POST">
			<a href="hitung_data_uji.php" class="btn btn-outline-secondary">Hitung data testing</a>
		</form>
  </div>
</div>
</center>
<center>
	<div class = "col-md-12 well">
		<br />
		<table id = "table" class = "table table-bordered">
			<thead>
				<tr>
					<th>urban</th>
					<th>lokal</th>
					<th>Milenial</th>
					<th>pramil</th>
					<th>belum_menikah</th>
					<th>sudah_menikah</th>
					<th>pernah_menikah</th>	
					<th>laki-laki</th>
					<th>perempuan</th>
					<th>golput</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = $conn->query("SELECT * FROM `data_testing`");
					while($fetch = $query->fetch_array()){
				?>
				<tr>
					<td><?php echo $fetch['urban']?></td>
					<td><?php echo $fetch['lokal']?></td>
					<td><?php echo $fetch['milenial']?></td>
					<td><?php echo $fetch['pramil']?></td>
					<td><?php echo $fetch['belum_menikah']?></td>
					<td><?php echo $fetch['sudah_menikah']?></td>
					<td><?php echo $fetch['pernah_menikah']?></td>
					<td><?php echo $fetch['laki_laki']?></td>
					<td><?php echo $fetch['perempuan']?></td>
					<td><?php echo $fetch['golput']?></td>
					
				</tr>
				<?php	
					}
				?>
				<tr><td><?php var_dump($UK); ?></td></tr>
			</tbody>
		</table>
	</div>
</center>
	
</body>
<script src="bootstrap/js/bootstrap.js"/>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>
</body>
</html>
