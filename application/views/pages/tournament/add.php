<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <div class="container py-3">
                <h4 class="card-title mb-5">Add New Tournament</h4>
                <?php echo validation_errors(); ?>
                <?php echo form_open_multipart('tournament/add', array('class' => 'form-sample')); ?>

                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group row">
                            <label>Name</label>
                            <div>
                                <input type="text" class="form-control" name="tournament_name" placeholder="Input Tournament Name" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label>Type</label>
                            <div>
                                <select name="type" class="form-control" required>
                                    <option value="Single">Single Elemination</option>
                                    <option value="Double">Double Elemination</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group row">
                            <label>Max Participants</label>
                            <div>
                                <select name="max_participants" class="form-control form-control-sm" required>
                                    <?php for ($i= 3; $i < 17; $i++) { ?>
                                        <option value="<?= $i;?>"><?= $i; ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group row">
                            <label>Venue</label>
                            <div>
                                <input type="text" class="form-control" name="venue" placeholder="Venue Name" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group row">
                            <label>Location / Map , Url</label>
                            <div>
                                <input type="text" class="form-control" name="venue_map" placeholder="Google Maps Url " required/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>

                <!-- Tournament Condition -->
                <p class="card-description fw-bold text-uppercase tracking-widest text-dark">
                    Date
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label>Event Date</label>
                            <div>
                                <input type="datetime-local" class="form-control" name="event_date" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label>Start Date</label>
                            <div>
                                <input type="datetime-local" class="form-control" name="regist_date" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label>End Date</label>
                            <div>
                                <input type="datetime-local" class="form-control" name="closed_date" required/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>

                <!-- Tournament Condition -->
                <p class="card-description fw-bold text-uppercase tracking-widest text-dark">
                    Tournament Condition
                </p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label>Min Weight (Kg)</label>
                            <div>
                                <input type="number" class="form-control" name="min_weight" min="1" required/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label>Min Weight (Kg)</label>
                            <div>
                                <input type="number" class="form-control" name="max_weight" min="1" required/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>

                <!-- Tournament File -->
                <p class="card-description fw-bold text-uppercase tracking-widest text-dark">
                    Tournament File
                </p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Rules ( Recommended file : <strong>PDF Format</strong> )</label>
                            <div class="input-group">
                                <input type="file" name="rules" class="form-control form-control-sm" accept=".pdf,.doc,.docx" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Logo ( Recommend : Scale 1x1 , <strong>JPG/JPEG/PNG Format</strong> )</label>
                            <div class="input-group">
                                <input type="file" name="logo" class="form-control form-control-sm" accept="image/png, image/gif, image/jpeg" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Banner ( Recommend : 1200 x 300 , <strong>JPG/JPEG/PNG Format</strong> )</label>
                            <div class="input-group">
                                <input type="file" name="banner" class="form-control form-control-sm" accept="image/png, image/gif, image/jpeg" required>
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
                </div>

                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <?php echo form_close(); ?>
            </div>
        </div>  
    </div>
</div>