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
            <a class="nav-link" href="<?php echo site_url('cekstatus'); ?>">
              <font color="red">Kembali</font>
            </a>
          </header>
          <div class="well well-lg">
            <div class="container">
              <a href="<?php echo site_url('') ?>"><i class="fas fa-arrow-left"></i>
              Back</a>
            </div>
          </div>
          <script>
//var baseurl="<?php echo base_url();?>";
</script>
<div class="container">
  <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
    <!-- <h2 class="glyphicon glyphicon-info-sign text-center" ></h2> <b>Silahkan Masukkan Kata Kunci Sebagai Berikut :</b> -->
    <div class="panel panel-primary">

      <div class="head-title wow fadeInUp text-center">
        <h2>Hasil Pencarian :</h2>
      </div>
      <div class="panel-body" align="center">
      <font color="red">
        <?php

        if(count($cari)>0)
        {
          foreach ($cari as $data) {
            echo "Selamat Permohonan SKP dengan <b>NIK (".$data->nik . ")</b>, atas <b>Nama Sdr/i " . $data->nama ."</b> telah <u><b>JADI</b></u>.<br>";
            echo "Silahkan diambil pada jam operasional Disdukcapil Sleman, Silahkan cek email Sdr/i untuk informasi lebih detail.<br>";
          }
        }

      else
      {
        echo "Data tidak ditemukan/ masih dalam proses, pastikan NIK yang dimasukkan BENAR";
      }

      ?> 
      </font>                   
    </div>

    