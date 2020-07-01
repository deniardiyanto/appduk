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

                <!-- DataTables -->
                <div class="card mb-3">
                    <div class="card-body">

                        <div class="table-responsive">
                           <table class="table table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th><center>ID Kritik</th></center>
                                        <th><center>Email</th>
                                        <th><center>Nama</th>
                                        <th><center>Isi</th>
                                        <th><center>Tanggal</th>
                                        <th><center>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tb_kritiksaran as $Kritik): ?>
                                    <tr>
                                        <td width="100">
                                            <?php echo $Kritik->id_kritik ?>
                                        </td>
                                        <td>
                                            <?php echo $Kritik->email ?>
                                        </td>
                                        <td>
                                            <?php echo $Kritik->nama ?>
                                        </td>
                                        <td width="400" class="small">
                                            <?php echo $Kritik->isi ?>
                                        </td>
                                        <td width="150">
                                            <?php echo $Kritik->tanggal ?>
                                        </td>
                                        <td width="250">
                                            <a href="mailto:<?php echo $Kritik->email;?>?subject=KRITIK & SARAN APPDUK SLEMAN .&body=%0D%0ATerimakasih Kepada %3A <?php echo $Kritik->nama;?> %0D%0A%0D%0AKritik dan Saran anda sudah kami terima pada <?php echo $Kritik->tanggal;?>, %0D%0ATerkait masukan anda mengenai %3A <?php echo $Kritik->isi;?>, %0D%0AKami akan evaluasi dan segera berbenah, Semoga kedepannya sistem dapat lebih maju dan berkembang lagi, Terus ikuti aktivitas kami di Appduk Sleman. %0D%0ATerimakasih.
                                            %0D%0A%0D%0ATerimakasih Atas Perhatiannya,%0D%0A%0D%0AADMIN%0D%0ADisdukcapil Sleman." class="btn btn-small"><i class="fas fa-paper-plane"></i> Balas</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/kritik_admin/delete/'.$Kritik->id_kritik) ?>')"
                                             href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>

                                </tbody>
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

    <script>
    function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>

</body>

</html>