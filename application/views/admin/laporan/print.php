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
  <b>Data Kritik dan Saran APPDuk Sleman per- <?php echo $ket; ?></b><br /><br />
  <table border="1" cellpadding="8">
    <tr>
      <th width="30" style="text-align: center;">No.</th>
      <th width="80" style="text-align: center;">Tanggal</th>
      <th width="90" style="text-align: center;">ID kritik</th>
      <th width="120" style="text-align: center;">Email</th>
      <th width="120" style="text-align: center;">Nama</th>
      <th width="270" style="text-align: center;">Isi</th>
    </tr>
    <?php
    if( ! empty($lap_kritik)){
      $no = 1;
      foreach($lap_kritik as $data){
        $tanggal = date('d-m-Y', strtotime($data->tanggal));
        echo "<tr>";
        echo "<td width=30>".$no."</td>";
        echo "<td width=80>".$tanggal."</td>";
        echo "<td width=90>".$data->id_kritik."</td>";
        echo "<td width=120>".$data->email."</td>";
        echo "<td width=120>".$data->nama."</td>";
        echo "<td width=270>".$data->isi."</td>";
        echo "</tr>";
        $no++;
      }
    }
    ?>
  </table><br /><br />
  <p align='right'>Copyright © APPDuk Disdukcapil Sleman <?php echo date('Y')?></p>
</body>
</html>