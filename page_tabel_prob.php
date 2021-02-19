<?php 
include 'connect.php';
include 'page_probabilitas.php';
include 'navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
  <div class="container">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Probabilitas</th>
      <th scope="col">besar</th>
      <th scope="col">kecil</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">P(besar/kecil)</th>
      <td><?php echo round($total2, 2);?></td>
      <td><?php echo round($total3, 2);?></td>
    </tr>
        <tr>
      <th scope="row">jumlah</th>
      <td><?php echo round($jml1, 2);?></td>
      <td></td>
    </tr>
        <tr>
      <th scope="row">P(Urban | data)</th>
    </tr>
        <tr>
      <th scope="row">tinggi</th>
      <td><?php echo round($Putgb, 2);?></td>
      <td><?php echo round($Putgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">rendah</th>
      <td><?php echo round($Purgb, 2);?></td>
      <td><?php echo round($Purgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">jumlah</th>
      <td><?php echo round($jml2, 2);?></td>
      <td><?php echo round($jml3, 2);?></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">P(lokal | data)</th>
    </tr>
        <tr>
      <th scope="row">tinggi</th>
      <td><?php echo round($Pltgb, 2);?></td>
      <td><?php echo round($Pltgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">rendah</th>
      <td><?php echo round($Plrgb, 2);?></td>
      <td><?php echo round($Plrgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">jumlah</th>
      <td><?php echo round($jml4, 2);?></td>
      <td><?php echo round($jml5, 2);?></td>
    </tr>
    <tr>
      <th scope="row">P(milenial | data)</th>
    </tr>
        <tr>
      <th scope="row">tinggi</th>
      <td><?php echo round($Pmtgb, 2);?></td>
      <td><?php echo round($Pmtgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">rendah</th>
      <td><?php echo round($Pmrgb, 2);?></td>
      <td><?php echo round($Pmrgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">jumlah</th>
      <td><?php echo round($jml6, 2);?></td>
      <td><?php echo round($jml7, 2);?></td>
    </tr>
    <tr>
      <th scope="row">P(pramil | data)</th>
    </tr>
        <tr>
      <th scope="row">tinggi</th>
      <td><?php echo round($Ppratgb, 2);?></td>
      <td><?php echo round($Ppratgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">rendah</th>
      <td><?php echo round($Pprargb, 2);?></td>
      <td><?php echo round($Pprargk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">jumlah</th>
      <td><?php echo round($jml8, 2);?></td>
      <td><?php echo round($jml9, 2);?></td>
    </tr>
    <tr>
      <th scope="row">P(belum_menikah | data)</th>
    </tr>
        <tr>
      <th scope="row">tinggi</th>
      <td><?php echo round($pbmtgb, 2);?></td>
      <td><?php echo round($pbmtgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">rendah</th>
      <td><?php echo round($pbmrgb, 2);?></td>
      <td><?php echo round($pbmrgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">jumlah</th>
      <td><?php echo round($jml10, 2);?></td>
      <td><?php echo round($jml11, 2);?></td>
    </tr>
    <tr>
      <th scope="row">P(sudah_menikah | data)</th>
    </tr>
        <tr>
      <th scope="row">tinggi</th>
      <td><?php echo round($psmtgb, 2);?></td>
      <td><?php echo round($psmtgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">rendah</th>
      <td><?php echo round($psmrgb, 2);?></td>
      <td><?php echo round($psmrgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">jumlah</th>
      <td><?php echo round($jml12, 2);?></td>
      <td><?php echo round($jml13, 2);?></td>
    </tr>
    <tr>
      <th scope="row">P(pernah_menikah | data)</th>
    </tr>
        <tr>
      <th scope="row">tinggi</th>
      <td><?php echo round($ppmtgb, 2);?></td>
      <td><?php echo round($ppmtgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">rendah</th>
      <td><?php echo round($ppmrgb, 2);?></td>
      <td><?php echo round($ppmrgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">jumlah</th>
      <td><?php echo round($jml14, 2);?></td>
      <td><?php echo round($jml15, 2);?></td>
    </tr>
    <th scope="row">P(laki-laki | data)</th>
    </tr>
        <tr>
      <th scope="row">tinggi</th>
      <td><?php echo round($plktgb, 2);?></td>
      <td><?php echo round($plktgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">rendah</th>
      <td><?php echo round($plkrgb, 2);?></td>
      <td><?php echo round($plkrgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">jumlah</th>
      <td><?php echo round($jml18, 2);?></td>
      <td><?php echo round($jml19, 2);?></td>
    </tr>
    <tr>
      <th scope="row">P(perempuan | data)</th>
    </tr>
        <tr>
      <th scope="row">tinggi</th>
      <td><?php echo round($pptgb, 2);?></td>
      <td><?php echo round($pptgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">rendah</th>
      <td><?php echo round($pprgb, 2);?></td>
      <td><?php echo round($pprgk, 2);?></td>
    </tr>
    <tr>
      <th scope="row">jumlah</th>
      <td><?php echo round($jml16, 2);?></td>
      <td><?php echo round($jml17, 2);?></td>
    </tr>
    <tr>
      
  </tbody>
</table>
</div>
<script src="bootstrap/js/bootstrap.js"/>
</body>
</html>