<div class="row detail-pages">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card" id="profile-pages">
            <div class="card-body detail-header">
                <div class="detail-banner"></div>
                <div class="card-title detail-header-title d-flex flex-row justify-content-between align-items-center">
                    <h4>My <span class="card-description">Profile</span></h4>
                    <!-- <a href="" class="btn btn-light btn-sm btn-edit d-flex flex-row align-items-center"><i class="mdi mdi-pencil me-4"></i> Edit </a> -->
                </div>
                <div class="d-flex justify-content-center align-items-center p-0">
                    <div class="detail-photo">
                        <a href="" class="btn btn-light btn-sm rounded-1 px-2 py-1 btn-edit edit-photo-profile-trigger"><i class="mdi mdi-pencil"></i></a>
                        <img src="<?= base_url() . 'uploads/profile/' . loadProfilePhoto($item->user_id, $item->photo); ?>" alt="logo">
                    </div>
                </div>
                <div class="detail-header-content my-4">
                    <div class="text-center">
                        <h2 class="page-title tracking-wide"><strong> <?= getUserData()['name']; ?> </strong></h2>
                    </div>
                </div>

                <div class="container row justify-content-center my-3 mx-auto">

                    <div class="">
                        <hr>
                    </div>

                    <div class="row px-0 pb-0 mb-0">
                        <div class="col-md-12 py-0 mb-0 form-group d-flex justify-content-between">
                            <label> User Status </label>
                            <?= checkUserStatus(getUserData()['user_status']); ?>
                        </div>
                    </div>

                    <div class="">
                        <hr>
                    </div>

                    <?php echo validation_errors(); ?>
                    <!-- EDIT PHOTO -->
                    <div class="profile-photo-forms d-none">
                        <?php echo form_open_multipart("profile/update-photo/" . $item->user_id, array('class' => 'form-sample')); ?>
                        <div class="row pt-2 px-0 align-items-center">
                            <div class="col-md-8 col-7 form-group d-flex flex-column ">
                                <label class="me-4">Photo ( Recommend Scale : 1x1 , <strong>JPG/JPEG/PNG Format</strong> )</label>
                                <div class="input-group">
                                    <input type="hidden" name="photo_old" value="<?= $item->photo; ?>">
                                    <input type="file" name="photo" class="form-control form-control-sm" accept="image/png, image/gif, image/jpeg" required>
                                </div>
                            </div>
                            <div class="col-md-4 col-5 align-items-end d-flex justify-content-end">
                                <button type="submit" class="btn fw-bold btn-primary btn-sm btn-icon-text d-flex flex-row align-items-center"><i class="mdi mdi-upload me-2"></i> Upload </a>
                            </div>
                        </div>
                        <hr>
                        <?php echo form_close(); ?>
                        <div class="row pt-2 px-0 align-items-center">
                            <div class="col-md-12 col-12 form-group d-flex flex-column ">
                                <a href="javascript:void(0)" class="p-0 link-primary d-flex flex-row justify-content-center align-items-center text-decoration-none edit-photo-profile-trigger">
                                    <i class="mdi mdi-arrow-left m-0"></i>
                                    <p class="h5 m-0">&nbsp; Account Information </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- EDIT ACCOUNT INFOMARTION -->
                    <div class="profile-account-forms">
                        <?php echo form_open("profile/update/" . $item->user_id, array('class' => 'form-sample')); ?>
                        <div class="row pt-2 px-0">
                            <div class="col-md-6 form-group d-flex flex-column ">
                                <label class="me-4">Username</label>
                                <input type="text" class="form-control bg-light" disabled name="phone" value="<?= getUserData()['username']; ?>" />
                            </div>
                            <div class="col-md-6 form-group d-flex flex-column">
                                <label class="me-4">Phone</label>
                                <input type="text" class="form-control" name="phone" value="<?= $item->phone; ?>" />
                            </div>
                        </div>
                        <div class="row py-1 px-0">
                            <div class="col-md-12 form-group d-flex flex-column">
                                <label class=" me-4">Address</label>
                                <input type="text" class="form-control" name="address" value="<?= $item->address; ?>" />
                            </div>
                        </div>
                        <div class="row py-1 px-0">
                            <div class="col-md-4 form-group d-flex flex-column">
                                <label class="me-4">Gender</label>
                                <select class="form-control" name="gender">
                                    <?php $gArr = ['Male', 'Female']; ?>
                                    <?php foreach ($gArr as $gender) : ?>
                                        <option value="<?= $gender; ?>" <?= ($gender == $item->gender) ? 'selected' : ''; ?>><?= $gender; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-4 form-group d-flex flex-column">
                                <label class="me-4">Belt</label>
                                <?php $bArr = ['1' => 'Red', '2' => 'Blue']; ?>
                                <select class="form-control" name="belt">
                                    <?php foreach ($bArr as $kBarr => $belts) : ?>
                                        <option value="<?= $kBarr; ?>" <?= ($kBarr == $item->belt) ? 'selected' : ''; ?>><?= $belts; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-4 form-group d-flex flex-column">
                                <label class="me-4">Class</label>
                                <input type="text" class="form-control" name="class" value="<?= $item->class; ?>" />
                            </div>
                        </div>
                        <div class="row py-1 px-0">
                            <div class="col-md-4 form-group d-flex flex-column">
                                <label class="me-4">Wieght</label>
                                <input type="number" class="form-control" min="1" name="weight" value="<?= $item->weight; ?>" />
                            </div>
                            <div class="col-md-4 form-group d-flex flex-column">
                                <label class="me-4">Height</label>
                                <input type="number" class="form-control"  min="1" name="height" value="<?= $item->height; ?>" />
                            </div>
                        </div>
                        <div class="row"><div class="col-md-12"><hr></div></div>
                        <div class="row py-1 px-0">
                            <div class="col-md-6 form-group d-flex flex-column">
                                <label>Contingent</label>
                                <select class="form-control" name="contingent_id">
                                    <?php foreach ($contingent as $c) : ?>
                                        <option value="<?= $c['contingent_id']; ?>" <?= ($item->contingent_id == $c['contingent_id']) ? 'selected' : '' ;?>><?= $c['contingent_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row"><div class="col-md-12"><hr></div></div>
                        <div class="row px-0 ">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn fw-bold btn-primary d-flex flex-row align-items-center px-3 py-1"><i class="mdi mdi-pencil me-2"></i> Edit Account</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 grid-margin stretch-card d-flex flex-column">
        <div class="row flex-grow">
            <!-- RECENT EVENTS -->
            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title  card-title-das mb-2h">Recent Events</h4>
                        <?php foreach ($recentEvents as $x) : ?>
                            <a class="btn btn-light btn-icon-text rounded-2 px-3 py-1 mb-2 border d-flex" href="<?= base_url() . 'tournament/show/' . $x['tournament_id']; ?>">
                                <div class="list d-flex flex-row justify-content-between align-items-center  py-2">
                                    <div class="wrapper w-100">
                                        <p class="mb-1 fw-bold px-0 text-dark"><?= $x['tournament_name']; ?></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                <p class="mb-0 text-small text-secondary"><?= setDate($x['event_date']); ?></p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </a>
                        <?php endforeach; ?>
                        <div class="list align-items-center pt-3">
                            <div class="wrapper w-100">
                                <p class="mb-0">
                                    <a href="<?= base_url() . 'tournament'; ?>" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title  card-title-dash">Recent Events</h4>
                        <div class="list align-items-center border-bottom py-2">
                            <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                    Change in Directors
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list align-items-center border-bottom py-2">
                            <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                    Other Events
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list align-items-center border-bottom py-2">
                            <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                    Quarterly Report
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list align-items-center border-bottom py-2">
                            <div class="wrapper w-100">
                                <p class="mb-2 font-weight-medium">
                                    Change in Directors
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="list align-items-center pt-3">
                            <div class="wrapper w-100">
                                <p class="mb-0">
                                    <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
