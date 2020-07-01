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

					<?php if ($this->session->flashdata('success')): ?>
						<div class="alert alert-success" role="alert">
							<?php echo $this->session->flashdata('success'); ?>
						</div>
					<?php endif; ?>

					<div align="left">
						<a href="<?php echo site_url('admin/daftar_admin/list') ?>" class="btn btn-danger"><i class="fa fa-arrow-left"></i>
						Kembali</a>
					</di><div class="card mb-3">
					<div class="card-body">

						<form action="<?php base_url('admin/daftar_admin/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label for="nik">NIK*</label>
										<input class="form-control <?php echo form_error('nik') ? 'is-invalid':'' ?>"
										type="text" name="nik" placeholder="NIK" />
										<div class="invalid-feedback">
											<?php echo form_error('nik') ?>
										</div>
									</div>
								</div>
								
								<div class="col-md-7">
									<div class="form-group">
										<label for="nama">Nama*</label>
										<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
										type="text" name="nama" placeholder="NAMA" />
										<div class="invalid-feedback">
											<?php echo form_error('name') ?>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label for="email">Email*</label>
										<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
										type="text" name="email" placeholder="Email" />
										<div class="invalid-feedback">
											<?php echo form_error('email') ?>
										</div>
									</div>
								</div>

								<div class="col-md-5">
									<div class="form-group">
										<label for="no_kk">No. KK*</label>
										<input class="form-control <?php echo form_error('no_kk') ? 'is-invalid':'' ?>"
										type="text" name="no_kk" placeholder="No.KK" />
										<div class="invalid-feedback">
											<?php echo form_error('no_kk') ?>
										</div>
									</div>
								</div>

								
								<div class="col-md-12">
									<div class="form-group">
										<label for="alamat">Alamat Pindah*</label>
										<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
										type="textarea" name="alamat" placeholder="Alamat" />
										<div class="invalid-feedback">
											<?php echo form_error('alamat') ?>
										</div>
									</div>
								</div>

								<div class="col-md-5">
									<div class="form-group">
										<label for="no_skp">No. SKP*</label>
										<input class="form-control <?php echo form_error('no_skp') ? 'is-invalid':'' ?>"
										type="text" name="no_skp" placeholder="No.SKP" />
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
											<div class="invalid-feedback">
												<?php echo form_error('image') ?>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
								</form>
							</div>
						</div><br>

						<div class="card-footer small text-muted">
							* required fields
						</div>
					</div><br>
					<div></div><br>
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