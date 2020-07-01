<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top" style="background-image:url(<?php echo site_url("assets/img/background/bgcapil2.jpg")?>">

  <body id="page-top">


    <div id="wrapper">

      <div id="content-wrapper">

        <div class="container-fluid">

          
          <li class="breadcrumb-item">

          </li>
          

          <style type="text/css">
          body{background-image:url(assets/img/background/sipil.jpg); background-size:cover}
          #bg{padding:20px}
          h1{text-align:center; color:#FFF}
          p{margin-bottom:10px; color:#FFF}
    /* .wrapper {
    width: 100%;
    height:100%;
    overflow: hidden;
    position:absolute;
    }

  wrapper > img {
  width: 100%;
    z-index:-1;
    }*/
    /*kemudian samakan ukuran lebar gambar dengan ukuran lebar div*/
    .lapis {
  width:auto;/*
  width:100%;*/
  height:100%;
  background-color:rgba(0, 0, 0, 0.6);
  position:fixed;
  z-index:9999;
  bottom:1px;
}
/* di sini lah kuncinya pada properti background color saya menggunakan warna dari RGBA yang akan mengubah menjadi transparan*/.

</style>


</head>

<body >

  <div id="bg">
    <div class="wrapper">
      <div class="lapis">
        <div class="container">
          <div class="card card-login mx-auto mt-5">
            <div class="card-header"> 
              <form class="form-signin" action="<?php echo site_url('admin/home/auth') ?>" method="post">
                <a class="navbar-brand mr-1" href="<?php echo site_url('admin') ?>"><img src="<?= base_url(); ?>assets/img/Capiladmin.png" alt="" class="brand-icon"></a>
                Login</div>
                <?php echo $this->session->flashdata('msg');?>
                <div class="card-body">
                  <div class="form-group">
                    <div class="form-label-group">
                      <input id="username" name="username" class="form-control" required="required" autofocus="autofocus">
                      <label for="username">NIP</label>
                    </div>
                  </div>
            <!-- <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" required="required" autofocus="autofocus">
                <label for="inputEmail">E-mail</label>
              </div>
            </div> -->
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" required="required">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember me
                </label>
              </div>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button> 

          </div>
        </div>

      </div><br><br>
      <footer >
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span><?php echo "<font color='white'>Copyright © ".Date('Y') ?></font></span>
          </div>
        </div>
      </footer>
    </div>
    
  </div>

</div>



<!-- Bootstrap core JavaScript-->
<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="assets/jquery-easing/jquery.easing.min.js"></script>

<!-- jQuery-->
<script src="assets/jquery/jquery.js"></script>
<!-- Bootsrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>


</body>


</html>
