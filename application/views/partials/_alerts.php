<?php if ($this->session->flashdata('error')) : ?>
    <div id="alert" class="alert alert-danger" role="alert">
        Something Error !
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('successEdit')) : ?>
    <div id="alert" class="alert alert-success" role="alert">
        Edit Success , data has changed
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('successInput')) : ?>
    <div id="alert" class="alert alert-success" role="alert">
        Input Success , a new data was inserted
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('successDelete')) : ?>
    <div id="alert" class="alert alert-success" role="alert">
        Delete Success
    </div>
<?php endif; ?>