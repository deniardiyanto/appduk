</nav>
<div id="hero-area" class="hero-area-bg">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        <div class="contents">
          <p class="script-font wow fadeInUp" data-wow-delay="0.3s">SELAMAT DATANG</p>
          <h5 class="head-title wow fadeInUp" data-wow-delay="0.4s">APPDuk Disdukcapil Sleman</h5>
          <p class="script-font wow fadeInUp" data-wow-delay="0.6s">Nikmati Pelayanan Prima dari Disdukcapil Sleman, Ikuti instruksi yang tersedia di dalam Website untuk proses pelayanan yang cepat</p>
               <!--  <ul class="social-icon wow fadeInUp" data-wow-delay="0.8s">
                  <li>
                    <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                  </li>
                  <li>
                    <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                  </li>
                  <li>
                    <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                  </li>
                  <li>
                    <a class="linkedin" href="#"><i class="icon-social-linkedin"></i></a>
                  </li>
                  <li>
                    <a class="google" href="#"><i class="icon-social-google"></i></a>
                  </li>
                </ul> -->
                <div class="header-button wow fadeInUp" data-wow-delay="1s">
                  <a class="btn btn-common" data-toggle="modal" data-target="#cekModal"><i class="glyphicon glyphicon-check"></i> Cek Alur Proses Pelayanan!</a> <span class="oi oi-external-link"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal cek-->
      <div class="modal fade" id="cekModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" class="head-title wow fadeInUp" id="exampleModalLabel">Cek seksama alur prosesnya!</h2>
            </div>
            <div class="modal-body">
              <center>  
                <img src="assets/img/alurasli.png" alt="" class="img-responsive">
              </center>
            </div>
            <div class="modal-footer">
              <button class="btn btn-danger" type="button" data-dismiss="modal">Kembali</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal kritik-->
      <div class="modal fade" id="kritikModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="myModalLabel">Kritik dan Saran</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'kritik/simpan_kritik'?>" id="demo-bv-accordion">
              <div class="modal-body">

                <div class="form-group">
                  <label class="control-label col-xs-3" >Email <font color="red">*</font></label>
                  <div class="col-xs-8">
                    <input type="email" name="mail" id="mail" class="form-control" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-xs-3" >Nama <font color="red">*</font></label>
                  <div class="col-xs-8">
                    <input name="nm" id="nm" class="form-control" type="text" placeholder="Nama" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-xs-3" >ISI <font color="red">*</font></label>
                  <div class="col-xs-8">
                    <textarea class="form-control" name="is" class="form-control" type="text" placeholder="ISI" required></textarea>
                  </div>
                </div>

                   <!--  <div class="form-group">
                        <label class="control-label col-xs-3" >ISI</label>
                        <div class="col-xs-8">
                             <select name="satuan" class="form-control" required>
                                <option value="">-PILIH-</option>
                                <option value="Unit">Unit</option>
                                <option value="Kotak">Kotak</option>
                                <option value="Botol">Botol</option>
                                <option value="Sachet">Sachet</option>
                                <option value="Pcs">Pcs</option>
                                <option value="Dus">Dus</option>
                             </select>
                        </div>
                      </div> -->

                      <div class="card-footer small text-muted">
                        <font color="red">*</font>
                        wajib diisi
                      </div>

                    </div>

                    <div class="modal-footer">
                      <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                      <button type="submit" class="btn btn-info">Kirim</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!--END MODAL ADD kritik-->

            <!-- daftar Section Start -->
            <section id="about" class="section-padding">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
                    </div>
                  </div> 
                  <div class="col-md-12 col-sm-12 text-center">
                    <div class="section-title wow flipInX" data-wow-delay="0.3s">
                      <h3>Silahkan Pilih Sesuai Kebutuhan</h3>
                      <a href="<?php echo site_url("daftar"); ?>" class="btn btn-common"><i class="glyphicon glyphicon-floppy-saved"></i> Mohon Baru!</a>
                      <a href="<?php echo site_url("cekstatus"); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-eye-open"></i> Cek Status!</a>
                    </div>
                  </div>   
                </div>
              </div>
            </section>
            <!-- daftar Section End -->

            <!-- Sarat Section Start -->
            <section id="services" class="services section-padding">
              <div class="container">
                <h2 class="section-title wow flipInX" data-wow-delay="0.4s">Syarat dan Ketentuan</h2>
                <p class="text-center" data-wow-delay="0.6s">Mohon Harap diperhatikan dan dipersiapkan Syarat dan Ketentuan yang dibutuhkan!</p><br>
              </div>
              <div class="container">
                <div class="row">
                  <!-- Services item -->
                  <div class="col-md-6 col-lg-3 col-xs-12">
                    <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
                      <div class="icon">
                        <i class="fas fa-file-contract"></i>
                      </div>
                      <div class="services-content">
                        <h3><a>Syarat 1 </a></h3>
                        <p>Telah mengisi surat pengantar dari desa dibuktikan dengan tanda tangan dan cap desa</p>
                      </div>
                    </div>
                  </div>
                  <!-- Sarat item -->
                  <div class="col-md-6 col-lg-3 col-xs-12">
                    <div class="services-item wow fadeInDown" data-wow-delay="0.9s">
                      <div class="icon">
                        <i class="fas fa-file-contract"></i>
                      </div>
                      <div class="services-content">
                        <h3><a>Syarat 2 </a></h3>
                        <p>Telah mengisi surat pengantar dari kecamatan dibuktikan dengan tanda tangan dan cap kecamatan</p>
                      </div>
                    </div>
                  </div>
                  <!-- Sarat item -->
                  <div class="col-md-6 col-lg-3 col-xs-12">
                    <div class="services-item wow fadeInDown" data-wow-delay="1.5s">
                      <div class="icon">
                        <i class="far fa-id-card"></i>
                      </div>
                      <div class="services-content">
                        <h3><a>Syarat 3 </a></h3>
                        <p>Memiliki KTP Elektronik atau KTP lama yang masih berlaku</p>
                      </div>
                    </div>
                  </div>
                  <!-- sarart item -->
                  <div class="col-md-6 col-lg-3 col-xs-12">
                    <div class="services-item wow fadeInDown" data-wow-delay="2.1s">
                      <div class="icon">
                        <i class="fas fa-clipboard-check"></i>
                      </div>
                      <div class="services-content">
                        <h3><a>Syarat 4 </a></h3>
                        <p>Memiliki alasan yang jelas perihal pindah, dibuktikan dengan surat keterangan jika diperlukan</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Services Section End -->


            <!-- Contact Section Start -->
            <section id="contact" class="section-padding">      
              <div class="contact-form">
                <div class="container">
                  <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <div class="contact-block">
                        <h2>Kontak Kami</h2>
                        <form id="contactForm">
                          <div class="row">
                           <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
                            <div id=slidercontainer>
                              <div id=css3slider>
                                <img src="assets/img/about/about-1.jpg" alt="about-1">
                                <img src="assets/img/about/about-2.jpg" alt="about-2">
                                <img src="assets/img/about/about-3.png" alt="about-3">
                                <img src="assets/img/about/about-1.jpg" alt="about-1">
                                <img src="assets/img/about/about-2.jpg" alt="about-2">
                                <img src="assets/img/about/about-3.png" alt="about-3">
                              </div>
                            </div>
                          </div>
                        </div> 

                        <div> </div><br>   
                        <div> </div><br>       
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="footer-right-area wow fadeIn">
                      <h2>Hubungi Kami</h2>
                      <div class="footer-right-contact">
                        <div class="single-contact">
                          <div class="contact-icon">
                            <i class="fa fa-map-marker"></i>
                          </div>
                          <p>Komplek Perkantoran Pemerintah, Jl. KRT. Pringgodiningrat No. 3 Beran, Tridadi, Beran Kidul, Tridadi, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55511</p>
                        </div>
                        <div class="single-contact">
                          <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                          </div>
                          <p><a href="mailto:dukcapil@slemankab.go.id">dukcapil@slemankab.go.id</a></p>
                        </div>
                        <div class="single-contact">
                          <div class="contact-icon">
                            <i class="fa fa-globe"></i>
                          </div>
                          <p><a href="https://dukcapil.slemankab.go.id" target="_blank">https://dukcapil.slemankab.go.id</a></p>
                        </div>
                        <div class="single-contact">
                          <div class="contact-icon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <p><a href="#">(0274) 868362</a></p>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-12" data-wow-delay="0.8s">
                    <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.664005250838!2d110.35241391477766!3d-7.7191527944359075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58ca009cde23%3A0xb5b7cc8a091acbcf!2sDinas+Kependudukan+dan+Catatan+Sipil+Kabupaten+Sleman!5e0!3m2!1sid!2sid!4v1542771374151" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></object>
                  </div>
                </div>
              </div>
            </div>   
          </section>
          <!-- Contact Section End -->
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

