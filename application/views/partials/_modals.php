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
    <div class="modal-dialog ">
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

<!-- Detail user -->
<div class="modal fade modal-static" id="detailUserModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"  aria-labelledby="detailUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable user-pages">
        <div class="modal-content detail-header">
            <div class="modal-header">
                <h5 class="modal-title" id="detailUserModalLabel">Detail User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="detail-banner"></div>
                <div class="d-flex justify-content-center align-items-center p-0">
                    <div class="detail-photo">
                        <img src="" class="user-photo" alt="photo">
                    </div>
                </div>
                <div class="detail-header-content my-4">
                    <div class="text-center">
                        <h2 class="page-title tracking-wide fw-bold user-name"></h2>
                    </div>
                </div>

                <!-- 
                <div class="row pt-2 px-0 d-flex justify-content-center">
                    <div class="my-3 col-md-12 col-12 d-flex justify-content-center align-items-center">
                        <div class="load-photo">
                            <img src="" class="user-photo" alt="photo">
                        </div>
                    </div>
                    <div class="my-3 col-md-12 col-12 text-center">
                        <h2 class="page-title tracking-wide user-name fw-bold"></h2>
                    </div>
                </div> -->

                <div class="container">
                    <div class="row pt-2 px-0">
                        <div class="col-md-6 form-group d-flex flex-column ">
                            <label class="me-4">Username</label>
                            <p class="m-0 p-0 fw-bold user-username"></p>
                        </div>
                        <div class="col-md-6 form-group d-flex flex-column">
                            <label class="me-4">Phone</label>
                            <p class="m-0 p-0 fw-bold user-phone"></p>
                        </div>
                    </div>
                    <div class="row py-1 px-0">
                        <div class="col-md-12 form-group d-flex flex-column">
                            <label class=" me-4">Address</label>
                            <p class="m-0 p-0 fw-bold user-address"></p>
                        </div>
                    </div>
                    <div class="row py-1 px-0">
                        <div class="col-md-4 form-group d-flex flex-column">
                            <label class="me-4">Gender</label>
                            <p class="m-0 p-0 fw-bold user-gender"></p>
                        </div>
                        <div class="col-md-4 form-group d-flex flex-column">
                            <label class="me-4">Belt</label>
                            <p class="m-0 p-0 fw-bold user-belt"></p>
                        </div>
                        <div class="col-md-4 form-group d-flex flex-column">
                            <label class="me-4">Class</label>
                            <p class="m-0 p-0 fw-bold user-class"></p>
                        </div>
                    </div>
                    <div class="row py-1 px-0">
                        <div class="col-md-4 form-group d-flex flex-column">
                            <label class="me-4">Weight</label>
                            <p class="m-0 p-0 fw-bold user-weight"></p>
                        </div>
                        <div class="col-md-4 form-group d-flex flex-column">
                            <label class="me-4">Height</label>
                            <p class="m-0 p-0 fw-bold user-height"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row py-1 px-0">
                        <div class="col-md-6 form-group d-flex flex-column">
                            <label>Contingent</label>
                            <p class="m-0 p-0 fw-bold user-contingent"></p>
                        </div>
                    </div>
                </div>
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