<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/jquery-ui/jquery-ui.min.css'); ?>" /> <!-- Load file css jquery-ui -->
  <script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script> <!-- Load file jquery -->
</head>

<body id="page-top">

  <?php $this->load->view("admin/_partials/navbar.php") ?>
  <div id="wrapper">

    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

        <!-- DataTables -->
        <div align="left">
          <a href="<?php echo site_url('admin/laporan/') ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i>
          Back</a>
        </div>
      </div>
      <h2>Data Permohonan SKP</h2><hr>
      <div align="center">
        <form method="get" action="">
          <label>Filter Berdasarkan</label>
          <select name="filter" id="filter">
            <option value="">Pilih</option>
            <option value="1">Per Tanggal</option>
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
          </select>
          <div align="center">
            <tr>
              <th width="10%"><div id="form-tanggal">
                <label>Tanggal</label><br>
                <input type="text" name="tanggal" class="input-tanggal" />
              </div></th>
              <th width="10%"><div id="form-bulan">
                <label>Bulan</label><br>
                <select name="bulan">
                  <option value="">Pilih</option>
                  <option value="1">Januari</option>
                  <option value="2">Februari</option>
                  <option value="3">Maret</option>
                  <option value="4">April</option>
                  <option value="5">Mei</option>
                  <option value="6">Juni</option>
                  <option value="7">Juli</option>
                  <option value="8">Agustus</option>
                  <option value="9">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
              </div></th>
              <th width="10%"><div id="form-tahun">
                <label>Tahun</label><br>
                <select name="tahun">
                  <option value="">Pilih</option>
                  <?php
                foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                  echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                }
                ?>
              </select>
            </div></th></tr><br>
            <th><button type="submit" class="btn btn-info">Tampilkan</button>
            <a href="<?php echo base_url('admin/lap_pemohon'); ?>">Reset Filter</a>
          </form>
          <hr /></th></tr>

          <b><?php echo $ket; ?></b>
          <a href="<?php echo $url_cetak; ?>"><u><strong>CETAK PDF</strong></u></a></div>
          <div class="table-responsive">
            <div align="right">
              <table class="table table-hover table-striped" border="1" id="dataTable">
                <thead class="thead-dark">
                  <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>No.KK</th>
                    <th>No.SKP</th>
                    <th>Alamat</th>
                  </tr>
                </thead>
                <?php
                if( ! empty($lap_pemohon)){
                  $no = 1;
                  foreach($lap_pemohon as $data){
                    $tanggal = date('d-m-Y', strtotime($data->tanggal));

                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td>".$tanggal."</td>";
                    echo "<td>".$data->nik."</td>";
                    echo "<td>".$data->nama."</td>";
                    echo "<td>".$data->no_kk."</td>";
                    echo "<td>".$data->no_skp."</td>";
                    echo "<td>".$data->dusun.", RT ".$data->rt.", RW ".$data->rw.", ".$data->kelurahan.", ".$data->kecamatan.", Kode pos ".$data->kodepos."</td>";
                    echo "</tr>";
                    $no++;
                  }
                }
                ?>
              </table>
            </div>
          </div>

          <!-- Sticky Footer -->
          <?php $this->load->view("admin/_partials/footer.php") ?>

        </div>
        <!-- /.content-wrapper -->

      </div>
      <!-- /#wrapper -->


      <?php $this->load->view("admin/_partials/scrolltop.php") ?>
      <?php $this->load->view("admin/_partials/modal.php") ?>

      <?php $this->load->view("admin/_partials/js.php") ?>


    </body>
    <script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js'); ?>"></script> <!-- Load file plugin js jquery-ui -->
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
      $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
          });

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
              }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
          })
      })
    </script>
    <script>
    $(document).ready(function(){
      $('#dataTable').DataTable();
    });
  </script>
  </html>