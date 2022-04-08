<div class="row container py-3">
    <div class="col-12 text-center">
        <h4 class="card-title text-uppercase fw-bold tracking-widest text-primary"> <?= $item->tournament_name; ?></h4>
    </div>
</div>
<div class="col-12 grid-margin">
    <div class="accordion accordion-flush" id="accordionEditTournament">
        <!-- EDIT DETAIL -->
        <div class="accordion-item mb-3">
            <div class="card">
                <div class=" card-body p-2 m-0">
                    <h2 class="accordion-header p-0" id="flush-heading2">
                        <button class="accordion-button collapsed rounded d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                            <h5 class="py-0 m-0 fw-bold text-uppercase tracking-widest">
                                Tournament Detail
                            </h5>
                        </button>
                    </h2>
                    <div id="flush-collapse1" class="accordion-collapse collapse py-5 show" aria-labelledby="flush-heading2" data-bs-parent="#accordionEditTournament">
                        <div class="container">
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
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group row">
                                        <label>Max Participants</label>
                                        <div>
                                            <input type="number" class="form-control" name="max_participants" min="1" value="<?= $item->max_participants; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label>Venue</label>
                                        <div>
                                            <input type="text" class="form-control" name="venue" value="<?= $item->venue; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label>Location / Map , Url</label>
                                        <div>
                                            <input type="text" class="form-control" name="venue_map" value="<?= $item->venue_map; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-description fw-bold text-uppercase tracking-widest text-dark">
                                Date
                            </p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label>Event Date</label>
                                        <div>
                                            <input type="datetime-local" class="form-control" name="event_date" value="<?= date('Y-m-d\TH:i:s', strtotime($item->event_date)); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label>Regist Date</label>
                                        <div>
                                            <input type="datetime-local" class="form-control" name="regist_date" value="<?= date('Y-m-d\TH:i:s', strtotime($item->regist_date)); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label>Closed Date</label>
                                        <div>
                                            <input type="datetime-local" class="form-control" name="closed_date" value="<?= date('Y-m-d\TH:i:s', strtotime($item->closed_date)); ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="card-description fw-bold text-uppercase tracking-widest text-dark">
                                Description
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
                </div>
            </div>
        </div>

        <!-- EDIT CONDITION -->
        <div class="accordion-item mb-3">
            <div class="card">
                <div class=" card-body p-2 m-0">
                    <h2 class="accordion-header p-0" id="flush-heading2">
                        <button class="accordion-button collapsed rounded d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                            <h5 class="py-0 m-0 fw-bold text-uppercase tracking-widest">
                                Condition
                            </h5>
                        </button>
                    </h2>
                    <div id="flush-collapse2" class="accordion-collapse collapse py-5" aria-labelledby="flush-heading2" data-bs-parent="#accordionEditTournament">
                        <div class="container">
                            <?php echo validation_errors(); ?>
                            <?php echo form_open("tournament/update-condition/" . $item2->tournament_id, array('class' => 'form-sample')); ?>

                            <div class="row align-items-center">
                                <p class="card-description fw-bold text-uppercase tracking-widest text-dark">
                                    Condition
                                </p>
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label>Min Weight (Kg)</label>
                                        <div>
                                            <input type="number" class="form-control" name="min_weight" min="1" value="<?= $item2->min_weight; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label>Min Weight (Kg)</label>
                                        <div>
                                            <input type="number" class="form-control" name="max_weight" min="1" value="<?= $item2->max_weight; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                </div>
                            </div>

                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- EDIT FILE -->
        <div class="accordion-item mb-3">
            <div class="card">
                <div class=" card-body p-2 m-0">
                    <h2 class="accordion-header p-0" id="flush-heading3">
                        <button class="accordion-button collapsed rounded d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                            <h5 class="py-0 m-0 fw-bold text-uppercase tracking-widest">
                                File
                            </h5>
                        </button>
                    </h2>
                    <div id="flush-collapse3" class="accordion-collapse collapse py-5" aria-labelledby="flush-heading3" data-bs-parent="#accordionEditTournament">
                        <div class="container">
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
                                            <input type="hidden" name="rules_old" value="<?= $item3->rules; ?>">
                                            <a class="<?= (is_null($item3->rules)) ? 'btn disabled' : '' ;?>" href='<?= base_url() . 'uploads/tournaments/' . $item3->tournament_id . '/' . $item3->rules; ?>'> Check Files</a>
                                        </td>
                                        <td>
                                            <div class="form-group p-0 m-0">
                                                <label>( Recommended file : <strong>PDF Format</strong> )</label>
                                                <div class="input-group">
                                                    <input type="file" name="rules" class="form-control form-control-sm" accept=".pdf,.doc,.docx">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Logo</td>
                                        <td>
                                            <input type="hidden" name="logo_old" value="<?= $item3->logo; ?>">
                                            <span class="img-small-form">
                                                <?php if (is_null($item3->logo)) : ?>
                                                    <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/_DEFAULT/default_logo.jpg'; ?>">
                                                <?php else : ?>
                                                    <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/' . $item3->tournament_id . '/' . $item3->logo; ?>">
                                                <?php endif; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="form-group p-0 m-0">
                                                <label>( Recommend : Scale 1x1 , <strong>JPG/JPEG/PNG Format</strong>)</label>
                                                <div class="input-group">
                                                    <input type="file" name="logo" class="form-control form-control-sm" accept="image/png, image/gif, image/jpeg">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Banner</td>
                                        <td>
                                            <input type="hidden" name="banner_old" value="<?= $item3->banner; ?>">
                                            <span class="img-small-form">
                                                <?php if (is_null($item3->banner)) : ?>
                                                    <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/_DEFAULT/default_banner.png'; ?>">
                                                <?php else : ?>
                                                    <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/' . $item3->tournament_id . '/' . $item3->banner; ?>">
                                                <?php endif; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="form-group p-0 m-0">
                                                <label>( Recommend : 1200 x 300 , <strong>JPG/JPEG/PNG Format</strong> )</label>
                                                <div class="input-group">
                                                    <input type="file" name="banner" class="form-control form-control-sm" accept="image/png, image/gif, image/jpeg">
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
            </div>
        </div>
    </div>
</div>