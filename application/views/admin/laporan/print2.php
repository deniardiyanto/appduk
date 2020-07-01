<html>
<head>
  <title>Cetak PDF</title>
  <style type="text/css">
  p {
   line-height:4px;
 }
 table {
  border-collapse:collapse;
  table-layout:fixed;width: 100%;
}
table td {
  word-wrap:break-word;
  text-align: center;
}
</style>
</head>
<body>
  <p align='right'>Yogyakarta, <?php echo date('d-m-Y')?> </p>
  <p align="center"><h1>PEMERINTAH KABUPATEN SLEMAN</h1>
  <br><h1>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</h1>
  <br><h4>Jl.KRT.Pringgodiningrat No.3 Beran, Tridadi, Sleman, DI.Yogyakarta 55511</h4>
  <br><h4>Telepon: (0274) 868362</h4></p>
  <hr>
  <b>Data Permohonan SKP via APPDuk Sleman per- <?php echo $ket; ?></b><br /><br /> 
  <table border="1" cellpadding="8">
   <tr>
    <th width="20" style="text-align: center;">No.</th>
    <th width="80" style="text-align: center;">Tanggal</th>
    <th width="120" style="text-align: center;">NIK</th>
    <th width="120" style="text-align: center;">No.KK</th>
    <th width="110" style="text-align: center;">No.SKP</th>
    <th width="270" style="text-align: center;">Alamat Pindah</th>
  </tr>
  <?php
  if( ! empty($lap_pemohon)){
    $no = 1;
    foreach($lap_pemohon as $data){
      $tanggal = date('d-m-Y', strtotime($data->tanggal));

      echo "<tr>";
      echo "<td width=20>".$no."</td>";
      echo "<td width=80>".$tanggal."</td>";
      echo "<td width=120>".$data->nik."</td>";
      echo "<td width=120>".$data->no_kk."</td>";    
      echo "<td width=110>".$data->no_skp."</td>";
      echo "<td>".$data->dusun.", RT ".$data->rt.", RW ".$data->rw.", ".$data->kelurahan.", ".$data->kecamatan.", Kode pos ".$data->kodepos."</td>";
      echo "</tr>";
      $no++;
    }
  }
  ?>
</table><br /><br />
  <p align='right'>Copyright © APPDuk Sleman <?php echo date('Y')?></p>
</body>
</html>