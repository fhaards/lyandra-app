<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="pb-3">contingent
                            <p class="card-description">
                                contingent List
                            </p>
                        </h4>
                        <div>
                            <a href="<?= base_url() . 'contingent/add'; ?>" type="button" class="btn btn-social-icon-text btn-primary"><i class="ti-plus"></i>Add Data</a>
                        </div>
                    </div>

                </div>

                <div class="table-responsive py-5">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Created By</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Act</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($item as $x) : ?>
                                <tr>
                                    <td><?= $x['contingent_name']; ?></td>
                                    <td><?= $x['contingent_phone']; ?></td>
                                    <td><?= $x['contingent_address']; ?></td>
                                    <td><?= $x['name']; ?></td>
                                    <td><?= setTimeDate($x['contingent_createdat']); ?></td>
                                    <td><?= setContStatus('with-style', $x['contingent_status']); ?></td>
                                    <td>
                                        <div class="dropdown dropstart" id="act-tourn">
                                            <button class="badge badge-pill badge-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </button>
                                            <div class="dropdown-menu mx-2">
                                                <a class="dropdown-item py-2" href="<?= base_url() . "contingent/show/" . $x['contingent_id']; ?>">
                                                    <i class="ti-eye"></i>&nbsp;&nbsp; Detail</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item py-2" href="<?= base_url() . "contingent/edit/" . $x['contingent_id']; ?>">
                                                    <i class="ti-pencil"></i>&nbsp;&nbsp; Edit</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="deleteConfirm('<?php echo site_url('contingent/delete/' . $x['contingent_id']) ?>')" href="#!" class="delete-tourn dropdown-item py-2">
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