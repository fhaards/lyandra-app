<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title pb-3">About Our Company
                    <p class="card-description">
                        Company Information
                    </p>
                </h4>

                <?php echo validation_errors(); ?>
                <?php echo form_open('settings/about/update/' .  $item->id); ?>
                <div class="row">
                    <div class="form-group col-4">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" value="<?= $item->name; ?>">
                    </div>
                    <div class="form-group col-4">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" name="email" value="<?= $item->email; ?>">
                    </div>
                    <div class="form-group col-4">
                        <label for="exampleInputPassword4">Phone</label>
                        <input type="text" class="form-control" name="phone"  value="<?= $item->phone; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address"  value="<?= $item->address; ?>">
                </div>
                <div class="form-group">
                    <label>About Us</label>
                    <textarea class="tinymce form-control" name="about"><?= $item->about; ?></textarea>
                </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>