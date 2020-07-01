<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>APPDuk (Aplikasi Pindah Domisili Penduduk)</title>

  <link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" >
  <!-- Fonts -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/font-awesome.min.css"); ?>">
  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/simple-line-icons.css"); ?>">
  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/slicknav.css"); ?>">
  <!-- Menu CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/menu_sideslide.css"); ?>">
  <!-- Slider CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/slide-style.css"); ?>">
  <!-- Nivo Lightbox -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/nivo-lightbox.css" ); ?>">
  <!-- Animate -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animate.css"); ?>">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/main.css"); ?>">
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/responsive.css"); ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style_sliderimage.css"); ?>" media="all">


  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">




  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-86211771-3"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-86211771-3');
</script>


</head>

<body>


  <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
          </button>
          <a href="<?php echo site_url(); ?>" class="navbar-brand"><img src="assets/img/Capil.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
            <a class="nav-link" href="<?php echo site_url(); ?>">
              <font color="red">Kembali</font>
            </a>
          </header>
          <div class="well well-lg">
            <div class="container">
              <a href="<?php echo site_url('') ?>"><i class="fas fa-arrow-left"></i>
              Back</a>
            </div>
          </div>
<div class="container">
  <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
    <!-- <h2 class="glyphicon glyphicon-info-sign text-center" ></h2> <b>Silahkan Masukkan Kata Kunci Sebagai Berikut :</b> -->
    <div class="panel panel-primary">

      <div class="head-title wow fadeInUp text-center">
        <h2>CEK STATUS PERMOHONAN</h2>
      </div>
      <div class="alert alert-info">
            <i class="glyphicon glyphicon-info-sign" ></i> Harap isi field NIK dengan BENAR.
        </div>
      <div class="panel-body">               
      <div class="col-md-6">
        <div align="center">
          <div class="form-group text-center">
            <form action="<?php echo base_url('cekstatus/hasil')?>" action="GET">
              <label for="nik">Nomor NIK
                <font color="red">*</font></label>
                <input class="form-control" name="cari" id="cari" required type="cari" placeholder="Masukkan NIK yang digunakan pada proses permohonan SKP">
              </div>
            </div>
          </div>
          <div><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<button type="submit" name="submit" id="btn-search" class="btn btn-common"><p class="glyphicon glyphicon-search">|CEK</p>
          </button>
        </form>
      </div>
    </div>
    <div class="card-footer small text-muted">
      <font color="red">*</font>
      Wajib diisi
    </div>
    <div class="alert alert-danger">
            <i class="glyphicon glyphicon-info-sign" ></i> Apabila dalam kurun waktu 2x24 jam data masih belum diproses/tidak menerima email notifikasi <B>JADI</B>, maka permohonan SKP ditolak. Untuk rincian penolakan akan diinformasikan melalui email kemudian.
        </div>
  </div>
</div>

<footer>
    <!-- <div class="jumbotron">
    <div class="container">
    </div>
  </div> -->
  <div class="container">
    <hr>
    <p class="pull-right"><a href="#">
      <i class="icon-arrow-up"></i>Back to top</a></p>
      <span><b>Copyright © <?php echo "APPDuk Disdukcapil Sleman" ." ". Date('Y') ?></b></span>
    </footer>
    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/template/plugins/bootstrap-validator/bootstrapValidator.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mixitup.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.counterup.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/waypoints.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/wow.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nav.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing.min.js'); ?>"></script>  
    <script type="text/javascript" src="<?php echo base_url('assets/js/nivo-lightbox.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.slicknav.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/form-validator.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/contact-form-script.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/map.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/template/js/demo/form-validation.js'); ?>"></script>
    <script>
    $(document).ready(function(){
      $('#mydata').DataTable();
    });
  </script>
  <script>
    var baseurl = "<?php echo base_url(); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
  </script>

</body>
</html>
