
<nav class="navbar navbar-expand navbar-light static-top" style="background-color: #48bcff">

 <a class="navbar-brand mr-1" href="<?= base_url('admin/page') ?>"><i class="fa fa-user-circle-o" style="font-size:24px"> |APPDuk </i></a>

 <button class="btn btn-link btn-sm text-dark order-1 order-sm-0" id="sidebarToggle">
    <i class="fas fa-bars"></i>
</button>


<!--batas cobahhh-->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <!--<a class="nav-link" role="button" class="glyphicon glyphicon-check"><i class="fa fa-crosshairs"><b><span></i> Navigasi</span></b></a>-->
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="fa fa-crosshairs"><b><span></i> MENU</span></b></a>
              <span class="caret"></span></a>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown" >
                <div class="dropdown-divider"></div>
                <?php if($this->session->userdata('akses')=='1'):?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("admin/page/data_akun"); ?>">
                            <i class="fa fa-user-circle"></i>
                            <span>Akun</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url("admin/page/permohonan"); ?>">
                                <i class="fas fa-fw fa-list-alt"></i>
                                <span>Permohonan</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url("admin/page/daftarpemohon"); ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span>Notifikasi</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url("admin/page/kritiksaran"); ?>">
                                        <i class="fas fa-comments"></i>
                                        <span>Kritik dan Saran</span></a>
                                    </li>
                                    <!-- </li>  -->
                                    <!--Akses Menu Untuk kepala-->
                                <?php elseif($this->session->userdata('akses')=='2'):?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url("admin/page/atur_laporan"); ?>">
                                            <i class="fas fa-print"></i>
                                            <span>Laporan</span></a>
                                        </li>
                                        <!--Akses Menu Untuk petugas-->
                                    <?php else:?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo site_url("admin/page/permohonan"); ?>">
                                                <i class="fas fa-fw fa-list-alt"></i>
                                                <span>Permohonan</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo site_url("admin/page/daftarpemohon"); ?>">
                                                    <i class="fas fa-fw fa-users"></i>
                                                    <span>Notifikasi</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo site_url("admin/page/kritiksaran"); ?>">
                                                        <i class="fas fa-comments"></i>
                                                        <span>Kritik dan Saran</span></a>
                                                    </li>

                                                <?php endif;?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!-- batas -->
                        <!-- Navbar -->
                        <ul class="navbar-nav ml-auto ml-md-0">
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-bell fa-3x"></i>
                                <span class="badge badge-danger"><h5><?php print_r($jum['jum_status']) ?></h5></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="page/permohonan">Cek Notif Pemohon!, status 'Dalam Proses'</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-envelope fa-lg" ></i>
                            <span class="badge badge-danger"><h5><?php print_r($jumk['jum_kritot']) ?></h5></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="page/kritiksaran">Cek Kritik! (Total)</a>
                        </div>
                    </li>
                    <div><pre>   </pre></div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <strong><?php
                        $hari = date('l');
                        /*$new = date('l, F d, Y', strtotime($Today));*/
                        if ($hari=="Sunday") {
                           echo "Minggu";
                       }elseif ($hari=="Monday") {
                           echo "Senin";
                       }elseif ($hari=="Tuesday") {
                           echo "Selasa";
                       }elseif ($hari=="Wednesday") {
                           echo "Rabu";
                       }elseif ($hari=="Thursday") {
                           echo("Kamis");
                       }elseif ($hari=="Friday") {
                           echo "Jum'at";
                       }elseif ($hari=="Saturday") {
                           echo "Sabtu";
                       }
                       ?>,
                       <?php
                       $tgl =date('d');
                       echo $tgl;
                       $bulan =date('F');
                       if ($bulan=="January") {
                           echo " Januari ";
                       }elseif ($bulan=="February") {
                           echo " Februari ";
                       }elseif ($bulan=="March") {
                           echo " Maret ";
                       }elseif ($bulan=="April") {
                           echo " April ";
                       }elseif ($bulan=="May") {
                           echo " Mei ";
                       }elseif ($bulan=="June") {
                           echo " Juni ";
                       }elseif ($bulan=="July") {
                           echo " Juli ";
                       }elseif ($bulan=="August") {
                           echo " Agustus ";
                       }elseif ($bulan=="September") {
                           echo " September ";
                       }elseif ($bulan=="October") {
                           echo " Oktober ";
                       }elseif ($bulan=="November") {
                           echo " November ";
                       }elseif ($bulan=="December") {
                           echo " Desember ";
                       }
                       $tahun=date('Y');
                       echo $tahun;
                       ?>
                       <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">        
                        <span id="clock"></span></strong>
                        <p><strong>Hai,</strong> Selamat datang kembali<strong>!</strong> <b><?php echo $this->session->userdata('ses_nama');?></b>

                    </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
                <div>

                </div>
            </li>
        </ul>

    </nav>