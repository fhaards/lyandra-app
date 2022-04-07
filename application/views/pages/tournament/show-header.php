<div class="col-md-12 grid-margin stretch-card">
    <div class="card">

        <div class="card-body tour-details ">
            <div class="row mb-3 mt-4 img-tour-banner-fluid">
                <div class="col-md-12">
                    <div class="img-tour-banner">
                        <div class="overlay"></div>
                        <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->banner; ?>">
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-0 img-tour-header">
                <div class="col-md-12 d-flex justify-content-center mb-3">
                    <div class="img-tour-logo">
                        <img class="img-responsive" src="<?= base_url() . 'uploads/tournaments/' . $item->tournament_id . '/' . $item->logo; ?>">
                    </div>
                </div>
                <div class="my-3 col-md-12 d-flex justify-content-center">
                    <div class="text-center">
                        <h2 class="page-title tracking-wide fw-bold text-uppercase tracking-wider"><?= $item->tournament_name; ?></h2>
                    </div>
                </div>
            </div>
            <?php if (isSuperAdmin()) : ?>
                <div class="row d-flex flex-row justify-content-between align-items-center border-top pt-3 upload-bracket-info">
                    <div class="col-md-12 d-flex justify-content-center mb-3">
                        <h5 class="text-uppercase fw-bold tracking-widest text-secondary">Bracket</h5>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="home-tab">
                            <div class="btn-wrapper">
                                <?php if ($item->bracket === null) : ?>
                                    <a href="<?= base_url() . "uploads/bracket/single/" . $item->max_participants . "-team-templates.xlsx"; ?>" class="btn btn-outline-primary btn-sm m-0 rounded-2">
                                        <i class="icon-download"></i> Download Template
                                    </a>
                                <?php else : ?>
                                    <a href="<?= base_url() . "uploads/tournaments/" . $item->tournament_id . "/" . $item->bracket; ?>" class="btn btn-outline-primary btn-sm m-0 rounded-2">
                                        <i class="icon-download"></i> Download
                                    </a>
                                <?php endif; ?>
                                <a href="javascript:void(0)" class="btn btn-primary text-white btn-sm m-0 rounded-2 upload-bracket">
                                    <i class="icon-upload"></i> Upload
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upload Bracket -->
                <div class="upload-bracket-form d-none mt-3">
                    <?php echo form_open_multipart("tournament/upload-bracket/" . $item->tournament_id, array('class' => 'form-sample')); ?>
                    <div class="row pt-2 px-0 align-items-center">
                        <div class="col-md-8 col-7 form-group d-flex flex-column ">
                            <label class="me-4">Bracket File ( Recommend Scale : <strong>xlsx , xls Format</strong> )</label>
                            <input type="hidden" name="tournament_name" value="<?= $item->tournament_name; ?>">
                            <div class="input-group">
                                <input type="hidden" name="bracket_old" value="<?= $item->bracket; ?>">
                                <input type="file" name="bracket" class="form-control form-control-sm" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-5 align-items-center d-flex justify-content-between">
                            <button type="submit" class="btn fw-bold btn-primary btn-sm btn-icon-text d-flex flex-row align-items-center"><i class="mdi mdi-upload me-2"></i> Upload </button>
                            <a href="javascript:void(0)" class="p-0 link-primary d-flex flex-row justify-content-center align-items-center text-decoration-none close-upload-bracket-form">
                                <i class="mdi mdi-close m-0 mdi-24px"></i>
                            </a>

                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>