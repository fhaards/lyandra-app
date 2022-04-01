<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-5">Add New Contingent</h4>
            <?php echo validation_errors(); ?>
            <?php echo form_open_multipart('contingent/update/' . $item->contingent_id, array('class' => 'form-sample')); ?>

            <div class="row">
                <div class="col-md-4">
                    <div class=" form-group row">
                        <label>Name</label>
                        <div>
                            <input type="text" class="form-control" name="contingent_name" value="<?= $item->contingent_name; ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" form-group row">
                        <label>Phone</label>
                        <div>
                            <input type="text" class="form-control" name="contingent_phone" value="<?= $item->contingent_phone; ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" form-group row">
                        <label>Status</label>
                        <div>
                            <select class="form-control" name="contingent_status">
                                <?php $arr = ['1', '2', '3']; ?>
                                <?php foreach ($arr as $ar) : ?>
                                    <option value='<?= $ar; ?>' <?= ($ar == $item->contingent_status) ? 'selected' : ''; ?>><?= setContStatus('', $ar); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class=" form-group row">
                        <label>Address</label>
                        <div>
                            <input type="text" class="form-control" name="contingent_address" value="<?= $item->contingent_address; ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>