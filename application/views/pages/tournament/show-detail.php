<div class="col-md-12 grid-margin stretch-card">
    <div class="card card-tour-detail">
        <div class="card-title border-bottom d-flex flex-row justify-content-between py-3 px-3 align-items-center">
            <h4 class="m-0">Tournament Detail </h4>
            <div class="home-tab">
                <div class="btn-wrapper">
                    <a href="<?= base_url() . "tournament/edit/" . $item->tournament_id; ?>" class="btn btn-outline-primary btn-sm m-0 rounded-2"><i class="icon-pencil"></i> Edit</a>
                    <a href="<?= base_url() . "reports/tournament-detail/" . $item->tournament_id; ?>" class="btn btn-outline-primary btn-sm m-0 rounded-2"><i class="icon-printer"></i> Print</a>
                </div>
            </div>
        </div>
        <div class="card-body">

            <div class="row mx-0 mb-2 align-items-center justify-content-center">
                <div class="col-12 col-sm-12 mb-2">
                    <p class="card-description fw-bold text-uppercase tracking-widest text-primary text-center">
                        Events
                    </p>
                </div>
                <div class="col-sm-4 my-0 text-center">
                    <div class="form-group">
                        <label class="fw-bold text-secondary tracking-wide p-0 m-0">Event Date : </label>
                        <p class="p-0 fw-bold m-0"><?= setDate($item->event_date); ?></p>
                    </div>
                </div>
                <div class="col-sm-4 my-0 text-center">
                    <div class="form-group">
                        <label class="fw-bold text-secondary tracking-wide p-0 m-0">Start :</label>
                        <p class="p-0 fw-bold m-0"><?= setDate($item->regist_date); ?></p>
                    </div>
                </div>
                <div class="col-sm-4 my-0 text-center">
                    <div class="form-group">
                        <label class="fw-bold text-secondary tracking-wide p-0 m-0">End :</label>
                        <p class="p-0 fw-bold m-0"><?= setDate($item->closed_date); ?></p>
                    </div>
                </div>

                <div class="col-sm-4 my-0 text-center">
                    <div class="form-group">
                        <label class="fw-bold text-secondary tracking-wide p-0 m-0">Max Participants: </label>
                        <p class="p-0 fw-bold m-0"><?= $item->max_participants; ?></p>
                    </div>
                </div>
                <div class="col-sm-4 my-0 text-center">
                    <div class="form-group">
                        <label class="fw-bold text-secondary tracking-wide p-0 m-0">Type: </label>
                        <p class="p-0 fw-bold m-0"><?= $item->type; ?> Elemination</p>
                    </div>
                </div>
                <div class="col-sm-4 my-0 text-center">
                    <div class="form-group">
                        <label class="fw-bold text-secondary tracking-wide p-0 m-0">Venue:</label>
                        <p class="p-0 fw-bold m-0"><?= $item->venue; ?></p>
                    </div>
                </div>

                <div class="col-12 col-sm-12 mb-2">
                    <hr>
                    <p class="card-description fw-bold text-uppercase tracking-widest text-primary text-center">
                        Condition
                    </p>
                </div>
                <?php if (isUser()) : ?>
                    <div class="col-sm-12 my-0 text-center">
                        <div class="form-group text-center">
                            <?php if (checkCondition($item2->min_age, $item2->max_age, getAge(), $item2->min_weight, $item2->max_weight, getUserAccount()['weight']) == false) : ?>
                                <div class="badge badge-danger text-danger fw-bold py-2 px-4 d-inline-flex flex-row align-items-center text-uppercase tracking-widest w-auto">

                                    <i class="mdi mdi-close mdi-18px me-2"></i>
                                    <span> Condition Not Match </span>

                                </div>
                            <?php else : ?>
                                <div class="badge badge-opacity-success text-success fw-bold py-2 px-4 d-inline-flex flex-row align-items-center text-uppercase tracking-widest w-auto">

                                    <i class="mdi mdi-check mdi-18px me-2"></i>
                                    <span> Condition Match </span>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-sm-4 my-0 text-center">
                    <div class="form-group">
                        <label class="fw-bold text-secondary tracking-wide p-0 m-0">Age : </label>
                        <p class="p-0 fw-bold m-0"><?= $item2->min_age; ?> - <?= $item2->max_age; ?></p>
                    </div>
                </div>
                <div class="col-sm-4 my-0 text-center">
                    <div class="form-group">
                        <label class="fw-bold text-secondary tracking-wide p-0 m-0">Weight:</label>
                        <p class="p-0 fw-bold m-0"><?= $item2->min_weight; ?> - <?= $item2->max_weight; ?> Kg</p>
                    </div>
                </div>
            </div>
            <div class="row pt-3 pb-4 mb-3 mx-0 gy-4 gx-4 align-items-center justify-content-center">
                <div class="col-12 col-sm-12 mb-2">
                    <hr>
                    <p class="card-description fw-bold text-uppercase tracking-widest text-primary text-center">
                        Shortcut
                    </p>
                </div>
                <div class="col-sm-2 col-6 mt-0 mb-2">
                    <a href="<?= base_url() . 'uploads/tournaments/' . $item3->tournament_id . '/' . $item3->rules; ?>" target="_blank" class="button-information btn btn-light text-primary d-flex flex-column align-items-center justify-content-center <?= (is_null($item3->rules)) ? 'btn disabled' : ''; ?>">
                        <i class="mdi mdi-printer mdi-48px"></i>
                        <div class=" text-uppercase tracking-wide mt-2"><strong>Rules</strong></div>
                    </a>
                </div>
                <div class="col-sm-2 col-6 mt-0 mb-2">
                    <a href="<?= $item->venue_map; ?>" target="_blank" class="button-information btn btn-light text-success d-flex flex-column align-items-center justify-content-center">
                        <i class="mdi mdi-map-marker mdi-48px"></i>
                        <div class=" text-uppercase tracking-wide mt-2"><strong>Maps</strong></div>
                    </a>
                </div>
                <?php if (isUser()) : ?>

                    <?php if (checkJoinParticipant($item->tournament_id, getUserData()['user_id']) == 0) : ?>
                        <div class="col-sm-2 col-6 mt-0 mb-2">
                            <?php
                            if (getUserData()['user_status'] == '2') :
                                if (compareDate($item->closed_date) == '2') :
                                    $disbtn = "disabled";
                                else :
                                    if (checkCondition($item2->min_age, $item2->max_age, getAge(), $item2->min_weight, $item2->max_weight, getUserAccount()['weight']) == false) :
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
                        </div>
                    <?php else : ?>
                        <?php if (setParticipantStatusCheck($item->tournament_id, getUserData()['user_id']) == 0) : ?>
                            <div class="col-sm-2 col-6 mt-0 mb-2">
                                <a href="javascript:void(0)" class="button-information btn btn-light text-secondary d-flex flex-column align-items-center justify-content-center disabled">
                                    <i class="mdi mdi-clock mdi-48px"></i>
                                    <div class=" text-uppercase tracking-wide mt-2"><strong>Pending</strong></div>

                                </a>
                            </div>
                        <?php else : ?>
                            <div class="col-sm-2 col-6 mt-0 mb-2">
                                <a href="javascript:void(0)" class="button-information btn btn-light text-success d-flex flex-column align-items-center justify-content-center disabled">
                                    <i class="mdi mdi-check mdi-48px"></i>
                                    <div class=" text-uppercase tracking-wide mt-2"><strong>Approved</strong></div>
                                </a>
                            </div>
                            <?php
                            if (compareDate($item->closed_date) == '1') :
                                $disbtn2 = "disabled";
                                $cText = "<small>Waiting Closed</small>";
                            else :
                                $disbtn2 = "";
                                $cText = "Pint Card";
                            endif;
                            ?>
                            <div class="col-sm-2 mt-0 mb-2">
                                <a href="<?= base_url() . 'tournament/participant-printcard/' . $item->tournament_id . '/' . getUserData()['user_id']; ?>" target="_blank" class="button-information btn btn-light text-info border-1 d-flex flex-column align-items-center justify-content-center <?= $disbtn2; ?>">
                                    <i class="mdi mdi-card-text-outline mdi-48px"></i>
                                    <div class="text-uppercase tracking-widest mt-2">
                                        <strong><?= $cText; ?></strong>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>

                    <div class="col-sm-2 col-6 mt-0 mb-2">
                        <a <?php if ($item->bracket === null) : ?> href="javscript:void(0)" class="button-information btn btn-light text-dark border-1 d-flex flex-column align-items-center justify-content-center" <?php else : ?> href="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->bracket; ?>" class="button-information btn btn-light text-dark border-1 d-flex flex-column align-items-center justify-content-center" <?php endif; ?>>
                            <i class="mdi mdi-tournament mdi-48px"></i>
                            <div class="text-uppercase tracking-widest mt-2">
                                <strong>Bracket</strong>
                            </div>
                        </a>
                    </div>

                <?php else : ?>
                    <div class="col-sm-2 col-6 my-0">
                        <a href="" class="button-information btn btn-light text-dark border-1 d-flex flex-column align-items-center justify-content-center" data-bs-toggle="collapse" data-bs-target="#flush-collapse2">
                            <i class="mdi mdi-account mdi-48px"></i>
                            <div class="text-uppercase tracking-widest mt-2">
                                <strong>Participants</strong>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row py-0 mx-0 gy-4 gx-4 align-items-center justify-content-center">
                <div class="col-12 col-sm-12 my-0">
                    <hr>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label class="fw-bold text-secondary tracking-wide p-0 m-0">Description : </label>
                        <br>
                        <br>
                        <?= $item->description; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>