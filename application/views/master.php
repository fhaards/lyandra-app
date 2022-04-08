<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $title; ?></title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/feather/feather.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/mdi/css/materialdesignicons.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/ti-icons/css/themify-icons.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/typicons/typicons.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/simple-line-icons/css/simple-line-icons.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/css/vendor.bundle.base.css'; ?>">
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/datatables/css/dataTables.bootstrap4.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/datatables/plugins/select.dataTables.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/cms/css/vertical-layout-light/style.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/cms/css/vertical-layout-light/custom-style.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/cms/css/vertical-layout-light/custom-tails.css'; ?>">
	<link rel="shortcut icon" href="<?php echo base_url() . 'assets/cms/images/app-img/favicon/favicon-32x32.png'; ?>">
</head>

<body class="sidebar-icon-only sidebar-fixed">
	<div class="container-scroller">
		<?php $this->load->view('partials/_navbar.php'); ?>
		<div class="container-fluid page-body-wrapper">
			<?php
			// $this->load->view('partials/_settings-panel.php');
			$this->load->view('partials/_sidebar.php');
			?>

			<!-- main-panel -->
			<div class="main-panel my-0">
				<div class="content-wrapper my-0 py-2">

					<?php $this->load->view('partials/_alerts_user_status.php'); ?>
					<div class="row">
						<div class="col-sm-12"> <?= $breadcrumb; ?></div>
					</div>
					<div class="row mb-5">
						<div class="col-sm-12">
							<?php $this->load->view($content); ?>
						</div>
					</div>
					<?php $this->load->view('partials/_footer.php'); ?>
				</div>


			</div>
			<?php $this->load->view('partials/_modals.php'); ?>
			<!-- main-panel ends -->

		</div>
	</div>

	<!-- Javascript Sources -->
	<script src="<?php echo base_url() . 'assets/vendor/jquery/jquery.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/vendor/js/vendor.bundle.base.js'; ?>"></script>

	<!-- Datatables -->
	<script src="<?php echo base_url() . 'assets/vendor/datatables/js/jquery.dataTables.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/vendor/datatables/js/dataTables.bootstrap4.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/vendor/datatables/plugins/datatables.select.min.js'; ?>"></script>

	<!-- Plugins -->
	<script src="<?php echo base_url() . 'assets/vendor/chart.js/Chart.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/vendor/progressbar.js/progressbar.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/cms/js/off-canvas.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/cms/js/hoverable-collapse.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/cms/js/template.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/cms/js/settings.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/cms/js/todolist.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/cms/js/jquery.cookie.js" type="text/javascript'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/cms/js/dashboard.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/cms/js/Chart.roundedBarCharts.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/vendor/sweetalert2/sweetalert2.all.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/vendor/tinymce/tinymce.min.js'; ?>"></script>
	<script>
		var BASE_URL = "<?php echo base_url(); ?>";
		var SITE_URL = "<?php echo site_url(); ?>";
	</script>
	<script src="<?php echo base_url() . 'src/app.js'; ?>"></script>
	<?php $this->load->view('partials/_alerts'); ?>
	<?php $this->load->view('partials/_src_js_stack.php'); ?>
</body>

</html>