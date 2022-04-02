<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">

            <div class="card-body tour-details ">
                <div class="row mb-3 mt-4 img-tour-banner-fluid">
                    <div class="col-md-12">
                        <div class="img-tour-banner">
                            <div class="overlay"></div>
                            <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->banner; ?>">
                        </div>
                    </div>
                </div>

                <div class="row mb-3 mt-4 img-tour-header">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="img-tour-logo">
                            <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->logo; ?>">
                        </div>
                    </div>
                    <div class="mt-3 col-md-12 d-flex justify-content-center">
                        <div class="text-center">
                            <h2 class="page-title tracking-wide"><?= $item->tournament_name; ?></h2>
                        </div>
                    </div>
                    <?php if (isUser()) : ?>
                        <div class="mt-3 py-0 col-md-12 d-flex justify-content-center">
                            <div class="home-tab m-0 p-0">
                                <div class="btn-wrapper">
                                    <a href="<?= base_url() . "tournament/edit/" . $item->tournament_id; ?>" class="btn btn-primary btn-sm m-0 text-white rounded-2">
                                        <i class="icon-plus"></i> Request Join
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-title border-bottom d-flex flex-row justify-content-between py-2 px-3 align-items-center">
                <h4 class="m-0">Tournament Detail </h4>
                <?php if (isSuperAdmin()) : ?>
                    <div class="home-tab m-0 p-0">
                        <div class="btn-wrapper">
                            <a href="<?= base_url() . "tournament/edit/" . $item->tournament_id; ?>" class="btn btn-outline-primary btn-sm m-0 rounded-2"><i class="icon-pencil"></i> Edit</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <div class="row mb-2  py-2 mx-0 align-items-center">
                    <div class="col-sm-4">
                        <div>
                            <p class="">Event Date : <br>
                                <strong><?= setDate($item->event_date); ?></strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <p class="">Open Registration :<br>
                                <strong><?= setDate($item->regist_date); ?></strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <p class="">Closed Registration :<br>
                                <strong><?= setDate($item->closed_date); ?></strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mb-2 border-top pt-2 mx-0 align-items-center">
                    <div class="col-sm-6">
                        <div>
                            <p class="">Max Participants: <br>
                                <strong><?= setDate($item->event_date); ?></strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row border-top mb-2 py-4 mx-0 align-items-center">
                    <div class="col-sm-6">
                        <a href="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->rules; ?>" target="_blank" class="btn btn-outline-dark d-flex flex-column align-items-center justify-content-center">
                            <i class="mdi mdi-printer mdi-48px"></i>
                            <h4 class=" text-uppercase tracking-wide mt-2"><strong>Rules</strong></h4>
                        </a>
                    </div>
                    <?php if (isSuperAdmin()) : ?>
                        <div class="col-sm-6">
                            <a href="" class="btn btn-outline-dark d-flex flex-column align-items-center justify-content-center" data-bs-toggle="collapse" data-bs-target="#flush-collapse2">
                                <i class="mdi mdi-account mdi-48px"></i>
                                <h4 class="text-uppercase tracking-widest mt-2">
                                    <strong>Participants</strong>
                                </h4>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample">
    <?php if (isSuperAdmin()) : ?>
        <div class="accordion-item mb-3">
            <div class="card">
                <div class=" card-body p-2 m-0">
                    <h2 class="accordion-header p-0" id="flush-heading2">
                        <button class="accordion-button collapsed rounded d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                            <h5 class="px-5 py-0 m-0">
                                Participants
                            </h5>
                        </button>
                    </h2>
                    <div id="flush-collapse2" class="accordion-collapse collapse py-5" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                        <div class="row justify-content-center">
                            <div class="col-md-11">
                                <div class="accordion-body"><?= $item->description; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="accordion-item mb-3">
        <div class="card">
            <div class=" card-body p-2 m-0">
                <h2 class="accordion-header p-0" id="flush-heading3">
                    <button class="accordion-button collapsed rounded d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                        <h5 class="px-5 py-0 m-0">
                            Bracket
                        </h5>
                    </button>
                </h2>
                <div id="flush-collapse3" class="accordion-collapse collapse py-5" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="accordion-body"><?= $item->description; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion-item mb-3">
        <div class="card">
            <div class="card-body p-2 m-0">
                <h2 class="accordion-header p-0" id="flush-headingOne">
                    <button class="accordion-button collapsed rounded d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <h5 class="px-5 py-0 m-0">Description</h5>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse py-5" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="row justify-content-center">
                        <div class="col-md-11">
                            <div class="accordion-body"><?= $item->description; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>