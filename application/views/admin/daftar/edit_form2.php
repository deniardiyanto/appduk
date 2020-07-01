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


					<?php if ($this->session->flashdata('success')): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $this->session->flashdata('success'); ?>
						</div>
					<?php endif; ?>

					<!-- Card  -->
					<div align="left">
						<a href="<?php echo site_url('admin/pendaftarkerja') ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i>
						Kembali</a>
					</di><div class="card mb-3">
					<div class="card-body">

						<form action="<?php base_url('admin/daftar_admin/edit2') ?>" method="post" enctype="multipart/form-data">


							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label for="nik">NIK</label>
										<input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
										type="text" name="nik" placeholder="NIK" value="<?php echo $daftar->nik ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('nik') ?>
										</div>
									</div>
								</div>

								<div class="col-md-7">
									<div class="form-group">
										<label for="nama">Nama</label>
										<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
										type="text" name="nama" placeholder="Nama sesuai KTP" value="<?php echo $daftar->nama ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('nama') ?>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label for="email">Email</label>
										<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
										type="text" name="email" placeholder="Email Pemohon" value="<?php echo $daftar->email ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('email') ?>
										</div>
									</div>
								</div>

								<div class="col-md-5">
									<div class="form-group">
										<label for="no_kk">No. KK</label>
										<input class="form-control <?php echo form_error('no_kk') ? 'is-invalid':'' ?>"
										type="text" name="no_kk" placeholder="No. KK" value="<?php echo $daftar->no_kk ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('no_kk') ?>
										</div>
									</div>
								</div>


								<div class="col-md-12">
									<div class="form-group">
										<label for="alamat">Alamat Pindah</label>
										<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
										type="textarea" name="alamat" placeholder="Alamat Lengkap" value="<?php echo $daftar->dusun.", RT ".$daftar->rt." RW ".$daftar->rw.", ".$daftar->kelurahan.", ".$daftar->kecamatan.", Kode Pos ".$daftar->kodepos ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('alamat') ?>
										</div>
									</div>
								</div>


								<div class="col-md-5">
									<div class="form-group">
										<label for="no_skp">No. SKP</label>
										<input class="form-control <?php echo form_error('no_skp') ? 'is-invalid':'' ?>"
										type="text" name="no_skp" placeholder="No. SKP" value="<?php echo $daftar->no_skp ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('no_skp') ?>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="image">Scan Sutrat*</label>
											<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
											type="file" name="image" />
											<input type="hidden" name="old_image" value="<?php echo $daftar->image ?>" />
											<div class="invalid-feedback">
												<?php echo form_error('image') ?>
											</div>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<label for="status">Status</label>
											<select name="status" class="form-control" required>
												<option value="Dalam Proses">Dalam Proses</option>
												<option value="Jadi">Jadi</option><br>
												<div class="invalid-feedback">
													<?php echo form_error('status') ?>
												</div>
											</div>
										</div>
									</div>
									<div></div>
									<div class="col-md-5">
									<div class="form-group">
										<label for="no_skp">Tanggal</label>
										<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
										type="text" name="tanggal" placeholder="tanggal" value="<?php echo $daftar->tanggal ?>" />
										<div class="invalid-feedback">
											<?php echo form_error('tanggal') ?>
										</div>
									</div>
								</div>
									<table class="well table table-bordered">
										<tr>
											<td>
												<input class="btn btn-success" type="submit" name="btn" value="Perbarui status" />
											</td>
											<td>
												<a href="mailto:<?php echo $daftar->email;?>?subject=PEMBERITAHUAN SKP JADI .&body=%0D%0ADiberitahukan Kepada %3A <?php echo $daftar->nama;?> %0D%0A%0D%0ABahwa Surat Keterangan Pindah (SKP) sudah dapat diambil mulai pada <?php echo date("d F y h:i:sa")?> %0D%0ASilahkan ambil pada jam operasional Disdukcapil. Terimakasih.
													%0D%0A%0D%0ATerimakasih Atas Perhatiannya,%0D%0A%0D%0AADMIN%0D%0ADisdukcapil Sleman." class="btn btn-danger"><i class="fas fa-paper-plane"></i> Kirim Email untuk Surat Pindah JADI</a>
												</td>
											</tr>
										</table>
									</div><br>
								</form>
							</div>
						</div>
					</div><br>
				</div><br>
				<div></div><br>


			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php $this->load->view("admin/_partials/scrolltop.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>