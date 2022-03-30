<div class="col-12 grid-margin">
    <div class="card">

        <div class="card-body tour-details">
            <div class="row mb-5 mt-4 img-tour-banner-fluid">
                <div class="col-md-12">
                    <div class="img-tour-banner">
                        <div class="overlay"></div>
                        <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->banner; ?>">
                    </div>
                </div>
            </div>

            <div class="row mb-5 mt-4 img-tour-header">
                <div class="row my-5">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="img-tour-logo">
                            <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->logo; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group row">
                        <div class="text-center">
                            <h1><?= $item->tournament_name; ?></h1>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row divider my-5 border-top px-5"></div>

            <div class="row px-5 mb-5">
                <div class="col-sm-12">
                    <div class="statistics-details d-flex align-items-center justify-content-between">
                        <div>
                            <p class="statistics-title">Event Date :</p>
                            <h3 class="rate-percentage"><?= setTimeDate($item->event_date); ?></h3>
                        </div>
                        <div>
                            <p class="statistics-title">Open Registration : </p>
                            <h3 class="rate-percentage"><?= setTimeDate($item->event_date); ?></h3>
                        </div>
                        <div>
                            <p class="statistics-title">Closed Registration :</p>
                            <h3 class="rate-percentage"><?= setTimeDate($item->event_date); ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row divider my-5 border-top px-5"></div>
            <div class="row px-5 mb-5">
                <div class="col-md-12">
                    <div class="form-group row">
                        <h5>
                            <?= $item->description; ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="row divider my-5 border-top px-5"></div>


            <div class="row px-5 mb-5">
                <div class="col-sm-12">
                    <p class="card-description">
                        Details
                    </p>

                    <div class="d-flex align-items-center gap-3">
                        <div>
                            <a href="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->rules; ?>" target="_blank" type="button" class="btn btn-lg btn-primary btn-icon-text">
                                <i class="ti-download btn-icon-prepend"></i>
                                Rules
                            </a>
                        </div>
                        <?php if (isSuperAdmin()) : ?>
                            <div>
                                <a href="" type="button" class="btn btn-lg btn-primary btn-icon-text">
                                    <i class="ti-user btn-icon-prepend"></i>
                                    Participants
                                </a>
                            </div>
                        <?php else : ?>
                            <div>
                                <a href="" type="button" class="btn btn-lg btn-dark btn-icon-text">
                                    <i class="ti-plus btn-icon-prepend"></i>
                                    Join
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>