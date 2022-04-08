<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?= $title; ?></title>
    	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/feather/feather.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/mdi/css/materialdesignicons.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/ti-icons/css/themify-icons.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/typicons/typicons.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/simple-line-icons/css/simple-line-icons.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/vendor/css/vendor.bundle.base.css'; ?>">
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/cms/css/vertical-layout-light/style.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/cms/css/vertical-layout-light/custom-style.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/cms/css/vertical-layout-light/custom-tails.css'; ?>">
	<link rel="shortcut icon" href="<?php echo base_url() . 'assets/cms/images/app-img/favicon/favicon-32x32.png'; ?>">
</head>

<body >
    <?php $this->load->view($content); ?>
    	<!-- Javascript Sources -->
	<script src="<?php echo base_url() . 'assets/vendor/jquery/jquery.min.js'; ?>"></script>

	<script src="<?php echo base_url() . 'assets/vendor/sweetalert2/sweetalert2.all.min.js'; ?>"></script>
	<script>
		var BASE_URL = "<?php echo base_url(); ?>";
		var SITE_URL = "<?php echo site_url(); ?>";
	</script>
    <?php $this->load->view('partials/_alerts'); ?>
</body>

</html>