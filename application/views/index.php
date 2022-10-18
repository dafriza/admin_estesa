<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin SDN Temas 1</title>
	<!-- core:css -->
	<link rel="stylesheet" href="<?= base_url('../assets/vendors/core/core.css'); ?>">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="<?= base_url('../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('../../../assets/vendors/animate.css/animate.min.css'); ?>" />
	{css}
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('../assets/fonts/feather-font/css/iconfont.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('../assets/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="<?= base_url('../assets/css/demo_1/style.css'); ?>">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="<?= base_url('../assets/images/favicon.png'); ?>" />
</head>

<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<?php $this->load->view('Components/Sidebar');?>
		<!-- partial -->

		<div class="page-wrapper">

			<!-- partial:partials/_navbar.html -->
			<?php $this->load->view('Components/Navbar');?>
			<!-- partial -->

			<div class="page-content">
				{content}
			</div>

			<!-- partial:partials/_footer.html -->
			<?php $this->load->view('Components/Footer') ;?>
			<!-- partial -->

		</div>
	</div>

	<!-- core:js -->
	<script src="<?= base_url('../assets/vendors/core/core.js'); ?>"></script>
	<!-- endinject -->
	<!-- plugin js for this page -->
	<script src="<?= base_url('../assets/vendors/chartjs/Chart.min.js'); ?>"></script>
	<script src="<?= base_url('../assets/vendors/jquery.flot/jquery.flot.js'); ?>"></script>
	<script src="<?= base_url('../assets/vendors/jquery.flot/jquery.flot.resize.js'); ?>"></script>
	<script src="<?= base_url('../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js'); ?>"></script>
	<script src="<?= base_url('../assets/vendors/apexcharts/apexcharts.min.js'); ?>"></script>
	<script src="<?= base_url('../assets/vendors/progressbar.js/progressbar.min.js'); ?>"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= base_url('../assets/vendors/feather-icons/feather.min.js'); ?>"></script>
	<script src="<?= base_url('../assets/js/template.js'); ?>"></script>
	<!-- endinject -->
	<!-- custom js for this page -->
	<script src="<?= base_url('../assets/js/dashboard.js'); ?>"></script>
	<script src="<?= base_url('../assets/js/datepicker.js'); ?>"></script>
	{js}
	<!-- end custom js for this page -->
</body>

</html>
