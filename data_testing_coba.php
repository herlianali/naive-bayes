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
					<th>Class Prediction</th>
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
					<td><?php 
						if (($fetch['urban'])=='tinggi') {
						 	if (round($Putgb, 2) > round($Putgk, 2)) {
						 		$urbanb = round($Putgb, 2);
						 		echo $urbanb;
						 	}else{
						 		$urbank = round($Putgk, 2);
						 		echo $urbank;
						 	}
						}elseif (($fetch['urban'])=='rendah') {
							if (round($Purgb, 2) > round($Purgk, 2)) {
						 		$urbanb = round($Purgb, 2);
						 		echo $urbanb;
						 	}else{
						 		$urbank = round($Purgk, 2);
						 		echo $urbank;
						 	}

						}
						// echo $fetch['urban'];
					?></td>
					<td><?php 
						if (($fetch['lokal'])=='tinggi') {
						 	if (round($Pltgb, 2) > round($Pltgk, 2)) {
						 		$lokalb = round($Pltgb, 2);
						 		echo $lokalb;
						 	}else{
						 		$lokalk = round($Pltgk, 2);
						 		echo $lokalk;
						 	}
						}elseif (($fetch['lokal'])=='rendah') {
							if (round($Plrgb, 2) > round($Plrgk, 2)) {
						 		$lokalb = round($Plrgb, 2);
						 		echo $lokalb;
						 	}else{
						 		$lokalk = round($Plrgk, 2);
						 		echo $lokalk;
						 	}

						}
						// echo $fetch['lokal'];
					?></td>
					<td><?php 
						if (($fetch['milenial'])=='tinggi') {
						 	if (round($Pmtgb, 2) > round($Pmtgk, 2)) {
						 		$milenialb = round($Pmtgb, 2);
						 		echo $milenialb;
						 	}else{
						 		$milenialk = round($Pmtgk, 2);
						 		echo $milenialk;
						 	}
						}elseif (($fetch['milenial'])=='rendah') {
							if (round($Pmrgb, 2) > round($Pmrgk, 2)) {
						 		$milenialb = round($Pmrgb, 2);
						 		echo $milenialb;
						 	}else{
						 		$milenialk = round($Pmrgk, 2);
						 		echo $milenialk;
						 	}

						}
						// echo $fetch['lokal'];
					?></td>
					<td><?php 
						if (($fetch['pramil'])=='tinggi') {
						 	if (round($Ppratgb, 2) > round($Ppratgk, 2)) {
						 		$pramilb = round($Ppratgb, 2);
						 		echo $pramilb;
						 	}else{
						 		$pramilk = round($Ppratgk, 2);
						 		echo $pramilk;
						 	}
						}elseif (($fetch['pramil'])=='rendah') {
							if (round($Pprargb, 2) > round($Pprargk, 2)) {
						 		$pramilb = round($Pprargb, 2);
						 		echo $pramilb;
						 	}else{
						 		$pramilk = round($Pprargk, 2);
						 		echo $pramilk;
						 	}

						}
					//php echo $fetch['pramil'];?></td>
					<td><?php 
						if (($fetch['belum_menikah'])=='tinggi') {
						 	if (round($pbmtgb, 2) > round($pbmtgk, 2)) {
						 		$belum_menikahb = round($pbmtgb, 2);
						 		echo $belum_menikahb;
						 	}else{
						 		$belum_menikahk = round($pbmtgk, 2);
						 		echo $belum_menikahk;
						 	}
						}elseif (($fetch['belum_menikah'])=='rendah') {
							if (round($pbmrgb, 2) > round($pbmrgk, 2)) {
						 		$belum_menikahb = round($pbmrgb, 2);
						 		echo $belum_menikahb;
						 	}else{
						 		$belum_menikahk = round($pbmrgk, 2);
						 		echo $belum_menikahk;
						 	}

						}
					// php echo $fetch['belum_menikah'];?></td>
					<td><?php 
						if (($fetch['sudah_menikah'])=='tinggi') {
						 	if (round($psmtgb, 2) > round($psmtgk, 2)) {
						 		$sudah_menikahb = round($psmtgb, 2);
						 		echo $sudah_menikahb;
						 	}else{
						 		$sudah_menikahk = round($psmtgk, 2);
						 		echo $sudah_menikahk;
						 	}
						}elseif (($fetch['sudah_menikah'])=='rendah') {
							if (round($psmrgb, 2) > round($psmrgk, 2)) {
						 		$sudah_menikahb = round($psmrgb, 2);
						 		echo $sudah_menikahb;
						 	}else{
						 		$sudah_menikahk = round($psmrgk, 2);
						 		echo $sudah_menikahk;
						 	}

						}
					// echo $fetch['sudah_menikah'];?></td>
					<td><?php
					if (($fetch['pernah_menikah'])=='tinggi') {
						 	if (round($ppmtgb, 2) > round($ppmtgk, 2)) {
						 		$pernah_menikahb = round($ppmtgb, 2);
						 		echo $pernah_menikahb;
						 	}else{
						 		$pernah_menikahk = round($ppmtgk, 2);
						 		echo $pernah_menikahk;
						 	}
						}elseif (($fetch['pernah_menikah'])=='rendah') {
							if (round($ppmrgb, 2) > round($ppmrgk, 2)) {
						 		$pernah_menikahb = round($ppmrgb, 2);
						 		echo $pernah_menikahb;
						 	}else{
						 		$pernah_menikahk = round($ppmrgk, 2);
						 		echo $pernah_menikahk;
						 	}

						}
					//php echo $fetch['pernah_menikah']?></td>
					<td><?php 
					if (($fetch['perempuan'])=='tinggi') {
						 	if (round($pptgb, 2) > round($pptgk, 2)) {
						 		$perempuanb = round($pptgb, 2);
						 		echo $perempuanb;
						 	}else{
						 		$perempuank = round($pptgk, 2);
						 		echo $perempuank;
						 	}
						}elseif (($fetch['perempuan'])=='rendah') {
							if (round($pprgb, 2) > round($pprgk, 2)) {
						 		$perempuanb = round($pprgb, 2);
						 		echo $perempuanb;
						 	}else{
						 		$perempuank = round($pprgk, 2);
						 		echo $perempuank;
						 	}

						}
					//echo $fetch['perempuan']?></td>
					<td><?php 
					if (($fetch['laki_laki'])=='tinggi') {
						 	if (round($plktgb, 2) > round($plktgk, 2)) {
						 		$laki_lakib = round($plktgb, 2);
						 		echo $laki_lakib;
						 	}else{
						 		$laki_lakik = round($plktgk, 2);
						 		echo $laki_lakik;
						 	}
						}elseif (($fetch['laki_laki'])=='rendah') {
							if (round($plkrgb, 2) > round($plkrgk, 2)) {
						 		$laki_lakib = round($plkrgb, 2);
						 		echo $laki_lakib;
						 	}else{
						 		$laki_lakik = round($plkrgk, 2);
						 		echo $laki_lakik;
						 	}

						}
					//echo $fetch['laki_laki']?></td>
					<td><?php 
					$besar = $urbanb*$lokalb*$milenialb*$pramilb*$belum_menikahb*$sudah_menikahb*$pernah_menikahb*$perempuanb*$laki_lakib*$total2;
					// ;
					echo $besar;
					// echo round($besar, 2);
					?></td>
					<td><?php 
					$kecil = $urbank*$lokalk*$milenialk*$pramilk*$belum_menikahk*$sudah_menikahk*$pernah_menikahk*$perempuank*$laki_lakik*$total3;
					echo $kecil;
					?></td>

				</tr>
				<?php } ?>
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
