<!-- <div class="container-fluid">
        <div class="container auth px-0">
            <div class="row">
                <div class="col-lg-12 py-5 mx-auto d-flex justify-content-between align-items-center">
                    <a href="<?= base_url() . ''; ?>" class="link-primary d-flex flex-row align-items-center text-decoration-none">
                        <i class="mdi mdi-arrow-left m-0 p-0"></i>
                        <div class="h4 m-0 p-0">&nbsp; Back to Homepage</div>
                    </a>
                    <div class="brand-logo login-logo py-0 my-0">
                        <img src="<?= base_url() . 'assets/cms/images/app-img/lyandra_logo.svg'; ?>" alt="logo" />
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<div class="">
    <div class="d-flex align-items-center px-0">
        <div class="row w-100 mx-0 auth" id="auth-forms">
            <div class="col-md-6 auth-bg d-md-block d-none"></div>
            <div class="col-md-6 ">
                <div class="container px-md-5  py-2 py-md-5 auth-form">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-9 col-12 mb-5 mx-auto d-flex justify-content-between align-items-center">
                            <a href="<?= base_url() . ''; ?>" class="link-primary d-flex flex-row align-items-center text-decoration-none">
                                <i class="mdi mdi-arrow-left m-0 p-0"></i>
                                <div class="h4 m-0 p-0">&nbsp; Back to Homepage</div>
                            </a>
                            <div class="brand-logo login-logo py-0 my-0">
                                <img src="<?= base_url() . 'assets/cms/images/app-img/lyandra_logo.svg'; ?>" alt="logo" />
                            </div>
                        </div>
                        <div class="col-md-9 col-12">
                            <?php $this->load->view('partials/_alerts'); ?>
                            <div class="login-auth">
                                <div class="auth-form-light text-left">

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
                                        <button type="submit" class="btn btn-primary btn-icon-text fw-bold d-flex align-items-center">
                                            <i class="mdi mdi-login-variant btn-icon-prepend"></i>
                                            <span class="tracking-widest">SIGN IN</span>
                                        </button>
                                    </div>
                                    <?php echo form_close(); ?>
                                    <!-- <div class="text-center mt-4 fw-light">
                                Don't have an account? <a href="javascript:void(0)" class="text-primary regist-trigger">Create</a>
                            </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-12 justify-content-center stretch-card  py-2 my-5">
                            <div class="divider"> <span> OR </span> </div>
                        </div>
                        <div class="col-md-9 col-12 d-inline-flex justify-content-end">
                            <div class="login-auth w-100">
                                <div class="auth-form-light text-left">
                                    <h4 class="pb-3">Register </h4>
                                    <!-- <h6 class="fw-light pb-3">Sign in to continue.</h6> -->
                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open('auth/register'); ?>
                                    <div class="form-group mb-2">
                                        <label>Account</label>
                                        <input type="text" class="form-control form-control" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" class="form-control form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control form-control" name="name" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="mt-3 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-dark btn-icon-text fw-bold d-flex align-items-center">
                                            <i class="mdi mdi-login-variant btn-icon-prepend"></i>
                                            <span class="tracking-widest">REGISTER</span>
                                        </button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>