<!-- Modal -->
<div class="modal fade" id="eventDetailModal" tabindex="-1" aria-labelledby="eventDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content p-0 m-0">

            <div class="modal-header">
                <h5 class="modal-title" id="eventDetailModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-0 m-0">

                <!-- <button type="button" class="btn-close close-detail" data-bs-dismiss="modal" aria-label="Close"></button> -->

                <section class="event-detail p-0 mb-4">
                    <div class="section-header">
                        <div class="section-banner"><img src="" class="banner-img"></div>
                        <div class="section-header-title">
                            <div class="container">

                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-md-4 logo p-0"><img class="logo-img"></div>
                                </div>
                                <div class="row mt-4 justify-content-center align-items-center mb-5">
                                    <div class="col-md-10 d-flex flex-column justify-content-center align-items-center">
                                        <p class="h2 title tracking-wide"></p>
                                        <span class="h6 mt-3 text-uppercase tracking-widest type"></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                                            <div class="timeline-step">
                                                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                                                    <div class="inner-circle"></div>
                                                    <div class="form-group">
                                                        <div class="header-text-title fw-bold mt-3 mb-1 start-date"></div>
                                                        <label class="header-text-label tracking-widest fw-bold text-muted mb-0 mb-lg-0">Start Date</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="timeline-step">
                                                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                                                    <div class="inner-circle"></div>
                                                    <div class="form-group">
                                                        <div class="header-text-title fw-bold mt-3 mb-1 end-date"></div>
                                                        <label class="header-text-label tracking-widest fw-bold text-muted mb-0 mb-lg-0">End Date</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="timeline-step mb-0">
                                                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                                                    <div class="inner-circle inner-last"></div>
                                                    <div class="form-group">
                                                        <div class="header-text-title fw-bold mt-3 mb-1 event-date  text-primary"></div>
                                                        <label class="header-text-label tracking-widest fw-bold mb-0 mb-lg-0">Event Date</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row mt-4 justify-content-center align-items-center mb-3 py-4 ">
                                    <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                                        <div class="form-group py-4">
                                            <label class="header-text-label tracking-widest fw-bold">Event Date</label>
                                            <div class="header-text-title tracking-widest fw-bold"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 d-flex flex-column justify-content-center align-items-center">
                                        <div class="form-group">
                                            <label class="header-text-label tracking-widest fw-bold">Start</label>
                                            <div class="header-text-title tracking-widest fw-bold"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 d-flex flex-column justify-content-center align-items-center">
                                        <div class="form-group">
                                            <label class="header-text-label tracking-widest fw-bold">End</label>
                                            <div class="header-text-title tracking-widest fw-bold"></div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row mt-4 gy-4 justify-content-center align-items-center mb-3 py-4 ">
                                    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                                        <div class="form-group">
                                            <label class="header-text-label tracking-widest fw-bold">Age</label>
                                            <div class="header-text-title tracking-widest fw-bold condtition-age"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4  d-flex flex-column justify-content-center align-items-center">
                                        <div class="form-group">
                                            <label class="header-text-label tracking-widest fw-bold">Weight</label>
                                            <div class="header-text-title tracking-widest fw-bold condtition-weight"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 justify-content-center align-items-center">
                                    <div class="col-md-10 d-flex flex-column justify-content-center align-items-center">
                                        <div class="d-flex flex-column align-items-center gy-3">
                                            <span class="header-text-label tracking-widest fw-bold">Countdown : </span>
                                            <div id="time-countdown" class="d-flex flex-row"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ======= Services Section ======= -->
                <section id="detail-information" class="detail-information mb-4">
                    <div class="container" data-aos="fade-up">
                        <div class="row justify-content-center gy-4">
                            <div class="col-md-8 row justify-content-center px-0 pt-3 pb-5 g-0">
                                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="detail-information-box blue">
                                        <a href="" class="m-0 p-0 event-rules" target="_blank">
                                            <i class="ri-download-line icon mb-4"></i>
                                            <h3 class="m-0">
                                                <div class="read-more tracking-wide"><span>Rules</span></div>
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="detail-information-box green">
                                        <a href="" class="m-0 p-0 event-map" target="_blank">
                                            <i class="ri-map-pin-line icon mb-4"></i>
                                            <h3 class="m-0">
                                                <div class="read-more tracking-wide"><span>Map</span></div>
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="detail-information-box orange">
                                        <?php if (isLogin()) : ?>
                                            <?php
                                            if (isUser()) :
                                                $cls = "event-regist";
                                            else :
                                                $cls = "";
                                            endif;
                                            ?>
                                            <a href="" class="m-0 p-0 <?= $cls ?>">
                                            <?php else : ?>
                                                <a href="<?= base_url() . 'auth'; ?>" class="m-0 p-0">
                                                <?php endif; ?>
                                                <i class="ri-file-add-line icon mb-4"></i>
                                                <h3 class="m-0">
                                                    <div class="read-more tracking-wide"><span>Register</span></div>
                                                </h3>
                                                </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section><!-- End Services Section -->

                <div class="container">
                    <div class="row gx-0">
                        <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="content row justify-content-center align-items-center">
                                <div class="col-lg-8 text-center">
                                    <div class="description"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi-x-lg"></i></button>
            </div> -->
        </div>
    </div>
</div>

<!-- <section id="event-detail" class="event-detail d-none">
    <div class="container">
        <header class="section-header">
            <div class="banner row bg-light m-0">
                <div class="col-md-12"><img src="" class="banner-img"></div>
            </div>
            <div class="row content p-0">
                <div class="col-md-12 top-header">
                    <a href="javascript:void(0)" class="close-detail"> <i class="bi bi-x-lg"></i> </a>
                </div>
                <div class="col-md-12">
                    <h2 class="title">Event Detail</h2>
                    <p class="subtitle"></p>
                </div>
            </div>
        </header>
    </div>
    <div class="container my-5">
        <div class="row gx-0">
            <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content row justify-content-center align-items-center">
                    <div class="col-lg-8 text-center">
                        <div class="description"></div>
                        <div class="text-center text-lg-center">
                            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->