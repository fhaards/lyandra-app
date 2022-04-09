<div class="row">

    <div class="col-lg-9 col-md-9 col-12 grid-margin stretch-card">
        <div class="card card-rounded">
            <div class="card-body table-responsive">
                <div class="d-sm-flex justify-content-between align-items-start mb-4">
                    <div>
                        <h4 class="card-title card-title-dash">Lastest
                            <span class="card-description"> Event / Tournament </span>
                        </h4>
                    </div>
                    <?php if (isSuperAdmin()) : ?>
                        <div>
                            <a href="<?= base_url() . 'tournament/add'; ?>" type="button" class="btn btn-social-icon-text btn-primary"><i class="ti-plus"></i>Add Data</a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class=" mt-1">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Condition</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($item as $x) : ?>

                                <tr>
                                    <td>
                                        <div class="d-flex ">
                                            <?php if (is_null($x['logo'])) : ?>
                                                <img src="<?= base_url() . 'uploads/tournaments/_DEFAULT/default_logo.jpg'; ?>">
                                            <?php else : ?>
                                                <img src="<?= base_url() . 'uploads/tournaments/' . $x['tournament_id'] . '/' . $x['logo']; ?>">
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex ">
                                            <a class="text-decoration-none text-dark" href="<?= base_url() . "tournament/show/" . $x['tournament_id']; ?>">
                                                <div>
                                                    <h6 class="p-0 m-0 fw-bold"><?= longText($x['tournament_name'], 25); ?></h6>
                                                    <p class="p-0 m-0"><?= setDate($x['event_date']); ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <?= $x['type']; ?> Elemination
                                    </td>
                                    <td>
                                        <?php if (isUser()) : ?>
                                            <span class="<?= (checkWeightCondition($x['min_weight'], $x['max_weight'], getUserAccount()['weight']) == false) ? 'text-danger' : ''; ?>">
                                                <?= "Min " . $x['min_weight'] . "Kg - Max " . $x['max_weight'] . "Kg"; ?>
                                            </span>
                                        <?php else : ?>
                                            <?= "Min " . $x['min_weight'] . "Kg - Max " . $x['max_weight'] . "Kg"; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?= setTournStatus(compareDate($x['closed_date'])); ?>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="wrapper w-100 text-center mt-2">
                        <p class="mb-0">
                            <a href="<?= base_url().'tournament';?>" class="fw-bold text-primary text-uppercase text-decoration-none"><span>Show all</span> <i class="mdi mdi-arrow-right ms-2"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-lg-3 grid-margin stretch-card">
        <div class="card card-rounded">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h4 class="card-title card-title-dash">Activities</h4>
                    <p class="mb-0">20 finished, 5 remaining</p>
                </div>
                <ul class="bullet-line-list">
                    <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                            <p>Just now</p>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Jack William</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex justify-content-between">
                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                            <p>1h</p>
                        </div>
                    </li>
                </ul>
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

<!-- <div class="row">
    <div class="col-lg-8 d-flex flex-column">
        <div class="row flex-grow">
            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                            </div>
                            <div id="performance-line-legend"></div>
                        </div>
                        <div class="chartjs-wrapper mt-5">
                            <canvas id="performaneLine"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 d-flex flex-column">
        <div class="row flex-grow">
            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                <div class="card bg-primary card-rounded">
                    <div class="card-body pb-0">
                        <h4 class="card-title card-title-dash text-white mb-4">Status Summary</h4>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="status-summary-ight-white mb-1">Closed Value</p>
                                <h2 class="text-info">352117</h2>
                            </div>
                            <div class="col-sm-8">
                                <div class="status-summary-chart-wrapper pb-4">
                                    <canvas id="status-summary"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                    <div class="circle-progress-width">
                                        <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                    </div>
                                    <div>
                                        <p class="text-small mb-2">Total Participants</p>
                                        <h4 class="mb-0 fw-bold">26.80%</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="circle-progress-width">
                                        <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                    </div>
                                    <div>
                                        <p class="text-small mb-2">Request By Day</p>
                                        <h4 class="mb-0 fw-bold">9065</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->