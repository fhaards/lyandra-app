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
                <div class="row mx-0 mb-2 align-items-center justify-content-center">
                    <div class="col-12 col-sm-12 my-0">
                        <p class="card-description fw-bold text-uppercase tracking-widest text-primary text-center">
                            Events
                        </p>
                    </div>
                    <div class="col-sm-4 my-0 text-center">
                        <div class="form-group">
                            <label>Event Date : </label>
                            <p class="p-0 fw-bold m-0"><?= setDate($item->event_date); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 my-0 text-center">
                        <div class="form-group">
                            <label>Start :</label>
                            <p class="p-0 fw-bold m-0"><?= setDate($item->regist_date); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 my-0 text-center">
                        <div class="form-group">
                            <label>End :</label>
                            <p class="p-0 fw-bold m-0"><?= setDate($item->closed_date); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 my-0 text-center">
                        <div class="form-group">
                            <label>Max Participants: </label>
                            <p class="p-0 fw-bold m-0"><?= $item->max_participants; ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 my-0 text-center">
                        <div class="form-group">
                            <label>Venue:</label>
                            <p class="p-0 fw-bold m-0"><?= $item->venue; ?></p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 my-0">
                        <hr>
                        <p class="card-description fw-bold text-uppercase tracking-widest text-primary text-center">
                            Condition
                        </p>
                    </div>
                    <div class="col-sm-12 my-0 text-center">
                        <div class="form-group text-center">
                            <?php if (checkWeightCondition($item2->min_weight, $item2->max_weight, getUserAccount()['weight']) == false) : ?>
                                <div class="badge badge-danger text-danger fw-bold py-2 px-4">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="mdi mdi-close mdi-18px me-2"></i>
                                        <span> Your weight doesn't match the tournament requirements </span>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="badge badge-opacity-success text-success fw-bold py-2 px-4">
                                    <div class="d-flex flex-row align-items-center">
                                        <i class="mdi mdi-check mdi-18px me-2"></i>
                                        <span> Your weight is match the tournament requirements </span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-4 my-0 text-center">
                        <div class="form-group">
                            <label>Min Weight: </label>
                            <p class="p-0 fw-bold m-0"><?= $item2->min_weight; ?> Kg</p>
                        </div>
                    </div>
                    <div class="col-sm-4 my-0 text-center">
                        <div class="form-group">
                            <label>Max Weight:</label>
                            <p class="p-0 fw-bold m-0"><?= $item2->max_weight; ?> Kg</p>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 pb-4 mb-3 mx-0 gy-4 gx-4 align-items-center justify-content-center">
                    <div class="col-12 col-sm-12 my-0">
                        <hr>
                        <p class="card-description fw-bold text-uppercase tracking-widest text-primary text-center">
                            Shortcut
                        </p>
                    </div>
                    <div class="col-sm-3 my-0">
                        <a href="<?= base_url() . 'uploads/tournaments/' . $item3->tournament_id . '/' . $item3->rules; ?>" target="_blank" class="button-information btn btn-light text-primary d-flex flex-column align-items-center justify-content-center <?= (is_null($item3->rules)) ? 'btn disabled' : ''; ?>">
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

                                <?php
                                if (getUserData()['user_status'] == '2') :
                                    if (compareDate($item->closed_date) == '2') :
                                        $disbtn = "disabled";
                                    else :
                                        if (checkWeightCondition($item2->min_weight, $item2->max_weight, getUserAccount()['weight']) == false) :
                                            $disbtn = "disabled";
                                        else :
                                            $disbtn = "";
                                        endif;
                                    endif;
                                else :
                                    $disbtn = "disabled";
                                endif;
                                ?>
                                <a data-bs-toggle="modal" data-bs-target="#joinTournamentModal" thisuid="" onclick="joinTournamentModal('<?= $item->tournament_id; ?>','<?= getUserData()['user_id']; ?>')" href="javascript:void(0)" class="button-information btn btn-light text-danger d-flex flex-column align-items-center justify-content-center <?= $disbtn ?>">
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
                            <a <?php if ($item->bracket === null) : ?> href="javscript:void(0)" class="button-information btn btn-light text-dark border-1 d-flex flex-column align-items-center justify-content-center" <?php else : ?> href="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->bracket; ?>" class="button-information btn btn-light text-dark border-1 d-flex flex-column align-items-center justify-content-center" <?php endif; ?>>
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