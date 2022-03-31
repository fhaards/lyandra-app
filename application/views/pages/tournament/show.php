<div class="col-12 grid-margin">
    <div class="card">

        <div class="card-body tour-details">
            <div class="row mb-3 mt-4 img-tour-banner-fluid">
                <div class="col-md-12">
                    <div class="img-tour-banner">
                        <div class="overlay"></div>
                        <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->banner; ?>">
                    </div>
                </div>
            </div>

            <div class="row mb-3 mt-4 img-tour-header">
                <div class="row my-5">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="img-tour-logo">
                            <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->logo; ?>">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row mb-3  img-tour-header">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="text-center">
                                    <h1><?= $item->tournament_name; ?></h1>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12 border-top py-4">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div>
                                <p class="statistics-title">Event Date :</p>
                                <h3 class="rate-percentage"><?= setTimeDate($item->event_date); ?></h3>
                            </div>
                            <div>
                                <p class="statistics-title">Open Registration : </p>
                                <h3 class="rate-percentage"><?= setTimeDate($item->regist_date); ?></h3>
                            </div>
                            <div>
                                <p class="statistics-title">Closed Registration :</p>
                                <h3 class="rate-percentage"><?= setTimeDate($item->closed_date); ?></h3>
                            </div>
                        </div>
                    </div>


                    <div class="home-tab border-top py-4">
                        <div class="d-sm-flex align-items-center justify-content-start">
                            <div class="btn-wrapper">
                                <?php if (isSuperAdmin()) : ?>
                                    <a href="#" class="btn btn-outline-success me-0 align-items-center"><i class="icon-user"></i> Participants</a>
                                <?php else : ?>
                                <?php endif; ?>
                                <a href="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->rules; ?>" target="_blank" class="btn btn-primary text-white me-0"><i class="icon-printer"></i> Rules</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<div class="card">
    <div class="accordion accordion-flush card-body" id="accordionFlushExample">
        <div class="accordion-item">

            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Description
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse py-5" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="accordion-body"><?= $item->description; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>