<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("admin/_partials/head.php") ?>

  

  <!-- Slider CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/slide-style.css"); ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/main2.css"); ?>">
  <!-- Responsive Style -->

  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style_sliderimage.css"); ?>" media="all">



</head>
<body id="page-top" style="background-image:url(<?php echo site_url("assets/img/background/bg1.jpg")?>">

  <!-- <body background="url"> -->
  <?php $this->load->view("admin/_partials/navbar.php") ?>

  <div id="wrapper">

    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
      -->
      <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

      <!-- <img src="<?php echo base_url(); ?>assets/img/background/bg2.jpg" alt="gambar" class="bg" class="transparan2"/> -->
      
      <!-- Icon Cards-->
      <table align="center" border="0" cellpadding="1" >
        <tr>
          <th width="47%" >
            <div align="center">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5">Jumlah permohonan selesai/Jadi!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1">
                  <span class="float-left"><h2><?php print_r($jum2['jum_statusjadi']) ?></h2></span>
                  <span class="float-right">
                  </span>
                </a>
              </div>
            </div>
          </th>
          <th width="6%"></th>
          <th width="47%">
            <div align="center">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list-alt"></i>
                  </div>
                  <div class="mr-5">Jumlah permohonan in-progress!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" >
                  <span class="float-left"><h2><?php print_r($jum['jum_status']) ?></h2></span>
                  <span class="float-right">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </th>
      </tr>
    </table><br>
    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">      
      <div class="contact-form">
        <div class="container">
          <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="contact-block">
                <h2>PROFIL</h2>
                <form id="contactForm">
                  <div class="row">
                   <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
                    <div id=slidercontainer>
                      <div id=css3slider>
                        <img style="background-image:url(<?php echo site_url("assets/img/about/gcapil1.jpg")?>">
                        <img style="background-image:url(<?php echo site_url("assets/img/about/gcapil02.jpg")?>">
                        <img style="background-image:url(<?php echo site_url("assets/img/about/gcapil03.jpg")?>">
                        <img style="background-image:url(<?php echo site_url("assets/img/about/gcapil1.jpg")?>">
                        <img style="background-image:url(<?php echo site_url("assets/img/about/gcapil02.jpg")?>">
                        <img style="background-image:url(<?php echo site_url("assets/img/about/gcapil03.png")?>">
                      </div>
                    </div>
                  </div>
                </div>  
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="footer-right-area wow fadeIn">
              <h2>VISI DAN MISI</h2>
              <div class="footer-right-contact">
                <div class="single-contact">
                  <div class="contact-icon">

                  </div>
                  <p>Visi
                    “Terwujudnya tertib administrasi kependudukan yang didukung pelayanan prima menuju database kependudukan yang akurat, terintegrasi dalam satu sistem informasi,mudah diakses dan dimanfaatkan untuk pelayanan publik”.
                  </p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    
                  </div>
                  <p>Misi
                    “Menciptakan database kependudukan yang akurat melalui pelayanan prima dalam bidang pendaftaran penduduk dan pencatatan sipil”.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- /.container-fluid -->

            <!-- Sticky Footer -->


          </div>
          <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->
        <?php $this->load->view("admin/_partials/footer.php") ?>


        <?php $this->load->view("admin/_partials/scrolltop.php") ?>
        <?php $this->load->view("admin/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>

        <!-- Demo scripts for this page-->
        <!-- <script src="js/demo/chart-area-demo.js"></script> -->
       <!--  <script src="js/demo/chart-bar-demo.js"></script> -->
        <!-- <script src="js/demo/chart-pie-demo.js"></script> -->


      </body>
      </html>