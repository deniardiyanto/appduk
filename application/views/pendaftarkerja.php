<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top" style="background-image:url(<?php echo site_url("assets/img/background/bg1.jpg")?>">
    <body id="page-top">

        <?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="wrapper">

            <?php $this->load->view("admin/_partials/sidebar.php") ?>

            <div id="content-wrapper">

                <div class="container-fluid">

                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                    <div class="card mb-3">
                        <div class="card-header">
                            <span>Halaman notif pemohon.</span>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">    
                            <div class="table-responsive">
                                <table class="table table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th><center>Nama</center></th>
                                            <th><center>Email</center></th>
                                            <th><center>No.SKP</center></th>
                                            <th><center>Status</center></th>
                                            <th width="1"><center>Detail</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach($pendaftar as $daftar): ?>
                                            <tr>
                                                <td width="230">
                                                    <b><?php echo $daftar->nama; ?></b>
                                                </td>
                                                <td width="230">
                                                    <?php echo $daftar->email; ?></td>
                                                    <td width="350">
                                                        <?php echo $daftar->no_skp; ?></td>
                                                        <td width="250">
                                                            <b><?php echo $daftar->status; ?></b></td>
                                                            <td width="400">
                                                                <a href="<?php echo site_url('admin/daftar_admin/edit2/'.$daftar->nik) ?>" class="btn btn-block btn-primary btn-sm"><i class="glyphicon glyphicon-search"></i> Detail</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                    <tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.container-fluid -->

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
