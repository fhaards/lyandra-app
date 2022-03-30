<script src="<?php echo base_url() . 'assets/cms/vendors/js/vendor.bundle.base.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/vendors/jquery/jquery.min.js'; ?>"></script>

<script src="<?php echo base_url() . 'assets/cms/vendors/datatables/js/jquery.dataTables.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/vendors/datatables/js/dataTables.bootstrap4.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/vendors/datatables/plugins/datatables.select.min.js'; ?>"></script>

<script src="<?php echo base_url() . 'assets/cms/vendors/chart.js/Chart.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/vendors/progressbar.js/progressbar.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/js/off-canvas.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/js/hoverable-collapse.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/js/template.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/js/settings.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/js/todolist.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/js/jquery.cookie.js" type="text/javascript'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/js/dashboard.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/js/Chart.roundedBarCharts.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/vendors/sweetalert2/sweetalert2.all.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/cms/vendors/tinymce/tinymce.min.js'; ?>"></script>
<script>
    tinymce.init({
        selector: '.tinymce'
    });
    $('#dataTable').DataTable();
    var BASE_URL = "<?php echo base_url(); ?>";
    var SITE_URL = "<?php echo site_url(); ?>";
    $('#alert').removeClass('d-none');

    setTimeout(() => {
        $('.alert').alert('close');
    }, 4000);
</script>
<script src="<?php echo base_url() . 'src/app.js'; ?>"></script>