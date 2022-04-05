<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-5">Add New Tournament</h4>
            <?php echo validation_errors(); ?>
            <?php echo form_open_multipart('tournament/add', array('class' => 'form-sample')); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label>Name</label>
                        <div>
                            <input type="text" class="form-control" name="tournament_name" placeholder="Input Tournament Name" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group row">
                        <label>Max Participants</label>
                        <div>
                            <input type="number" class="form-control" name="max_participants" min="1" value="8" />
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group row">
                        <label>Venue</label>
                        <div>
                            <input type="text" class="form-control" name="venue" placeholder="Venue Name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group row">
                        <label>Location / Map , Url</label>
                        <div>
                            <input type="text" class="form-control" name="venue_map" placeholder="Google Maps Url " />
                        </div>
                    </div>
                </div>
            </div>
            <p class="card-description">
                Date
            </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label>Event Date</label>
                        <div>
                            <input type="datetime-local" class="form-control" name="event_date" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label>Start Date</label>
                        <div>
                            <input type="datetime-local" class="form-control" name="regist_date" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label>End Date</label>
                        <div>
                            <input type="datetime-local" class="form-control" name="closed_date" />
                        </div>
                    </div>
                </div>
            </div>


            <p class="card-description">
                Public Information
            </p>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Rules ( Recommended file : <strong>PDF Format</strong> )</label>
                        <div class="input-group">
                            <input type="file" name="rules" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Logo ( Recommend : Scale 1x1 , <strong>JPG/JPEG/PNG Format</strong> )</label>
                        <div class="input-group">
                            <input type="file" name="logo" class="form-control" accept="image/png, image/gif, image/jpeg" required>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Banner ( Recommend : 1200 x 300 , <strong>JPG/JPEG/PNG Format</strong> )</label>
                        <div class="input-group">
                            <input type="file" name="banner" class="form-control" accept="image/png, image/gif, image/jpeg" required>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group row">
                        <label>Description</label>
                        <div>
                            <textarea class="tinymce form-control" name="description"></textarea>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                        <div class="form-group row">
                            <label>Postcode</label>
                            <div>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div> -->
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label>City</label>
                            <div>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label>Country</label>
                            <div>
                                <select class="form-control">
                                    <option>America</option>
                                    <option>Italy</option>
                                    <option>Russia</option>
                                    <option>Britain</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> -->
            <?php echo form_close(); ?>
        </div>
    </div>
</div>