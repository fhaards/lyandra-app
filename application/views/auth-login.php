<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo login-logo">
                            <img src="<?= base_url() . 'assets/cms/images/app-img/lyandra_logo.svg'; ?>" alt="logo" />
                            <!-- <img src="../../images/logo.svg" alt="logo"> -->
                        </div>
                        <h4 class="pb-3">Hello! <span class="fw-light">Sign in to continue.</span></h4>
                        <!-- <h6 class="fw-light pb-3">Sign in to continue.</h6> -->
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('auth'); ?>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="username" id="exampleUsername" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                        </div>
                        <?php echo form_close(); ?>
                        <div class="my-2 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input">
                                    Keep me signed in
                                </label>
                            </div>
                            <a href="#" class="auth-link text-black">Forgot password?</a>
                        </div>
                        <div class="text-center mt-4 fw-light">
                            Don't have an account? <a href="register.html" class="text-primary">Create</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>