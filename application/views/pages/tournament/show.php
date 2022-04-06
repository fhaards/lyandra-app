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

                <div class="row mt-4 mb-0 img-tour-header">
                    <div class="col-md-12 d-flex justify-content-center mb-3">
                        <div class="img-tour-logo">
                            <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->logo; ?>">
                        </div>
                    </div>
                    <div class="my-3 col-md-12 d-flex justify-content-center">
                        <div class="text-center">
                            <h2 class="page-title tracking-wide fw-bold text-uppercase tracking-wider"><?= $item->tournament_name; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card card-tour-detail">
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
                        <div class="form-group">
                            <label>Event Date : </label>
                            <p class="p-0 fw-bold m-0"><?= setDate($item->event_date); ?></p>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Start  :</label>
                            <p class="p-0 fw-bold m-0"><?= setDate($item->regist_date); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>End  :</label>
                            <p class="p-0 fw-bold m-0"><?= setDate($item->closed_date); ?></p>

                        </div>
                    </div>
                </div>
                <div class="row mb-2 border-top pt-2 mx-0 align-items-center">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Max Participants: </label>
                            <p class="p-0 fw-bold m-0"><?= $item->max_participants; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Venue:</label>
                            <p class="p-0 fw-bold m-0"><?= $item->venue; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row border-top mb-2 py-4 mx-0 align-items-center">
                    <div class="col-sm-4">
                        <a href="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->rules; ?>" target="_blank" class="button-information btn btn-light text-primary d-flex flex-column align-items-center justify-content-center">
                            <i class="mdi mdi-printer mdi-48px"></i>
                            <div class=" text-uppercase tracking-wide mt-2"><strong>Rules</strong></div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="<?= $item->venue_map; ?>" target="_blank" class="button-information btn btn-light text-success d-flex flex-column align-items-center justify-content-center">
                            <i class="mdi mdi-map-marker mdi-48px"></i>
                            <div class=" text-uppercase tracking-wide mt-2"><strong>Maps</strong></div>
                        </a>
                    </div>
                    <?php if (isUser()) : ?>
                        <div class="col-sm-4">
                            <?php if (checkJoinParticipant($item->tournament_id, getUserData()['user_id']) == 0) : ?>
                                <a data-bs-toggle="modal" data-bs-target="#joinTournamentModal" thisuid="" onclick="joinTournamentModal('<?= $item->tournament_id; ?>','<?= getUserData()['user_id']; ?>')" href="javascript:void(0)" class="button-information btn btn-light text-danger d-flex flex-column align-items-center justify-content-center
                                    <?= (getUserData()['user_status'] == '2' ? '' : 'disabled'); ?> ">
                                    <i class="mdi mdi-file-plus mdi-48px"></i>
                                    <div class=" text-uppercase tracking-wide mt-2"><strong>Register</strong></div>
                                </a>
                            <?php else : ?>
                                <a href="javascript:void(0)" class="button-information btn btn-light text-secondary d-flex flex-column align-items-center justify-content-center disabled">
                                    <i class="mdi mdi-clock mdi-48px"></i>
                                    <div class=" text-uppercase tracking-wide mt-2"><strong>Pending</strong></div>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php else : ?>
                        <div class="col-sm-4">
                            <a href="" class="button-information btn btn-light text-dark border-1 d-flex flex-column align-items-center justify-content-center" data-bs-toggle="collapse" data-bs-target="#flush-collapse2">
                                <i class="mdi mdi-account mdi-48px"></i>
                                <div class="text-uppercase tracking-widest mt-2">
                                    <strong>Participants</strong>
                                </div>
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
                            <h5 class="py-0 m-0 fw-bold text-uppercase tracking-wide">
                                Participants
                            </h5>
                        </button>
                    </h2>
                    <div id="flush-collapse2" class="accordion-collapse collapse py-5" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                        <div class="row py-2 px-4">
                            <div class="col-md-12 m-0">
                                <?php $this->load->view('pages/participant/index.php'); ?>
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
                        <h5 class="py-0 m-0 fw-bold text-uppercase tracking-wide">
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
                        <h5 class="py-0 m-0 fw-bold text-uppercase tracking-wide">Description</h5>
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