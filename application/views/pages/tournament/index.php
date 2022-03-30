<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="pb-3">Tournament
                            <p class="card-description">
                                Tournament List
                            </p>
                        </h4>
                        <div>
                            <a href="<?= base_url() . 'tournament/add'; ?>" type="button" class="btn btn-social-icon-text btn-primary"><i class="ti-plus"></i>Add Data</a>
                        </div>
                    </div>

                </div>

                <div class="table-responsive py-5">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Event Date</th>
                                <th>Regist Date</th>
                                <th>Closed Date</th>
                                <th>Status</th>
                                <th>Act</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($item as $x) : ?>
                                <tr>
                                    <td><?= $x['tournament_name']; ?></td>
                                    <td><?= setTimeDate($x['event_date']); ?></td>
                                    <td><?= setTimeDate($x['regist_date']); ?></td>
                                    <td><?= setTimeDate($x['closed_date']); ?></td>
                                    <td><?= setTournStatus($x['status']); ?></td>
                                    <td>
                                        <div class="dropdown dropstart" id="act-tourn">
                                            <button class="badge badge-pill badge-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu mx-2">
                                                <a class="dropdown-item py-2" href="<?= base_url() . "tournament/show/" . $x['tournament_id']; ?>">
                                                    <i class="ti-eye"></i>&nbsp;&nbsp; Detail</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item py-2" href="#">
                                                    <i class="ti-pencil"></i>&nbsp;&nbsp; Edit Info</span>
                                                </a>
                                                <a class="dropdown-item py-2" href="#">
                                                    <i class="ti-pencil"></i>&nbsp;&nbsp; Edit Image</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteConfirm('<?php echo site_url('tournament/delete/' . $x['tournament_id']) ?>')" href="#!" class="delete-tourn dropdown-item py-2">
                                                    <i class="ti-trash"></i>&nbsp;&nbsp; Delete</span>
                                                </a>
                                            </div>

                                        </div>
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