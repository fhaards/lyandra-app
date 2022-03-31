<div class="col-12 grid-margin">
    <div class="card mb-5">
        <div class="card-body">
            <h4 class="card-title mb-5">Edit : <?= $item->tournament_name; ?></h4>
            <?php echo validation_errors(); ?>

            <?php echo form_open("tournament/update-info/" . $item->tournament_id, array('class' => 'form-sample')); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label>Name</label>
                        <div>
                            <input type="text" class="form-control" name="tournament_name" value="<?= $item->tournament_name; ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <p class="card-description">
                Date
            </p>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group row">
                        <label>Event Date</label>
                        <div>
                            <input type="datetime-local" class="form-control" name="event_date" value="<?= date('Y-m-d\TH:i:s', strtotime($item->event_date)); ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group row">
                        <label>Regist Date</label>
                        <div>
                            <input type="datetime-local" class="form-control" name="regist_date" value="<?= date('Y-m-d\TH:i:s', strtotime($item->regist_date)); ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group row">
                        <label>Closed Date</label>
                        <div>
                            <input type="datetime-local" class="form-control" name="closed_date" value="<?= date('Y-m-d\TH:i:s', strtotime($item->closed_date)); ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group row">
                        <label>Max Participants</label>
                        <div>
                            <input type="number" class="form-control" name="max_participants" value="<?= $item->max_participants; ?>" />
                        </div>
                    </div>
                </div>
            </div>
            <p class="card-description">
                Public Information
            </p>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label>Description</label>
                        <div>
                            <textarea class="tinymce form-control" name="description"><?= $item->description; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <?php echo form_close(); ?>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-5">Edit Files</h4>
            <?php echo form_open_multipart("tournament/update-file/" . $item->tournament_id, array('class' => 'form-sample')); ?>
            <table class="mb-5 table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="30%">Name</th>
                        <th width="30%">Files</th>
                        <th width="40%">Upload New</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Rules</td>
                        <td>
                            <input type="hidden" name="rules_old" value="<?= $item->rules; ?>">
                            <a href='<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->rules; ?>'> Check Files</a>
                        </td>
                        <td>
                            <div class="form-group p-0 m-0">
                                <label>( Recommended file : <strong>PDF Format</strong> )</label>
                                <div class="input-group">
                                    <input type="file" name="rules" class="form-control" required>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Logo</td>
                        <td>
                            <input type="hidden" name="logo_old" value="<?= $item->logo; ?>">
                            <span class="img-small-form">
                                <img class="" src="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->logo; ?>">
                            </span>
                        </td>
                        <td>
                            <div class="form-group p-0 m-0">
                                <label>( Recommend : Scale 1x1 , <strong>JPG/JPEG/PNG Format</strong>)</label>
                                <div class="input-group">
                                    <input type="file" name="logo" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Banner</td>
                        <td>
                            <input type="hidden" name="banner_old" value="<?= $item->banner; ?>">
                            <span class="img-small-form">
                                <img class="" src="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->banner; ?>">
                            </span>
                        </td>
                        <td>
                            <div class="form-group p-0 m-0">
                                <label>( Recommend : 1200 x 300 , <strong>JPG/JPEG/PNG Format</strong> )</label>
                                <div class="input-group">
                                    <input type="file" name="banner" class="form-control" accept="image/png, image/gif, image/jpeg">
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <?php echo form_close(); ?>

        </div>
    </div>
</div>