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
                                <a href="<?= base_url() . 'tournament/add'; ?>" type="button" class="btn btn-social-icon-text btn-primary"><i class="ti-plus"></i>Add Data</a>
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
                                    <td><?= setTournStatus($x['status']); ?></td>
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
                                                <a data-bs-toggle="modal" data-bs-target="#joinTournamentModal" thisuid="" onclick="joinTournamentModal('<?= $x['tournament_id']; ?>','<?= getUserData()['user_id']; ?>')" href="javascript:void(0)" class="btn btn-primary px-2 py-2 <?= (getUserData()['user_status'] == '2' ? '' : 'disabled'); ?> ">
                                                    <i class="mdi mdi-file-plus"></i> Register
                                                </a>
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