<div class="row" id="user-pages">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="pb-3">User
                            <span class="card-description">List </span>
                        </h4>
                        <div>
                            <a href="<?= base_url() . 'reports/user'; ?>" type="button" class="btn btn-social-icon-text btn-dark"><i class="ti-printer"></i>Print</a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive my-5">
                    <table class="table table-striped dataTable" id="dataTable">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Full Name</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($item as $x) : ?>
                                <tr>
                                    <td width="30%">
                                        <a href="javascript:void(0)" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#detailUserModal" onclick="detailUser(<?= $x['user_id']; ?>)">
                                            <?= $x['username']; ?>
                                        </a>
                                    </td>
                                    <td width="30%"><?= $x['name']; ?></td>
                                    <td width="20%"><?= setTimeDate($x['created_at']); ?></td>
                                    <td width="10%"> <?= checkUserStatus($x['user_status']); ?></td>
                                    <td width="10%">
                                        <?php if (isSuperAdmin()) : ?>
                                            <button data-bs-toggle="modal" data-bs-target="#changeStatusUserModal" onclick="changeStatusUser('<?php echo site_url('user/update/' . $x['user_id']) ?>')" href="#!" class="btn btn-success rounded-2 py-2 px-2 fw-bolder d-flex flex-row align-items-center justif">
                                                <i class="mdi mdi-refresh"></i> <span class="m-0 p-0"> Update </span>
                                            </button>
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