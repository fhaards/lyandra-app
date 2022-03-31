<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">

        <div class="content-wrapper d-flex align-items-center auth px-0">

            <div class="row w-100 mx-0" id="auth-forms">
                <div class="col-lg-12 mx-auto">

                </div>
                <div class="col-lg-4 mx-auto">
                    <?php $this->load->view('partials/_alerts'); ?>
                    <div class="login-auth">
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
                                <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                            </div>
                            <?php echo form_close(); ?>
                            <div class="text-center mt-4 fw-light">
                                Don't have an account? <a href="javascript:void(0)" class="text-primary regist-trigger">Create</a>
                            </div>
                        </div>
                    </div>
                    <div class="login-auth regist-auth d-none">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo login-logo">
                                <img src="<?= base_url() . 'assets/cms/images/app-img/lyandra_logo.svg'; ?>" alt="logo" />
                                <!-- <img src="../../images/logo.svg" alt="logo"> -->
                            </div>
                            <h4 class="pb-3">Register </h4>
                            <!-- <h6 class="fw-light pb-3">Sign in to continue.</h6> -->
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('auth/register'); ?>
                            <div class="form-group">
                                <label>Account</label>
                                <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Regiter</button>
                            </div>
                            <?php echo form_close(); ?>
                            <div class="text-center mt-4 fw-light">
                                Have account, <a href="javascript:void(0)" class="text-primary login-trigger">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>