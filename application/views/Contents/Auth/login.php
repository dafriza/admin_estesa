<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>ESTESA</title>
	<link rel="stylesheet" href="<?= base_url('../../../assets/vendors/core/core.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('../../../assets/fonts/feather-font/css/iconfont.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('../../../assets/vendors/flag-icon-css/css/flag-icon.min.css'); ?>" />
	<link rel="stylesheet" href="<?= base_url('../../../assets/css/demo_1/style.css'); ?>" />
	<link rel="shortcut icon" href="<?= base_url('../../../assets/images/favicon.png'); ?>" />
</head>

<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">
				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
								<div class="col-md-2 pr-md-0">
								</div>
								<div class="col-md-8 pl-md-0">
									<div class="auth-form-wrapper px-4 py-5">
										<a href="#" class="noble-ui-logo d-block mb-2">ESTE<span>SA</span></a>
										<h5 class="text-muted font-weight-normal mb-4">
											Welcome back! Log in to your account.
										</h5>
										<?= form_open(base_url('authentication')); ?>
										<div class="form-group">
											<label for="username">Username</label>
											<input type="text" class="form-control" id="username" placeholder="Username ..." name="username" required />
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="password" autocomplete="current-password" placeholder="Password ..." name="password" required />
										</div>
										<div class="mt-3">
											<button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Login</button>
										</div>
										</form>
									</div>
								</div>
								<div class="col-md-2 pr-md-0">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?= base_url('../../../assets/vendors/core/core.js'); ?>"></script>
	<script src="<?= base_url('../../../assets/vendors/feather-icons/feather.min.js'); ?>"></script>
	<script src="<?= base_url('../../../assets/js/template.js'); ?>"></script>
</body>
<?php if ($this->session->flashdata('fail')) : ?>
	<link rel="stylesheet" href="<?= base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.css'); ?>" />
	<script src="<?= base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.js'); ?>"></script>
	<script>
		Swal.fire({
			position: "middle-center",
			icon: "error",
			title: "Username atau Password salah!",
			showConfirmButton: false,
			timer: 1500,
		});
	</script>
<?php elseif ($this->session->flashdata('checkLog')) : ?>
	<link rel="stylesheet" href="<?= base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.css'); ?>" />
	<script src="<?= base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.js'); ?>"></script>
	<script>
		Swal.fire({
			position: "middle-center",
			icon: "error",
			title: "Anda belum login!",
			showConfirmButton: false,
			timer: 1500,
		});
	</script>
<?php elseif ($this->session->flashdata('logout')) : ?>
	<link rel="stylesheet" href="<?= base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.css'); ?>" />
	<script src="<?= base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.js'); ?>"></script>
	<script>
		Swal.fire({
			position: "middle-center",
			icon: "success",
			title: "Berhasil Logout!",
			showConfirmButton: false,
			timer: 1500,
		});
	</script>
<?php endif; ?>


</html>
