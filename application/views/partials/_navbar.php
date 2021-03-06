<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row" id="navbars">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <div class="me-3">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
        <span class="ti-menu"></span>
      </button>
    </div>
    <div>
      <a class="navbar-brand brand-logo" href="index.html">
        <img src="<?= base_url() . 'assets/cms/images/app-img/lyandra_logo.svg'; ?>" alt="logo" />
      </a>
      <a class="navbar-brand brand-logo-mini" href="index.html">
        <img src="<?= base_url() . 'assets/cms/images/app-img/lyandra_logo.svg'; ?>" alt="logo" />
      </a>
    </div>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <ul class="navbar-nav ms-auto p-0 d-flex align-items-center">
      <!-- Category -->
      <!-- <li class="nav-item dropdown d-none d-lg-block">
        <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          Select Category
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
          <a class="dropdown-item py-3">
            <p class="mb-0 font-weight-medium float-left">Select category</p>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">
                Bootstrap Bundle
              </p>
              <p class="fw-light small-text mb-0">
                This is a Bundle featuring 16 unique dashboards
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">
                Angular Bundle
              </p>
              <p class="fw-light small-text mb-0">
                Everything you???ll ever need for your Angular projects
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">
                VUE Bundle
              </p>
              <p class="fw-light small-text mb-0">
                Bundle of 6 Premium Vue Admin Dashboard
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">
                React Bundle
              </p>
              <p class="fw-light small-text mb-0">
                Bundle of 8 Premium React Admin Dashboard
              </p>
            </div>
          </a>
        </div>
      </li> -->

      <!-- Date -->
      <!-- <li class="nav-item d-none d-lg-block">
        <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
          <span class="input-group-addon input-group-prepend border-right">
            <span class="icon-calendar input-group-text calendar-icon"></span>
          </span>
          <input type="text" class="form-control" />
        </div>
      </li> -->

      <!-- Notification -->
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator click-notif" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="icon-bell"></i>
          <div class="notification-bell d-none"></div>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
          <a class="dropdown-item py-3 border-bottom">
            <p class="mb-0 font-weight-medium float-left">
              You have <span class="notif-count"></span> new notifications
            </p>
          </a>
          <div class="notif-list">
          </div>
        </div>
      </li>

      <!-- Search -->
      <!-- <li class="nav-item">
        <form class="search-form d-flex align-items-center" action="#">
          <i class="ti-search"></i>
          <input type="search" class="form-control" placeholder="Search Here" title="Search here" />
        </form>
      </li> -->


      <li class="nav-item dropdown d-none d-lg-block user-dropdown">
        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <?php if (isSuperAdmin()) : ?>
            <img class="img-xs rounded-circle" src="<?= base_url() . 'uploads/profile/default.png'; ?>" alt="logo" />
          <?php else : ?>
            <img class="img-xs rounded-circle" src="<?= base_url() . 'uploads/profile/' . loadProfilePhoto(getUserData()['user_id'], getUserAccount()['photo']); ?>" alt="Profile image">
          <?php endif; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown " aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center pt-3">
            <?php if (isSuperAdmin()) : ?>
              <img class="img-lg rounded-2" src="<?= base_url() . 'uploads/profile/default.png'; ?>" width="80px" alt="logo" />
            <?php else : ?>
              <img class="img-lg rounded-2" src="<?= base_url() . 'uploads/profile/' . loadProfilePhoto(getUserData()['user_id'], getUserAccount()['photo']); ?>" alt="Profile image">
            <?php endif; ?>

            <p class="mt-3 font-weight-semibold">
              <?= getUserData()['name']; ?> <br>
              <span class="fw-light text-muted mb-0"><?= getUserData()['username']; ?></span>
            </p>
          </div>
          <?php if (isUser()) : ?>
            <a class="dropdown-item" href="<?= base_url() . ''; ?>">
              <i class="dropdown-item-icon mdi mdi-home-outline text-secondary me-3 mdi-18px"></i>
              <strong>Homepage </strong>
            </a>
            <a class="dropdown-item" href="<?= base_url() . 'profile'; ?>">
              <i class="dropdown-item-icon mdi mdi-account-outline text-secondary me-3 mdi-18px"></i>
              <strong>My Profile </strong>
            </a>
          <?php endif; ?>
          <a href="<?php echo base_url('auth/logout'); ?>" class="dropdown-item">
            <i class="dropdown-item-icon mdi mdi-power text-secondary me-3 mdi-18px"></i>
            <strong>Sign Out</strong>
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center pt-2" type="button" data-bs-toggle="offcanvas">
      <i class="mdi mdi-menu mdi-24px"></i>
    </button>
  </div>
</nav>