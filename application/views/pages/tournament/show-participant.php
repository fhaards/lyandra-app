<h4 class="pb-3">Participant
    <span class="card-description"> List
    </span>
</h4>
<div class="table-responsive">
    <?php if ($checkMaxParticipant == '0') : ?>
        <div class="text-center text-danger border-botom py-2 bg-warning text-white d-flex justify-content-center w-100 rounded-2 mb-3">
            Warning ! Capacity is no longer available , The number of players is sufficient
        </div>
    <?php endif; ?>
    <table class="table table-striped table-hover dataTable" width="100%">
        <thead>
            <tr>
                <th>User</th>
                <th>Contingent</th>
                <th>Gender</th>
                <th>Weight</th>
                <th>Height</th>
                <th>Submit At</th>
                <th>Status</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($participant as $tr) : ?>
                <tr>
                    <td class="py-2">
                        <a href="javascript:void(0)" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#detailUserModal" onclick="detailUser(<?= $tr['user_id']; ?>)">
                            <?= $tr['name']; ?>
                        </a>
                    </td>
                    <td class="py-2"><?= $tr['contingent_name']; ?></td>
                    <td class="py-2"><?= $tr['gender']; ?></td>
                    <td class="py-2"><?= $tr['weight']; ?> Kg</td>
                    <td class="py-2"><?= $tr['height']; ?> cm</td>
                    <td class="py-2"><?= setTimeDate($tr['submit_at']); ?></td>
                    <td class="py-2"><?= setParticipantStatus($tr['participant_status']); ?></td>
                    <td>
                        <?php if ($tr['participant_status'] == 0) : ?>
                            <a data-bs-toggle="modal" data-bs-target="#updateParticipantModal" href="javascript:void(0)" class="btn btn-success d-inline-flex px-2 py-1 justify-content-center <?= ($checkMaxParticipant == '0') ? 'disabled' : ''; ?>" onclick="updateParticipants('<?= site_url('tournament/participant-update/' . $tr['participant_id'] . '/' . $tr['participant_tournament'] . '/1') ?>')">
                                <i class="mdi mdi-check p-0 m-0"></i>
                            </a>
                        <?php else : ?>
                            <a data-bs-toggle="modal" data-bs-target="#updateParticipantModal" href="javascript:void(0)" class="btn btn-danger d-inline-flex px-2 py-1 justify-content-center" onclick="updateParticipants('<?= site_url('tournament/participant-update/' . $tr['participant_id'] . '/'  . $tr['participant_tournament'] . '/0') ?>')">
                                <i class="mdi mdi-close p-0 m-0"></i>
                            </a>
                        <?php endif; ?>
                        <!-- <div class="btn-wrapper justify-content-center d-flex">
                            <button class="btn btn-success btn-sm rounded-2 py-1 px-1 fw-bolder d-flex flex-row align-items-center" data-bs-toggle="modal" type="button" data-bs-target="#updateParticipantModal" onclick="updateParticipant('<?php echo site_url('tournament/participant-update/' . $tr['participant_id']) ?>', '<?= $tr['participant_tournament']; ?> ')">
                                <i class="mdi mdi-refresh"></i> <span class="m-0 p-0"> Update </span>
                            </button>
                        </div> -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>