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
    <?php $this->load->view('partials/_src_css.php'); ?>
</head>

<body >
    <?php $this->load->view($content); ?>
    <?php $this->load->view('partials/_src_js.php'); ?>
</body>

</html>