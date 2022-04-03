<?php $getCurrentUrl = current_url(); ?>
<?php if ($getCurrentUrl == base_url() . 'profile') : ?>
    <script src="<?php echo base_url() . 'src/app-profile.js'; ?>"></script>
<?php endif; ?>
