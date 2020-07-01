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
            <h2>Form Pindah Domisili</h2>
        </div>
    </div>
    <!-- Load Librari Google reCaptcha nya -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <div class="container">
     <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
        <div class="alert alert-info">
            <i class="glyphicon glyphicon-info-sign" ></i> Silahkan isi data berikut sesuai dengan data diri yang BENAR untuk agar dapat segera DIPROSES.
        </div>
        <div class="panel panel-primary">

            <div class="panel-heading">
                Data Kepindahan
            </div>
            <div class="panel-body">
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <div class="card-body">
                    <form action="<?php base_url('admin/daftar') ?>" method="post" enctype="multipart/form-data" id="demo-bv-accordion">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik">NIK
                                        <font color="red">*</font></label>
                                        <input class="form-control" required type="text" name="nik" placeholder="NIK yang terdapat pada KTP/KK">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email
                                            <font color="red">*</font></label>
                                            <input class="form-control" required type="email" name="email" placeholder="Nama@mail.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pekerjaan">Nama Lengkap
                                                <font color="red">*</font></label>
                                                <input class="form-control" required type="text" name="nama" placeholder="Nama sesuai KTP/identitas diri lainnya">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pekerjaa">Nomor KK
                                                    <font color="red">*</font></label>
                                                    <input class="form-control" required type="text" name="no_kk" placeholder="Nomor KK yang terdapat di bagian atas Kartu Keluarga">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat Pindah
                                                        <font color="red">*</font></label>
                                                        <!--  <textarea name="alamat" placeholder="Isi Alamat serta lokasi yang JELAS dan BENAR" required class="form-control" rows="4"></textarea> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="dusun">Dusun/Jln.
                                                            <font color="red">*</font></label>
                                                            <input class="form-control" required type="text" name="dusun" placeholder="Dusun tujuan">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nik">RT
                                                            <font color="red">*</font></label>
                                                            <input class="form-control" required type="number" name="rt" placeholder="RT">
                                                        </div>&nbsp;&nbsp;&nbsp;
                                                        <div class="form-group">
                                                            <label for="nik">RW
                                                                <font color="red">*</font></label>
                                                                <input class="form-control" required type="number" name="rw" placeholder="RW">
                                                            </div>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <div class="form-group">
                                                            <label for="nik">Kode POS
                                                                <font color="red">*</font></label>
                                                                <input class="form-control" required type="text" name="kodepos" placeholder="Kode POS">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="nik">Kelurahan
                                                                        <font color="red">*</font></label>
                                                                        <input class="form-control" required type="text" name="kelurahan" placeholder="Kelurahan">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="nik">Kecamatan
                                                                            <font color="red">*</font></label>
                                                                            <input class="form-control" required type="text" name="kecamatan" placeholder="Kecamatan">
                                                                        </div>
                                                                    </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="scan">No. permohonan SKP di kelurahan/kecamatan 
                                                                                        <font color="red">*</font></label>
                                                                                        <input type="text" name="no_skp" class="form-control" placeholder="Masukkan No.SKP">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="scan">Foto permohonan SKP di kelurahan/kecamatan, KTP dan alasan pindah (opsional) dalam satu Foto 
                                                                                            <font color="red">*</font> (Maksimal 2 MB)</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>    
                                                                                <div class="form-group">
                                                                                    <input class="form-control-file"
                                                                                    type="file" name="image" />
                                                                                </div>

                                                                                <!-- <div class="g-recaptcha" data-sitekey="6LdnKH4UAAAAACF9c53Dz83qlmzyoMWqi2nwD5Ph"></div></br> -->
                                                                                <div class="card-footer small text-muted">
                                                                                    <font color="red">*</font>
                                                                                    Wajib diisi
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <button type="submit" class="btn btn-success btn-lg"><i class="glyphicon glyphicon-send"></i> Submit</button>
                                                                                    <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>

                                                                    </div>