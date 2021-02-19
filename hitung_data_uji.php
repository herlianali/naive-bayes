<!DOCTYPE html>
<?php 
include 'connect.php';
include 'page_probabilitas.php';
include 'navbar.php'; ?>
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
					<th>perempuan</th>
					<th>laki-laki</th>
					<th>golput</th>
					<th>class prediction</th>
					<th>besar</th>
					<th>kecil</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = $conn->query("SELECT * FROM `data_testing`");
					while($fetch = $query->fetch_array()){
				?>
				<tr>
					<td>
						<?php 
						if (($fetch['urban'])=='tinggi') {
						 	$UB = $Putgb;
						}elseif (($fetch['urban'])=='rendah') {
							$UB = $Purgb;
						}
						if (($fetch['urban'])=='tinggi') {
						 	$UK = $Putgk;
						}elseif (($fetch['urban'])=='rendah') {
							$UK = $Purgk;
						}
						echo $fetch['urban'];
					?></td>
					<td><?php 
						if (($fetch['lokal'])=='tinggi') {
						 	$LB = $Pltgb;
						}elseif (($fetch['lokal'])=='rendah') {
							$LB = $Plrgb;
						}
						if (($fetch['lokal'])=='tinggi') {
						 	$LK = $Pltgk;
						}elseif (($fetch['lokal'])=='rendah') {
							$LK = $Plrgk;
						}
						echo $fetch['lokal'];
					?></td>
					<td><?php 
						if (($fetch['milenial'])=='tinggi') {
							$MB = $Pmtgb;
						}elseif (($fetch['milenial'])=='rendah') {
							$MB = $Pmrgb;
						}
						if (($fetch['milenial'])=='tinggi') {
							$MK = $Pmtgk;
						}elseif (($fetch['milenial'])=='rendah') {
							$MK = $Pmrgk;
						}
					echo $fetch['lokal'];
					?></td>
					<td><?php 
						if (($fetch['pramil'])=='tinggi') {
						 	$PRAB = $Ppratgb;
						}elseif (($fetch['pramil'])=='rendah') {
							$PRAB = $Pprargb;
						}
						if (($fetch['pramil'])=='tinggi') {
						 	$PRAK = $Ppratgk;
						}elseif (($fetch['pramil'])=='rendah') {
							$PRAK = $Pprargk;
						}
					echo $fetch['pramil'];?></td>
					<td><?php 
						if (($fetch['belum_menikah'])=='tinggi') {
						 	$BMB = $pbmtgb;
						}elseif (($fetch['belum_menikah'])=='rendah') {
							$BMB = $pbmrgb;
						}
						if (($fetch['belum_menikah'])=='tinggi') {
						 	$BMK = $pbmtgk;
						}elseif (($fetch['belum_menikah'])=='rendah') {
							$BMK = $pbmrgk;
						}
					echo $fetch['belum_menikah'];?></td>
					<td><?php 
						if (($fetch['sudah_menikah'])=='tinggi') {
						 	$SMB = $psmtgb;
						}elseif (($fetch['sudah_menikah'])=='rendah') {
							$SMB = $psmrgb;
						}
						if (($fetch['sudah_menikah'])=='tinggi') {
						 	$SMK = $psmtgk;
						}elseif (($fetch['sudah_menikah'])=='rendah') {
							$SMK = $psmrgk;
						}
					echo $fetch['sudah_menikah'];?></td>
					<td><?php
					if (($fetch['pernah_menikah'])=='tinggi') {
						 	$PMB = $ppmtgb;
						}elseif (($fetch['pernah_menikah'])=='rendah') {
							$PMB = $ppmrgb;
						}
					if (($fetch['pernah_menikah'])=='tinggi') {
						 	$PMK = $ppmtgk;
						}elseif (($fetch['pernah_menikah'])=='rendah') {
							$PMK = $ppmrgk;
						}
					echo $fetch['pernah_menikah']?></td>
					
					<td><?php 
					if (($fetch['laki_laki'])=='tinggi') {
						 	$LKB = $plktgb;
						}elseif (($fetch['laki_laki'])=='rendah') {
							$LKB = $plkrgb;
						}
					if (($fetch['laki_laki'])=='tinggi') {
						 	$LKK = $plktgk;
						}elseif (($fetch['laki_laki'])=='rendah') {
							$LKK = $plkrgk;
						}
					echo $fetch['laki_laki']?></td>
					<td><?php 
					if (($fetch['perempuan'])=='tinggi') {
						 	$PB = $pptgb;
						}elseif (($fetch['perempuan'])=='rendah') {
							$PB = $pprgb;
						}
					if (($fetch['perempuan'])=='tinggi') {
						 	$PK = $pptgk;
						}elseif (($fetch['perempuan'])=='rendah') {
							$PK = $pprgk;
						}
					echo $fetch['perempuan']?></td>
					<td><?php echo $fetch['golput']?></td>
					<td></td>
					<td><?php 
					$besar = $UB*$LB*$MB*$PRAB*$BMB*$SMB*$PMB*$LKB*$PB*$total2;
					echo round($besar, 8); ?></td>
					<td><?php echo round($UK*$LK*$MK*$PRAK*$BMK*$SMK*$PMK*$LKK*$PK*$total3, 8); ?></td>
				</tr>
				<?php } ?>
				<tr></tr>
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
