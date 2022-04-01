<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title; ?></title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() . 'assets/public_assets/vendor/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/public_assets/vendor/bootstrap-icons/bootstrap-icons.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/public_assets/vendor/aos/aos.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/public_assets/vendor/remixicon/remixicon.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/public_assets/vendor/swiper/swiper-bundle.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/public_assets/vendor/glightbox/css/glightbox.min.css'; ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() . 'assets/public_assets/css/style.css'; ?>" rel="stylesheet">
</head>

<body>
    <?php $this->load->view('partials/pub_header.php'); ?>
    <?php $this->load->view('partials/pub_hero.php'); ?>
    <main id="main">
        <?php $this->load->view($content); ?>
    </main>
    <?php $this->load->view('partials/pub_footer.php'); ?>

    <!-- Javascript Sources -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() . 'assets/public_assets/vendor/bootstrap/js/bootstrap.bundle.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/public_assets/vendor/aos/aos.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/public_assets/vendor/swiper/swiper-bundle.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/public_assets/vendor/purecounter/purecounter.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/public_assets/vendor/isotope-layout/isotope.pkgd.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/public_assets/vendor/glightbox/js/glightbox.min.js'; ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() . 'assets/public_assets/js/main.js'; ?>"></script>
</body>

</html>