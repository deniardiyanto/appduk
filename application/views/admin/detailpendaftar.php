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
                <div class="card-header">

                        <a href="<?php echo site_url('admin/pendaftarkerja/') ?>"><i class="fas fa-arrow-left"></i>
                            Back</a>
                    </div>
        <span>Detail atas nama <b><?php echo $pendaftar->nama; ?></b>.</span>
    </div>
<div class="form-group">
<div class="container">
    <form action="<?php base_url('admin/daftar_admin/edit') ?>" method="post" enctype="multipart/form-data">
    <table class="well table table-bordered">
        <tr>
            <td width="200">
                NIK
            </td>
            <input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
            type="text" name="nik" />
            <td width="1">:</td>
            <td>
                <?php echo $pendaftar->nik; ?>
            </td>
        </tr>
        <tr>
            <td width="200">
                Status
            </td>
            <td width="1">:</td>
            <td>
                <?php echo $pendaftar->status; ?>
                <select name="status" class="form-control" required>
                                <option value="Dalam Proses">Dalam Proses</option>
                                <option value="Sudah Jadi">Sudah Jadi</option>s
            </td>
        </tr>
        <tr>
            <td>
                Nama
            </td>
            <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
            type="text" name="nama" />
            <td width="1">:</td>
            <td>
                <?php echo $pendaftar->nama; ?>
            </td>
        </tr>
        <tr>
            <td>
                Email
            </td>
            <td width="1">:</td>
            <td>
                <?php echo $pendaftar->email; ?>
            </td>
        </tr>
        <tr>
            <td>
                No.SKP
            </td>
            <td width="1">:</td>
            <td>
                <?php echo $pendaftar->no_skp; ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <a href="mailto:<?php echo $pendaftar->email;?>?subject=PEMBERITAHUAN SKP JADI .&body=
                    <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="alert alert-warning">
                            Warning: You're approaching your limit. Please upgrade.
                        </td>
                    </tr>
                    <tr>
                        <td class="content-wrap">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="content-block">
                                        You have <strong>1 free report</strong> remaining.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        Add your credit card now to upgrade your account to a premium plan to ensure you don't miss out on any reports.
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <a href="#" class="btn-primary">Upgrade my account</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        Thanks for choosing Company Inc.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>Diberitahukan Kepada <?php echo $pendaftar->nama;?> bahwa Surat Keterangan Pindah (SKP) sudah dapat diambil mulai pada <?php echo date("d-m-y h:i:sa")?>, Silahkan ambil pada jam operasional Disdukcapil. Terimakasih." class="btn btn-danger"><i class="fas fa-paper-plane"></i> Kirim Email untuk Surat Pindah JADI</a>
            </td>
        </tr>
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

</html>