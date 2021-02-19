<!DOCTYPE HTML>
<?php
	include 'connect.php';
	include 'navbar.php';
?>

<html lang = "en">
	<head>
		<title>Data training</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
	
<body>

	<center><div class="card border-dark mb-2" style="max-width: 35rem;">
  <div class="card-header">Data Training</div>
  <div class="card-body text-dark">
		<form action = "upload.php" class = "form-inline" method = "POST" enctype = "multipart/form-data">
			<div class = "form-group" style="padding: 15px 32px;">
				<label>CSV File: <input type = "file" name = "file" class = "form-control"/></label>
				<button type = "submit" name = "save" class="btn btn-outline-secondary"><span class = "glyphicon glyphicon-upload"></span> UPLOAD</button>
			</div>
		</form>
		<form action="" method="POST">
			<a href="page_tabel_prob.php" class="btn btn-outline-secondary">Probabilitas</a>
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
					$query = $conn->query("SELECT * FROM `data_latih`");
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
			</tbody>
		</table>
	</div>
</center>
	
<?php 
include "connect.php";
if (isset($_POST['probabiltas'])) {
	$sql_hit = "SELECT * FROM data_uji ";
    $res = mysqli_query($conn, $sql_hit);
    var_dump($res);
    while($row = mysqli_fetch_array($res)){
        ProsesNaiveBayes($row['id'], $row['urban'], $row['lokal'], $row['milenial'], $row['pramil'], $row['belum_menikah'], $row['sudah_menikah'], $row['pernah_menikah'], $row['perempuan'], $row['laki_laki'], $row['golput']);
    }
    
} ?>
</body>
<script src="bootstrap/js/bootstrap.js"/>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	});
</script>

</html>