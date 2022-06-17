<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <link rel="stylesheet" href="<?php echo base_url('skydash/css/style.css') ?>"> -->
</head>
<body>
	<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
		<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
			<a class="navbar-brand brand-logo mr-15" href="#"><img src="<?php echo base_url('assets/image/logo1.png') ?>" style="min-width:130px; min-height:110px;" class="mr-2" alt="logo" /></a>
			<a class="navbar-brand brand-logo-mini" href="#"><img src="<?php echo base_url('assets/image/logo2.png') ?>" style="min-width:70px; min-height:50px;" alt="logo" /></a>
		</div>
		<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
			<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
				<span class="icon-menu"></span>
			</button>
			<ul class="navbar-nav navbar-nav-right">
				<!-- <li class="nav-item dropdown">
					<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
						<span class="btn btn-primary">Aktivasi Filtering</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list " aria-labelledby="notificationDropdown">
						<p class="mb-0 font-weight-normal float-center dropdown-header ml-2">Aktivasi Filtering</p>
						<a class="dropdown-item preview-item">
							<div class="row ml-3">
								<div class="toggle">
									<input type="checkbox">
									<label for="" class="onbtn">On</label>
									<label for="" class="offbtn">Off</label>
								</div>
							</div>
						</a>
						<a class="dropdown-item preview-item">
							<div class="row">
								<form class="forms-sample">
									<div class="form-group">
										<label style="color: black;" for="tanggal1">Tanggal Awal</label><br>
										<input type="date" class="form-control" name="tanggal1" id="tanggal1" placeholder="Tanggal Awal" />
									</div>
									<div class="form-group">
										<label style="color: black;" for="tanggal2">Tanggal Akhir</label><br>
										<input type="date" class="form-control" name="tanggal2" id="username" placeholder="Tanggal Akhir" />
									</div>
									<button id="tampilkan" class="btn btn-primary btn-sm" type="submit" name="btn"> Simpan </button>
								</form>
							</div>
							<div id="loader"></div>
							<div id="tampil"></div>
						</a>
					</div>
				</li> -->
				<li class="nav-item nav-profile dropdown">
					<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
						<?php print_r($this->session->userdata['username']); ?>
					</a>
					<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
						<!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a> -->
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
							<i class="ti-power-off text-primary"></i>
							Logout
						</a>
					</div>
				</li>
			</ul>
			<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
				<span class="icon-menu"></span>
			</button>
		</div>
	</nav>
</body>
</html>

<!-- <script>
	$(document).ready(function() {
		$("#tampilkan").click(function() {
			var tanggal1 = $("#tanggal1").val();
			var tanggal2 = $("#tanggal2").val();

			if (tanggal1 == "") {
				alert("Silahkan isi periode tanggal awal")
				$("#tanggal1").focus();
				return false;
			} else if (tanggal2 == "") {
				alert("Silahkan isi periode tanggal akhir")
				$("#tanggal2").focus();
				return false;
			} else {

				$('#loader').html('<img src="<?php echo base_url('assets/img/loader/loader1.gif') ?>"> ');

				$.ajax({
					url: "<?php echo site_url('laporan/cari_pinjaman'); ?>",
					type: "POST",
					data: "tanggal1=" + tanggal1 + "&tanggal2=" + tanggal2,
					cache: false,
					success: function(hasil) {
						// console.log(hasil);
						$("#tampil").html(hasil);
						$('#loader').html("").hide();
					}
				})
				//  $('#loader').html("").hide();
			}
		}) //end #tampilkan
	});
</script> -->