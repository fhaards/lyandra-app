<?php $getCurrentUrl = current_url(); ?>
<?php if ($getCurrentUrl == base_url() . 'profile') : ?>
    <script src="<?php echo base_url() . 'src/app-profile.js'; ?>"></script>
<?php endif; ?>

<?php if (($this->uri->segment(1) === 'tournament') && ($this->uri->segment(2) === 'show')) : ?>
    <script src="<?php echo base_url() . 'src/app-tournament.js'; ?>"></script>
<?php endif; ?>

<?php if ($this->uri->segment(1) === 'user') : ?>
    <script src="<?php echo base_url() . 'src/app-user.js'; ?>"></script>
<?php endif; ?>