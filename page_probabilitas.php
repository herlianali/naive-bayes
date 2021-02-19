<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'skripsi');

//jumlah probabilitas golput besar 
$pgb = mysqli_query($koneksi, "select COUNT(golput) FROM data_latih WHERE golput = 'besar'");
$tgb = mysqli_fetch_row($pgb);
$pg = mysqli_query($koneksi, "select COUNT(golput) FROM data_latih");
$tg = mysqli_fetch_row($pg);
$total2 = $tgb[0]/$tg[0];

//jumlah probabilitas golput kecil 
$pgk = mysqli_query($koneksi, "select COUNT(golput) FROM data_latih WHERE golput = 'kecil'");
$tgk = mysqli_fetch_row($pgk);
$total3 = $tgk[0]/$tg[0];

//jumlah probabilitas
$jml1 = $total2+$total3;


//probabilitas urban 
$query1 = mysqli_query($koneksi, "select COUNT(urban) FROM data_latih WHERE urban = 'rendah' AND golput = 'besar'");
$query2 = mysqli_query($koneksi, "select COUNT(urban) FROM data_latih WHERE urban = 'rendah' AND golput = 'kecil'");
$query3 = mysqli_query($koneksi, "select COUNT(urban) FROM data_latih WHERE urban = 'tinggi' AND golput = 'besar'");
$query4 = mysqli_query($koneksi, "select COUNT(urban) FROM data_latih WHERE urban = 'tinggi' AND golput = 'kecil'");


$turgb = mysqli_fetch_row($query1);
$turgk = mysqli_fetch_row($query2);
$tutgb = mysqli_fetch_row($query3);
$tutgk = mysqli_fetch_row($query4);

//jumlah keseluruhan urban golput besar 
$kugb = mysqli_query($koneksi, "select COUNT(urban) FROM data_latih WHERE golput = 'besar'");
$tugb = mysqli_fetch_row($kugb);
//jumlah keseluruhan urban golput kecil 
$kugk = mysqli_query($koneksi, "select COUNT(urban) FROM data_latih WHERE golput = 'kecil'");
$tugk = mysqli_fetch_row($kugk);

//urban tinggi 
$Putgb = $tutgb[0]/$tugb[0];
$Putgk = $tutgk[0]/$tugk[0];

//urban rendah
$Purgb = $turgb[0]/$tugb[0];
$Purgk = $turgk[0]/$tugk[0];

$jml2 = $Putgb+$Purgb;
$jml3 = $Putgk+$Purgk;

//probabilitas lokal 
$ltb = mysqli_query($koneksi, "select COUNT(lokal) FROM data_latih WHERE lokal = 'tinggi' AND golput = 'besar'");
$ltk = mysqli_query($koneksi, "select COUNT(lokal) FROM data_latih WHERE lokal = 'tinggi' AND golput = 'kecil'");
$lrb = mysqli_query($koneksi, "select COUNT(lokal) FROM data_latih WHERE lokal = 'rendah' AND golput = 'besar'");
$lrk = mysqli_query($koneksi, "select COUNT(lokal) FROM data_latih WHERE lokal = 'rendah' AND golput = 'kecil'");

$pltgb = mysqli_fetch_row($ltb);
$pltgk = mysqli_fetch_row($ltk);
$plrgb = mysqli_fetch_row($lrb);
$plrgk = mysqli_fetch_row($lrk);

//jumlah keseluruhan lokal golput besar 
$klgb = mysqli_query($koneksi, "select COUNT(lokal) FROM data_latih WHERE golput = 'besar'");
$tlgb = mysqli_fetch_row($klgb);
//jumlah keseluruhan lokal golput kecil 
$klgk = mysqli_query($koneksi, "select COUNT(lokal) FROM data_latih WHERE golput = 'kecil'");
$tlgk = mysqli_fetch_row($klgk);

//lokal tinggi
$Pltgb = $pltgb[0]/$tlgb[0];
$Pltgk = $pltgk[0]/$tlgk[0];

//lokal rendah
$Plrgb = $plrgb[0]/$tlgb[0];
$Plrgk = $plrgk[0]/$tlgk[0];

$jml4 = $Pltgb+$Plrgb;
$jml5 = $Pltgk+$Plrgk;

//probabilitas milenial 
$mtb = mysqli_query($koneksi, "select COUNT(milenial) FROM data_latih WHERE milenial = 'tinggi' AND golput = 'besar'");
$mtk = mysqli_query($koneksi, "select COUNT(milenial) FROM data_latih WHERE milenial = 'tinggi' AND golput = 'kecil'");
$mrb = mysqli_query($koneksi, "select COUNT(milenial) FROM data_latih WHERE milenial = 'rendah' AND golput = 'besar'");
$mrk = mysqli_query($koneksi, "select COUNT(milenial) FROM data_latih WHERE milenial = 'rendah' AND golput = 'kecil'");

$pmtgb = mysqli_fetch_row($mtb);
$pmtgk = mysqli_fetch_row($mtk);
$pmrgb = mysqli_fetch_row($mrb);
$pmrgk = mysqli_fetch_row($mrk);

//jumlah keseluruhan milenial golput besar 
$kmgb = mysqli_query($koneksi, "select COUNT(milenial) FROM data_latih WHERE golput = 'besar'");
$tmgb = mysqli_fetch_row($kmgb);
//jumlah keseluruhan milenial golput kecil 
$kmgk = mysqli_query($koneksi, "select COUNT(milenial) FROM data_latih WHERE golput = 'kecil'");
$tmgk = mysqli_fetch_row($kmgk);

//milenial tinggi
$Pmtgb = $pmtgb[0]/$tmgb[0];
$Pmtgk = $pmtgk[0]/$tmgk[0];

//milenial rendah
$Pmrgb = $pmrgb[0]/$tmgb[0];
$Pmrgk = $pmrgk[0]/$tmgk[0];

$jml6 = $Pmtgb+$Pmrgb;
$jml7 = $Pmtgk+$Pmrgk;

//probabilitas pramil 
$pratb = mysqli_query($koneksi, "select COUNT(pramil) FROM data_latih WHERE pramil = 'tinggi' AND golput = 'besar'");
$pratk = mysqli_query($koneksi, "select COUNT(pramil) FROM data_latih WHERE pramil = 'tinggi' AND golput = 'kecil'");
$prarb = mysqli_query($koneksi, "select COUNT(pramil) FROM data_latih WHERE pramil = 'rendah' AND golput = 'besar'");
$prark = mysqli_query($koneksi, "select COUNT(pramil) FROM data_latih WHERE pramil = 'rendah' AND golput = 'kecil'");

$Ppratb = mysqli_fetch_row($pratb);
$Ppratk = mysqli_fetch_row($pratk);
$Pprarb = mysqli_fetch_row($prarb);
$Pprark = mysqli_fetch_row($prark);

//jumlah keseluruhan pramil golput besar 
$kpragb = mysqli_query($koneksi, "select COUNT(pramil) FROM data_latih WHERE golput = 'besar'");
$tpragb = mysqli_fetch_row($kpragb);
//jumlah keseluruhan pramil golput kecil 
$kpragk = mysqli_query($koneksi, "select COUNT(pramil) FROM data_latih WHERE golput = 'kecil'");
$tpragk = mysqli_fetch_row($kpragk);

//pramil tinggi
$Ppratgb = $Ppratb[0]/$tpragb[0];
$Ppratgk = $Ppratk[0]/$tpragk[0];
//pramil rendah
$Pprargb = $Pprarb[0]/$tpragb[0];
$Pprargk = $Pprark[0]/$tpragk[0];

$jml8 = $Ppratgb+$Pprargb;
$jml9 = $Ppratgk+$Pprargk;

//probabilitas belum_menikah 
$bmtb = mysqli_query($koneksi, "select COUNT(belum_menikah) FROM data_latih WHERE belum_menikah = 'tinggi' AND golput = 'besar'");
$bmtk = mysqli_query($koneksi, "select COUNT(belum_menikah) FROM data_latih WHERE belum_menikah = 'tinggi' AND golput = 'kecil'");
$bmrb = mysqli_query($koneksi, "select COUNT(belum_menikah) FROM data_latih WHERE belum_menikah = 'rendah' AND golput = 'besar'");
$bmrk = mysqli_query($koneksi, "select COUNT(belum_menikah) FROM data_latih WHERE belum_menikah = 'rendah' AND golput = 'kecil'");
$Pbmtb = mysqli_fetch_row($bmtb);
$Pbmtk = mysqli_fetch_row($bmtk);
$Pbmrb = mysqli_fetch_row($bmrb);
$Pbmrk = mysqli_fetch_row($bmrk);

//jumlah keseluruhan belum_menikah golput besar 
$kbmgb = mysqli_query($koneksi, "select COUNT(belum_menikah) FROM data_latih WHERE golput = 'besar'");
$tbmgb = mysqli_fetch_row($kbmgb);
//jumlah keseluruhan belum_menikah golput kecil 
$kbmgk = mysqli_query($koneksi, "select COUNT(belum_menikah) FROM data_latih WHERE golput = 'kecil'");
$tbmgk = mysqli_fetch_row($kbmgk);

//belum_menikah tinggi
$pbmtgb = $Pbmtb[0]/$tbmgb[0];
$pbmtgk = $Pbmtk[0]/$tbmgk[0];
//belum_menikah rendah
$pbmrgb = $Pbmrb[0]/$tbmgb[0];
$pbmrgk = $Pbmrk[0]/$tbmgk[0];

$jml10 = $pbmtgb+$pbmrgb;
$jml11 = $pbmtgk+$pbmrgk;

//probabilitas sudah_menikah 
$smtb = mysqli_query($koneksi, "select COUNT(sudah_menikah) FROM data_latih WHERE sudah_menikah = 'tinggi' AND golput = 'besar'");
$smtk = mysqli_query($koneksi, "select COUNT(sudah_menikah) FROM data_latih WHERE sudah_menikah = 'tinggi' AND golput = 'kecil'");
$smrb = mysqli_query($koneksi, "select COUNT(sudah_menikah) FROM data_latih WHERE sudah_menikah = 'rendah' AND golput = 'besar'");
$smrk = mysqli_query($koneksi, "select COUNT(sudah_menikah) FROM data_latih WHERE sudah_menikah = 'rendah' AND golput = 'kecil'");

$Psmtb = mysqli_fetch_row($smtb);
$Psmtk = mysqli_fetch_row($smtk);
$Psmrb = mysqli_fetch_row($smrb);
$Psmrk = mysqli_fetch_row($smrk);

//jumlah keseluruhan sudah_menikah golput besar 
$ksmgb = mysqli_query($koneksi, "select COUNT(sudah_menikah) FROM data_latih WHERE golput = 'besar'");
$tsmgb = mysqli_fetch_row($ksmgb);
//jumlah keseluruhan sudah_menikah golput kecil 
$ksmgk = mysqli_query($koneksi, "select COUNT(sudah_menikah) FROM data_latih WHERE golput = 'kecil'");
$tsmgk = mysqli_fetch_row($ksmgk);

//sudah_menikah tinggi
$psmtgb = $Psmtb[0]/$tsmgb[0];
$psmtgk = $Psmtk[0]/$tsmgk[0];
//sudah_menikah rendah
$psmrgb = $Psmrb[0]/$tsmgb[0];
$psmrgk = $Psmrk[0]/$tsmgk[0];

$jml12 = $psmtgb+$psmrgb;
$jml13 = $psmtgk+$psmrgk;

//probabilitas pernah_menikah 
$pmtb = mysqli_query($koneksi, "select COUNT(pernah_menikah) FROM data_latih WHERE pernah_menikah = 'tinggi' AND golput = 'besar'");
$pmtk = mysqli_query($koneksi, "select COUNT(pernah_menikah) FROM data_latih WHERE pernah_menikah = 'tinggi' AND golput = 'kecil'");
$pmrb = mysqli_query($koneksi, "select COUNT(pernah_menikah) FROM data_latih WHERE pernah_menikah = 'rendah' AND golput = 'besar'");
$pmrk = mysqli_query($koneksi, "select COUNT(pernah_menikah) FROM data_latih WHERE pernah_menikah = 'rendah' AND golput = 'kecil'");

$Ppmtb = mysqli_fetch_row($pmtb);
$Ppmtk = mysqli_fetch_row($pmtk);
$Ppmrb = mysqli_fetch_row($pmrb);
$Ppmrk = mysqli_fetch_row($pmrk);

//jumlah keseluruhan pernah_menikah golput besar 
$kpmgb = mysqli_query($koneksi, "select COUNT(pernah_menikah) FROM data_latih WHERE golput = 'besar'");
$tpmgb = mysqli_fetch_row($kpmgb);
//jumlah keseluruhan pernah_menikah golput kecil 
$kpmgk = mysqli_query($koneksi, "select COUNT(pernah_menikah) FROM data_latih WHERE golput = 'kecil'");
$tpmgk = mysqli_fetch_row($kpmgk);

//pernah_menikah tinggi
$ppmtgb = $Ppmtb[0]/$tpmgb[0];
$ppmtgk = $Ppmtk[0]/$tpmgk[0];
//pernah_menikah rendah
$ppmrgb = $Ppmrb[0]/$tpmgb[0];
$ppmrgk = $Ppmrk[0]/$tpmgk[0];

$jml14 = $ppmtgb+$ppmrgb;
$jml15 = $ppmtgk+$ppmrgk;

//probabilitas laki_laki 
$lktb = mysqli_query($koneksi, "select COUNT(laki_laki) FROM data_latih WHERE laki_laki = 'tinggi' AND golput = 'besar'");
$lktk = mysqli_query($koneksi, "select COUNT(laki_laki) FROM data_latih WHERE laki_laki = 'tinggi' AND golput = 'kecil'");
$lkrb = mysqli_query($koneksi, "select COUNT(laki_laki) FROM data_latih WHERE laki_laki = 'rendah' AND golput = 'besar'");
$lkrk = mysqli_query($koneksi, "select COUNT(laki_laki) FROM data_latih WHERE laki_laki = 'rendah' AND golput = 'kecil'");
$plktb = mysqli_fetch_row($lktb);
$plktk = mysqli_fetch_row($lktk);
$plkrb = mysqli_fetch_row($lkrb);
$plkrk = mysqli_fetch_row($lkrk);

//jumlah keseluruhan laki_laki golput besar 
$klkgb = mysqli_query($koneksi, "select COUNT(laki_laki) FROM data_latih WHERE golput = 'besar'");
$tlkgb = mysqli_fetch_row($klkgb);
//jumlah keseluruhan laki_laki golput kecil 
$klkgk = mysqli_query($koneksi, "select COUNT(laki_laki) FROM data_latih WHERE golput = 'kecil'");
$tlkgk = mysqli_fetch_row($klkgk);

//laki_laki tinggi
$plktgb = $plktb[0]/$tlkgb[0];
$plktgk = $plktk[0]/$tlkgk[0];
//laki_laki rendah
$plkrgb = $plkrb[0]/$tlkgb[0];
$plkrgk = $plkrk[0]/$tlkgk[0];

$jml16 = $plktgb+$plkrgb;
$jml17 = $plktgk+$plkrgk;

//probabilitas perempuan 
$ptb = mysqli_query($koneksi, "select COUNT(perempuan) FROM data_latih WHERE perempuan = 'tinggi' AND golput = 'besar'");
$ptk = mysqli_query($koneksi, "select COUNT(perempuan) FROM data_latih WHERE perempuan = 'tinggi' AND golput = 'kecil'");
$prb = mysqli_query($koneksi, "select COUNT(perempuan) FROM data_latih WHERE perempuan = 'rendah' AND golput = 'besar'");
$prk = mysqli_query($koneksi, "select COUNT(perempuan) FROM data_latih WHERE perempuan = 'rendah' AND golput = 'kecil'");

$pptb = mysqli_fetch_row($ptb);
$pptk = mysqli_fetch_row($ptk);
$pprb = mysqli_fetch_row($prb);
$pprk = mysqli_fetch_row($prk);

//jumlah keseluruhan laki-laki golput besar 
$kpgb = mysqli_query($koneksi, "select COUNT(perempuan) FROM data_latih WHERE golput = 'besar'");
$tpgb = mysqli_fetch_row($kpgb);
//jumlah keseluruhan laki-laki golput kecil 
$kpgk = mysqli_query($koneksi, "select COUNT(perempuan) FROM data_latih WHERE golput = 'kecil'");
$tpgk = mysqli_fetch_row($kpgk);

//laki-laki tinggi
$pptgb = $pptb[0]/$tpgb[0];
$pptgk = $pptk[0]/$tpgk[0];
//laki-laki rendah
$pprgb = $pprb[0]/$tpgb[0];
$pprgk = $pprk[0]/$tpgk[0];

$jml18 = $pptgb+$pprgb;
$jml19 = $pptgk+$pprgk;
?>
