<div class="row" id="tournament-detail">
    <?php $this->load->view('pages/tournament/show-header.php'); ?>                                    
    <?php $this->load->view('pages/tournament/show-detail.php'); ?>                                    
</div>

<div class="accordion accordion-flush" id="accordionFlushExample">
    <?php if (isSuperAdmin()) : ?>
        <div class="accordion-item mb-3">
            <div class="card">
                <div class=" card-body p-2 m-0">
                    <h2 class="accordion-header p-0" id="flush-heading2">
                        <button class="accordion-button collapsed rounded d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                            <h5 class="py-0 m-0 fw-bold text-uppercase tracking-widest">
                                Participants
                            </h5>
                        </button>
                    </h2>
                    <div id="flush-collapse2" class="accordion-collapse collapse py-5" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                        <div class="row py-2 px-4">
                            <div class="col-md-12 m-0">
                                <?php $this->load->view('pages/tournament/show-participant.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>