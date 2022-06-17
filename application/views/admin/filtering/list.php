<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<style type="text/css">
	/* i.input-helper:before {
		background-color: rgba(87, 182, 87, 1) !important;
	} */
</style>

<body>
	<div class="container-scroller">
		<!-- partial navbar -->
		<?php $this->load->view("admin/_partials/navbar.php") ?>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial sidebar -->
			<?php $this->load->view("admin/_partials/sidebar.php") ?>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="container-fluid">
							<?php if ($this->session->flashdata('success')) : ?>
								<div class="alert alert-success" role="alert">
									<?php echo $this->session->flashdata('success'); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<?php $this->session->unset_userdata('success') ?>
							<?php endif; ?>
						</div>
						<div class="container-fluid">
							<?php if ($this->session->flashdata('gagal')) : ?>
								<div class="alert alert-danger" role="alert">
									<?php echo $this->session->flashdata('gagal'); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<?php $this->session->unset_userdata('gagal') ?>
							<?php endif; ?>
						</div>
						<div class="col-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h3 class="card-title">Halaman Aktivasi System Filtering</h3>
									<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
									<!-- <form class="forms-sample" action="../../../../pyfix/main.py" method="POST"> -->
									<form class="forms-sample"  method="POST">
										<!-- <div class="row"> -->
										<!-- <div class="col col-6 text-center">
												<label for="tgl_mulai">Tanggal Mulai</label>
												<input type="date" class="form-control <?php echo form_error('tgl_mulai') ? 'is-invalid' : '' ?>" name="tgl_mulai" id="tgl_mulai" value="<?php echo set_value('tgl_mulai'); ?>" placeholder="Tanggal Mulai" required>
												<span style="color: red;"><?php echo form_error('tgl_mulai'); ?></span>
											</div>
											<div class="col col-6 text-center">
												<label for="tgl_selesai">Tanggal Selesai</label>
												<input type="date" class="form-control <?php echo form_error('tgl_selesai') ? 'is-invalid' : '' ?>" name="tgl_selesai" id="tgl_selesai" value="<?php echo set_value('tgl_selesai'); ?>" placeholder="Tanggal Selesai" required>
												<span style="color: red;"><?php echo form_error('tgl_selesai'); ?></span>
											</div>  -->
										 <div class="">
												<div class="form-group" >
												<label for="sumber_berita">Sumber Berita</label>
												<div class="form-check" style="margin-top: -5px;">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input <?php echo form_error('sumber_berita') ? 'is-invalid' : '' ?>" id="sumber_berita" name="sumber_berita[]" value="Kompas">
													Kompas
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input <?php echo form_error('sumber_berita') ? 'is-invalid' : '' ?>" id="sumber_berita" name="sumber_berita[]" value="CnbcIndonesia">
													CnbcIndonesia
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
													<input type="checkbox" class="form-check-input <?php echo form_error('sumber_berita') ? 'is-invalid' : '' ?>" id="sumber_berita" name="sumber_berita[]" value="Detik">
													Detik
													</label>
												</div>
											</div>
											<div class="form-group">
												<label for="kata_kunci">Kata Kunci Pencarian</label>
												<input type="text" class="form-control <?php echo form_error('kata_kunci') ? 'is-invalid' : '' ?>" name="kata_kunci" id="kata_kunci" value="<?php echo set_value('kata_kunci'); ?>" placeholder="Contoh : Kesehatan" required>
												<span style="color: red;"><?php echo form_error('kata_kunci'); ?></span>
											</div>
											<div class="form-group">
												<label for="nomor_hal">Nomor Halaman</label>
												<input type="number" class="form-control <?php echo form_error('nomor_hal') ? 'is-invalid' : '' ?>" name="nomor_hal" id="nomor_hal" value="<?php echo set_value('nomor_hal'); ?>" placeholder="Contoh : 1" required>
												<span style="color: red;"><?php echo form_error('nomor_hal'); ?></span>
											</div>
										 </div>
										<button class="btn btn-primary float-right mr-2 mt-4" style="background-color: #f58924; border:black;" type="submit" name="btn" onclick="exec('python main-cnbc.py');"> Turn ON </button>
									</form>
									<!-- <input type="button" name="runmyscript" value=" Run Python code " onClick="<? exec('python py fix/main.py'); ?>"> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->

	<!-- partial modal-->
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<!-- partial -->
	<!-- partial js -->
	<?php $this->load->view("admin/_partials/js.php") ?>
	<!-- partial -->

	<script>
		$(document).ready(function() {
			$('#dataTable').DataTable();
		});

		function validasiConfirm(url) {
			$('#btn-validasi').attr('href', url);
			$('#validasiModal').modal();
		}
	</script>

</body>

</html>