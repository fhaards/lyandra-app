<div class="table-responsive">
    <table class="table table-striped table-hover dataTable" width="100%">
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
                <tr >
                    <td width="50%"  class="py-2"><?= $tr['name']; ?></td>
                    <td width="20%"  class="py-2"><?= setTimeDate($tr['submit_at']); ?></td>
                    <td  class="py-2"><?= setParticipantStatus($tr['participant_status']); ?></td>
                    <td  class="py-2">
                        <div class="btn-wrapper justify-content-center d-flex">
                            <button class="btn btn-success btn-sm rounded-2 py-1 px-1 fw-bolder d-flex flex-row align-items-center"
                                data-bs-toggle="modal" type="button" data-bs-target="#updateParticipantModal" onclick="updateParticipant('<?php echo site_url('tournament/participant-update/' . $tr['participant_id']) ?>', '<?= $tr['participant_tournament']; ?> ')" >
                                <i class="mdi mdi-refresh"></i> <span class="m-0 p-0"> Update </span>
                            </button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>