<!-- Delete Confirmation -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Are you sure ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Delete Data and Data cannot be restored </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- Change Status User -->
<div class="modal fade" id="changeStatusUserModal" tabindex="-1" aria-labelledby="changeStatusUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?php echo validation_errors(); ?>
        <form method="get" action="" class="form-sample">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="changeStatusUserModalLabel">Change Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Change Status User To </label>
                        <select name="user_status" class="form-control">
                            <option value="0"> Inactive </option>
                            <option value="1"> Pending </option>
                            <option value="2"> Active </option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</a>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Change Status Participants -->
<div class="modal fade" id="updateParticipantModal" tabindex="-1" aria-labelledby="updateParticipantModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="updateParticipantModalLabel">Update Participant</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Change Status Participants </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                    <a href="" class="btn btn-primary submit-update">Submit</a>
                </div>
            </div>
    </div>
</div>

<!-- Join Tournaments -->
<div class="modal fade" id="joinTournamentModal" tabindex="-1" aria-labelledby="joinTournamentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <?php echo validation_errors(); ?>
        <form method="post" action="<?= base_url() . 'tournament/add-participant'; ?>" class="form-sample">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="joinTournamentModalLabel">Join Tournament</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you really want to join this Tournament ?
                    <input type="hidden" name="tournament_id" class="tourId" value="">
                    <input type="hidden" name="user_id" class="userId" value="">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</a>
                </div>
            </div>
        </form>
    </div>
</div>