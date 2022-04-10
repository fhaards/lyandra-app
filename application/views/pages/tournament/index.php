<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="pb-3">Tournament
                            <span class="card-description"> List
                            </span>
                        </h4>
                        <?php if (isSuperAdmin()) : ?>
                            <div>
                                <a href="<?= base_url() . 'tournament/add'; ?>" type="button" class="btn btn-social-icon-text btn-primary me-3"><i class="ti-plus"></i>Add Data</a>
                                <a href="<?= base_url() . 'reports/tournament'; ?>" type="button" class="btn btn-social-icon-text btn-dark"><i class="ti-printer"></i>Print</a>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>

                <div class="table-responsive py-5">
                    <table class="table table-striped dataTable" id="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Event Date</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Condition</th>
                                <th>Status</th>
                                <th>Act</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($item as $x) : ?>
                                <tr>
                                    <td>
                                        <a class="btn btn-link" href="<?= base_url() . "tournament/show/" . $x['tournament_id']; ?>">
                                            <?= longText($x['tournament_name'], 25); ?>
                                        </a>
                                    </td>
                                    <td><?= setDate($x['event_date']); ?></td>
                                    <td><?= setDate($x['regist_date']); ?></td>
                                    <td><?= setDate($x['closed_date']); ?></td>
                                    <td>
                                        <?php if (isUser()) : ?>
                                            <span class="<?= (checkWeightCondition($x['min_weight'], $x['max_weight'], getUserAccount()['weight']) == false) ? 'text-danger' : ''; ?>">
                                                <?= "Min " . $x['min_weight'] . "Kg - Max " . $x['max_weight'] . "Kg"; ?>
                                            </span>
                                        <?php else : ?>
                                            <?= "Min " . $x['min_weight'] . "Kg - Max " . $x['max_weight'] . "Kg"; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= setTournStatus(compareDate($x['closed_date'])); ?></td>
                                    <td>
                                        <?php if (isSuperAdmin()) : ?>
                                            <div class="dropdown dropstart" id="act-tourn">
                                                <button class="badge badge-pill badge-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </button>
                                                <div class="dropdown-menu mx-2">
                                                    <a class="dropdown-item py-2" href="<?= base_url() . "tournament/show/" . $x['tournament_id']; ?>">
                                                        <i class="ti-eye"></i>&nbsp;&nbsp; Detail</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item py-2" href="<?= base_url() . "tournament/edit/" . $x['tournament_id']; ?>">
                                                        <i class="ti-pencil"></i>&nbsp;&nbsp; Edit</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteConfirm('<?php echo site_url('tournament/delete/' . $x['tournament_id']) ?>')" href="#!" class="delete-tourn dropdown-item py-2">
                                                        <i class="ti-trash"></i>&nbsp;&nbsp; Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <?php if (checkJoinParticipant($x['tournament_id'], getUserData()['user_id']) == 0) : ?>
                                                <?php if (compareDate($x['closed_date']) === '1') : ?>
                                                    <?php if (checkWeightCondition($x['min_weight'], $x['max_weight'], getUserAccount()['weight']) == false) : ?>
                                                        <button type="button" class="btn btn-dark px-2 py-2 d-flex align-items-center justify-content-center" disabled>
                                                            <i class="mdi mdi-close"></i>
                                                            <span>Cannot</span>
                                                        </button>
                                                    <?php else : ?>
                                                        <a data-bs-toggle="modal" data-bs-target="#joinTournamentModal" thisuid="" onclick="joinTournamentModal('<?= $x['tournament_id']; ?>','<?= getUserData()['user_id']; ?>')" href="javascript:void(0)" class="btn btn-primary px-2 py-2 d-flex align-items-center justify-content-center <?= (getUserData()['user_status'] == '2' ? '' : 'disabled'); ?> ">
                                                            <i class="mdi mdi-file-plus"></i>
                                                            <span>Register</span>
                                                        </a>
                                                    <?php endif; ?>
                                                <?php else : ?>
                                                    <button type="button" class="btn btn-dark px-2 py-2 d-flex align-items-center justify-content-center" disabled>
                                                        <i class="mdi mdi-file-plus"></i>
                                                        <span> Closed </span>
                                                    </button>
                                                <?php endif; ?>
                                            <?php else : ?>
                                                <?= setParticipantStatus(setParticipantStatusCheck($x['tournament_id'], getUserData()['user_id'])); ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>