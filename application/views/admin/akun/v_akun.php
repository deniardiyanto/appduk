<!DOCTYPE html>
<html lang="en">

<!-- <?php foreach ($tb_login as $akun){
    
    print_r($akun);

    
}echo "<br>"; ?>
<?php foreach ($tb_petugas as $akun2){  
    print_r($akun2);
}
?>  -->

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

                    <table align="center">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="card">
                                        <div class="card-body"> 
                                            <h3 class="panel-title"><b>Khusus Admin dan Kepala</b></h3>   
                                            <div class="table-responsive">

                                                <div class="pull-left"><a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_add_new"><b> Tambah Baru</a></b></div><br>   
                                                <table class="table table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th><center>NIP</th></center>
                                                            <th><center>Nama</th>
                                                            <th><center>Password</th>
                                                            <th><center>Level</th>
                                                            <th><center>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($tb_login as $akun): ?>
                                                            <tr class="align-self-center mr-3">
                                                                <td width="100">
                                                                    <?php echo $akun->nip ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $akun->nama ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $akun->pass ?>
                                                                </td>
                                                                <td >
                                                                    <?php echo $akun->level ?>
                                                                </td>
                                                                <td width="450" class="align-self-center mr-3">
                                                                    <a data-toggle="modal" data-target="#modal_change_edit_admin_<?php echo $akun->nip;?>"
                                                                        class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                                        <a onclick="deleteConfirm('<?php echo site_url('admin/atur_akun/delete/'.$akun->nip) ?>')"
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

                                   </div>
                               </div>
                           </td><td>
                           <div class="card">
                            <div class="card-body"> 
                                <h3 class="panel-title"><b>Untuk Petugas</b></h3> 
                                <div class="table-responsive">   
                                    <div class="pull-left"><a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal_add_new2"><b> Tambah Baru</a></b></div><br>   
                                    <table class="table table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th><center>NIP</th></center>
                                                <th><center>Nama</th>
                                                <th><center>Password</th>
                                                <th><center>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($tb_petugas as $akun2): ?>
                                                <tr class="align-self-center mr-3">
                                                    <td width="100">
                                                        <?php echo $akun2->nip ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $akun2->nama ?>
                                                    </td>
                                                    <td >
                                                        <?php echo $akun2->pass ?>
                                                    </td>
                                                    <td width="450" class="align-self-center mr-3">
                                                        <a data-toggle="modal" data-target="#modal_change_edit_petugas_<?php echo $akun2->nip;?>"
                                                            class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                            <a onclick="deleteConfirm('<?php echo site_url('admin/atur_akun/delete2/'.$akun2->nip) ?>')"
                                                               href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                           </td>
                                                       </tr>
                                                   <?php endforeach; ?>

                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </td>
                       </tr>
                   </tbody>
               </table>

               <!-- DataTables -->





                       <!-- /.container-fluid 
                           ============ MODAL ADD AKUN =============== -->
                           <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title" id="myModalLabel"><center>Tambah Pengguna</center></h1>
                                    </div>
                                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/atur_akun/simpan_akun'?>">
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >NIP</label>
                                                <div class="col-xs-8">
                                                    <input name="niip" class="form-control" type="text" placeholder="Nip..." required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >Nama</label>
                                                <div class="col-xs-8">
                                                    <input name="nma" class="form-control" type="text" placeholder="Nama..." required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >Password</label>
                                                <div class="col-xs-8">
                                                    <input name="ps" class="form-control" type="text" placeholder="Password..." required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-xs-3" >Level</label>
                                                <div class="col-xs-8">
                                                   <select name="lvl" class="form-control" required>
                                                    <option value="">-PILIH-</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                        <button class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--END MODAL ADD AKUN-->


                    <!-- ============ MODAL ADD AKUN petugas=============== -->
                    <div class="modal fade" id="modal_add_new2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title" id="myModalLabel"><center>Tambah Petugas</center></h1>
                                </div>
                                <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/atur_akun/simpan_akun2'?>">
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >NIP</label>
                                            <div class="col-xs-8">
                                                <input name="niip2" class="form-control" type="text" placeholder="Nip..." required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Nama</label>
                                            <div class="col-xs-8">
                                                <input name="nma2" class="form-control" type="text" placeholder="Nama..." required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-xs-3" >Password</label>
                                            <div class="col-xs-8">
                                                <input name="ps2" class="form-control" type="text" placeholder="Password..." required>
                                            </div>
                                        </div>
                                <!-- <div class="form-group">
                                    <label class="control-label col-xs-3" >Level</label>
                                    <div class="col-xs-8">
                                     <select name="lvl" class="form-control" required>
                                        <option value="">-PILIH-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-info">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL ADD AKUN-->




        <!-- lamse -->
        
        <!-- ============ MODAL EDIT AKUN ADMIN=============== -->
        <?php foreach ($tb_login as $akun){ ?>
        <div class="modal fade" id="modal_change_edit_admin_<?php echo $akun->nip;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="myModalLabel"><center>Edit data</center></h1>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/atur_akun/edit_akun'?>">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3" >NIP</label>
                                <div class="col-xs-8">
                                    <input name="nip1" class="form-control" type="text" placeholder="Nip..." value="<?php echo $akun->nip ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3" >Nama</label>
                                <div class="col-xs-8">
                                    <input name="nama1" class="form-control" type="text" placeholder="Nama..." value="<?php echo $akun->nama ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3" >Password</label>
                                <div class="col-xs-8">
                                    <input name="pass1" class="form-control" type="text" placeholder="Password..." value="<?php echo $akun->pass ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3" >Level</label>
                                <div class="col-xs-8">
                                   <input name="level1" class="form-control" type="text" placeholder="Password..." value="<?php echo $akun->level ?>">
                               </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-info">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <!--END MODAL EDIT AKUN-->



    <!-- ============ MODAL EDIT AKUN petugas=============== -->
    <?php foreach ($tb_petugas as $akun2){ /*echo $akun2->nip;*/ ?> 
    <div class="modal fade" id="modal_change_edit_petugas_<?php echo $akun2->nip;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="myModalLabel"><center>Edit data</center></h1>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/atur_akun/edit_akun2'?>">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3" >NIP</label>
                            <div class="col-xs-8">
                                <input name="nip2" class="form-control" type="text" placeholder="Nip..." value="<?php echo $akun2->nip ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Nama</label>
                            <div class="col-xs-8">
                                <input name="nama2" class="form-control" type="text" placeholder="Nama..." value="<?php echo $akun2->nama ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Password</label>
                            <div class="col-xs-8">
                                <input name="pass2" class="form-control" type="text" placeholder="Password..." value="<?php echo $akun2->pass ?>">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-info">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php }?> 
    <!--END MODAL EDIT AKUN-->




    <!-- end lamse -->



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin akan keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
          </button>
      </div>
      <div class="modal-body">Pilih "Logout" jika benar-benar akan meninggalkan session ini.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?php echo site_url("admin/home/logout"); ?>">Logout</a>
    </div>
</div>
</div>
</div>

<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
      </button>
  </div>
  <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
</div>
</div>
</div>
</div>
</div><br><br><br>
<!-- /.content-wrapper -->
<?php $this->load->view("admin/_partials/footer.php") ?>


</div>
<!-- /#wrapper -->



<?php $this->load->view("admin/_partials/scrolltop.php") ?><!-- 
<?php $this->load->view("admin/_partials/modal.php") ?> -->

<?php $this->load->view("admin/_partials/js.php") ?>

<script>
function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>

</body>

</html>