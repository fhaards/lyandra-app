<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <div class="">
                        <h4 class="pb-3">Tournament
                            <span class="card-description"> Bracket
                            </span>
                        </h4>

                    </div>
                </div>
                <div class="row mb-4 d-flex align-items-center justify-content-center text-center">
                    <div class="col-md-12">
                        <h4 class="pb-3 text-uppercase tracking-widest"><?= $item->tournament_name; ?> </h4>
                    </div>
                    <div class="col-md-12">
                        <p>Match Round </p>
                    </div>
                </div>

                <div class="table-responsive text-center">
                    <form class="" action="<?= base_url().'tournament/update-match-round/'; ?>" method="post" id="form-match-round">
                        <input type="hidden" value="<?= $item->tournament_id; ?>" name="match_tournament_id">
                        <table class="table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Match</th>
                                    <th>Player 1</th>
                                    <th>Player 2</th>
                                    <th>Winner</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $mr = 0; ?>
                                <?php foreach ($matchRound as $round) : ?>
                                    <?php $mr++; ?>
                                    <tr>
                                        <td>
                                            <input type="hidden" name="match_id[]" value="<?= $round['match_id'];?>">
                                            <p><?= $round['match_name']; ?> </p>
                                        </td>
                                        <td>
                                            <select class="form-control" class="player_1[]" name="match_player_1[]">
                                                <option value="">Select Player</option>
                                                <?php foreach ($approved as $a) : ?>
                                                    <option value="<?= $a['user_id']; ?>" <?= ($round['match_player_1'] == $a['user_id']) ? 'selected' : '';?>><?= $a['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="match_player_2[]">
                                                <option value="">Select Player</option>
                                                <?php foreach ($approved as $b) : ?>
                                                    <option value="<?= $b['user_id']; ?>" <?= ($round['match_player_2'] == $b['user_id']) ? 'selected' : '';?>><?= $b['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="match_player_2[]">
                                                <option value="">Select Player</option>
                                            </select>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary mt-3 text-center"> Submit </button>
                    </form>
                </div>

                <!-- <div class="row mb-4 d-flex align-items-center justify-content-center text-center">
                    <div class="col-md-12">
                        <p>Grand Finals </p>
                    </div>
                    <?php foreach ($matchFinal as $final) : ?>
                        <div class="col-md-3">
                            <div class="card m-0 p-0">
                                <div class="card-body p-3 m-0">
                                    <div class="d-flex flex-column">
                                        <div class="form-group my-0">
                                            <label>P1</label>
                                            <select class="form-control">
                                                <?php foreach ($approved as $a) : ?>
                                                    <option><?= $a['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="">
                                            <hr>
                                        </div>
                                        <div class="form-group my-0">
                                            <label>P2</label>
                                            <select class="form-control">
                                                <?php foreach ($approved as $b) : ?>
                                                    <option><?= $b['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div> -->

            </div>
        </div>
    </div>
</div>