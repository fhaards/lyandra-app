<div class="col-md-12 grid-margin stretch-card">
    <div class="card card-tour-detail">
        <div class="card-title border-bottom d-flex flex-row justify-content-between py-3 px-3 align-items-center">
            <h4 class="m-0">Tournament Detail </h4>
            <div class="home-tab">
                <div class="btn-wrapper">
                    <a href="<?= base_url() . "tournament/edit/" . $item->tournament_id; ?>" class="btn btn-outline-primary btn-sm m-0 rounded-2"><i class="icon-pencil"></i> Edit</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row mx-0 mb-2 align-items-center">
                    <div class="col-sm-4 my-0">
                        <div class="form-group">
                            <label>Event Date : </label>
                            <p class="p-0 fw-bold m-0"><?= setDate($item->event_date); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 my-0">
                        <div class="form-group">
                            <label>Start :</label>
                            <p class="p-0 fw-bold m-0"><?= setDate($item->regist_date); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 my-0">
                        <div class="form-group">
                            <label>End :</label>
                            <p class="p-0 fw-bold m-0"><?= setDate($item->closed_date); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row py-2 mb-2 mx-0 align-items-center ">
                    <div class="col-12 col-sm-12 my-0">
                        <hr>
                    </div>
                    <div class="col-sm-4 my-0">
                        <div class="form-group">
                            <label>Max Participants: </label>
                            <p class="p-0 fw-bold m-0"><?= $item->max_participants; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-8 my-0">
                        <div class="form-group">
                            <label>Venue:</label>
                            <p class="p-0 fw-bold m-0"><?= $item->venue; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row py-3 mb-2 mx-0 gy-4 gx-4 align-items-center">
                    <div class="col-12 col-sm-12 my-0">
                        <hr>
                    </div>
                    <div class="col-sm-3 my-0">
                        <a href="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->rules; ?>" target="_blank" class="button-information btn btn-light text-primary d-flex flex-column align-items-center justify-content-center">
                            <i class="mdi mdi-printer mdi-48px"></i>
                            <div class=" text-uppercase tracking-wide mt-2"><strong>Rules</strong></div>
                        </a>
                    </div>
                    <div class="col-sm-3 my-0">
                        <a href="<?= $item->venue_map; ?>" target="_blank" class="button-information btn btn-light text-success d-flex flex-column align-items-center justify-content-center">
                            <i class="mdi mdi-map-marker mdi-48px"></i>
                            <div class=" text-uppercase tracking-wide mt-2"><strong>Maps</strong></div>
                        </a>
                    </div>
                    <?php if (isUser()) : ?>
                        <div class="col-sm-3 my-0">
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

                        <div class="col-sm-3 my-0">
                            <a <?php if ($item->bracket === null) : ?> 
                                    href="javscript:void(0)" 
                                    class="button-information btn btn-light text-dark border-1 d-flex flex-column align-items-center justify-content-center" 
                                <?php else : ?> 
                                    href="<?= base_url().'uploads/tournaments/'.$item->tournament_id.'/'.$item->bracket;?>" 
                                    class="button-information btn btn-light text-dark border-1 d-flex flex-column align-items-center justify-content-center" 
                                <?php endif; ?>>
                                <i class="mdi mdi-tournament mdi-48px"></i>
                                <div class="text-uppercase tracking-widest mt-2">
                                    <strong>Bracket</strong>
                                </div>
                            </a>
                        </div>
                    <?php else : ?>
                        <div class="col-sm-3 my-0">
                            <a href="" class="button-information btn btn-light text-dark border-1 d-flex flex-column align-items-center justify-content-center" data-bs-toggle="collapse" data-bs-target="#flush-collapse2">
                                <i class="mdi mdi-account mdi-48px"></i>
                                <div class="text-uppercase tracking-widest mt-2">
                                    <strong>Participants</strong>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="row py-0 mx-0 gy-4 gx-4 align-items-center">
                    <div class="col-12 col-sm-12 my-0">
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description : </label>
                            <?= $item->description; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>