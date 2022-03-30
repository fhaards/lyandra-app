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
	<?php $this->load->view('partials/_src_css.php'); ?>
</head>

<body>
	<div class="container-scroller">
		<?php $this->load->view('partials/_navbar.php'); ?>
		<div class="container-fluid page-body-wrapper">
			<?php $this->load->view('partials/_settings-panel.php'); ?>
			<?php $this->load->view('partials/_sidebar.php'); ?>

			<!-- main-panel -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-sm-12">
							<?php $this->load->view($content); ?>
						</div>
					</div>
				</div>

				<?php $this->load->view('partials/_footer.php'); ?>
			</div>
			<!-- main-panel ends -->

		</div>
	</div>

	<!-- Javascript Sources -->
	<?php $this->load->view('partials/_src_js.php'); ?>
</body>

</html>