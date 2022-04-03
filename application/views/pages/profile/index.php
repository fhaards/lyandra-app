<div class="row detail-pages">
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body detail-header">
                <div class="detail-banner"></div>
                <div class="card-title detail-header-title d-flex flex-row justify-content-between align-items-center">
                    <h4>My <span class="card-description">Profile</span></h4>
                    <a href="" class="btn btn-light btn-sm btn-edit d-flex flex-row align-items-center"><i class="mdi mdi-pencil me-4"></i> Edit </a>
                </div>
                <div class="d-flex justify-content-center align-items-center p-0">
                    <div class="detail-photo">
                        <!-- <a href="" class="btn btn-light btn-sm btn-edit"><i class="mdi mdi-pencil"></i></a> -->
                        <img class="img-responsive" src="<?= base_url() . 'uploads/profile/default.png'; ?>" alt="logo">
                    </div>
                </div>
                <div class="detail-header-content my-4">
                    <div class="text-center">
                        <h2 class="page-title tracking-wide"><strong> <?= getUserData()['name']; ?> </strong></h2>
                        <?= checkUserStatus(getUserData()['user_status']);?>
                    </div>
                </div>
                <div class="row justify-content-center my-3">
                    <div class="col-md-11">
                        <div class="row py-1 px-0 border-top">
                            <div class="px-0 my-0 py-2  col-md-6 form-group d-flex flex-column ">
                                <label class="me-4 my-0">Username</label>
                                <p class="my-0"><strong><?= getUserData()['username']; ?></strong></p>
                            </div>
                            <div class="px-0 my-0 py-2   col-md-6 form-group d-flex flex-column">
                                <label class="me-4 my-0">Phone</label>
                                <p class="my-0"><strong><?= getDataIfNull($item->phone); ?></strong></p>
                            </div>
                        </div>
                        <div class="row py-1 px-0 border-top">
                            <div class="px-0 my-0 py-2  col-md-6 form-group d-flex flex-column">
                                <label class=" me-4">Address</label>
                                <p class="my-0"><strong><?= getDataIfNull($item->address); ?></strong></p>
                            </div>
                        </div>
                        <div class="row py-1 px-0 border-top">
                            <div class="px-0 my-0 py-2   col-md-4 form-group d-flex flex-column">
                                <label class="me-4 my-0">Gender</label>
                                <p class="my-0"><strong><?= getDataIfNull($item->gender); ?></strong></p>
                            </div>
                            <div class="px-0 my-0 py-2 col-md-4 form-group d-flex flex-column">
                                <label class="me-4 my-0">Belt</label>
                                <p class="my-0"><strong><?= getDataIfNull($item->belt); ?></strong></p>
                            </div>
                            <div class="px-0 my-0 py-2  col-md-4 form-group d-flex flex-column">
                                <label class="me-4 my-0">Class</label>
                                <p class="my-0"><strong><?= getDataIfNull($item->class); ?></strong></p>
                            </div>
                        </div>
                        <div class="row py-1 px-0 border-top">
                            <div class="px-0 my-0 py-2   col-md-4 form-group d-flex flex-column">
                                <label class="me-4 my-0">Wieght</label>
                                <p class="my-0"><strong><?= getDataIfNull($item->weight); ?></strong></p>
                            </div>
                            <div class="px-0 my-0 py-2 col-md-4 form-group d-flex flex-column">
                                <label class="me-4 my-0">Height</label>
                                <p class="my-0"><strong><?= getDataIfNull($item->height); ?></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-header py-2">
                <div class="card-title my-0 py-2">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h4 class="py-2 my-0">Recent <span class="card-description">Tournament</span></h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive py-5">
                    <table class="table table-striped" id="dataTable">
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-header py-2">
                <div class="card-title my-0 py-2">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h4 class="py-2 my-0">Profile <span class="card-description">Detail</span></h4>
                        <a href="" class="btn btn-light btn-sm btn-edit d-flex flex-row align-items-center my-0"><i class="mdi mdi-pencil me-4"></i> Edit </a>
                    </div>
                </div>
            </div>
            <div class="card-body">


                <div class="table-responsive py-5">
                    <table class="table table-striped" id="dataTable">
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>