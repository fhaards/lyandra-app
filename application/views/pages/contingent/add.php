<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-5">Add New Contingent</h4>
            <?php echo validation_errors(); ?>
            <?php echo form_open_multipart('contingent/add', array('class' => 'form-sample')); ?>

            <div class="row">
                <div class="col-md-6">
                    <div class=" form-group row">
                        <label>Name</label>
                        <div>
                            <input type="text" class="form-control" name="contingent_name" placeholder="Input Contingent Name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" form-group row">
                        <label>Phone</label>
                        <div>
                            <input type="text" class="form-control" name="contingent_phone" placeholder="Input Phone" />
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class=" form-group row">
                        <label>Address</label>
                        <div>
                            <input type="text" class="form-control" name="contingent_address" placeholder="Input Contingen Address" />
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>