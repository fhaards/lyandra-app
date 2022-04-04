<div class="table-responsive">
    <table class="table table-striped table-bordered dataTable">
        <thead>
            <tr>
                <th>User</th>
                <th>Submit At</th>
                <th>Status</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($participant as $tr) : ?>
                <tr>
                    <td width="50%"><?= $tr['name']; ?></td>
                    <td width="20%"><?= setTimeDate($tr['submit_at']); ?></td>
                    <td><?= setParticipantStatus($tr['participant_status']); ?></td>
                    <td>
                        <div class="btn-wrapper justify-content-center d-flex">
                            <button data-bs-toggle="modal" type="button" data-bs-target="#updateParticipantModal" onclick="updateParticipant('<?php echo site_url('tournament/participant-update/' . $tr['participant_id']) ?>', '<?= $tr['participant_tournament']; ?> ')" class="btn btn-success rounded-2 py-2 px-2 fw-bolder d-flex flex-row align-items-center">
                                <i class="mdi mdi-refresh"></i> <span class="m-0 p-0"> Update </span>
                            </button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>