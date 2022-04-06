<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">

    <li class="nav-item">
      <a class="nav-link fw-bold" href="<?= base_url() . 'dashboard'; ?>">
        <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item nav-category "><span class="tracking-widest">Tournament</span></li>
    <li class="nav-item">
      <a class="nav-link fw-bold" href="<?= base_url() . 'tournament'; ?>">
        <i class="mdi mdi-timetable menu-icon"></i>
        <span class="menu-title">Tournament List</span>
      </a>
    </li>



    <?php if (isSuperAdmin()) : ?>
      <li class="nav-item nav-category"><span class="tracking-widest">Administrator</span></li>
      <li class="nav-item">
        <a class="nav-link fw-bold" href="<?= base_url() . 'user'; ?>">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">User List</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link fw-bold" href="<?= base_url() . 'contingent'; ?>">
          <i class="mdi mdi-account-group menu-icon"></i>
          <span class="menu-title">Contingent</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link fw-bold" href="<?= base_url() . 'settings/about'; ?>">
          <i class="mdi mdi-domain menu-icon"></i>
          <span class="menu-title">About</span>
        </a>
      </li>
    <?php endif; ?>

    <!-- <li class="nav-item" id="settings-trigger">
      <a class="nav-link fw-bold" href="javascript:void(0)" >
        <i class="mdi mdi-shape menu-icon"></i>
        <span class="menu-title">Theme</span>
      </a>
    </li> -->

    <li class="nav-item nav-category">UI Elements</li>
    <li class="nav-item">
      <a class="nav-link fw-bold" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link fw-bold" href="pages/ui-features/buttons.html">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link fw-bold" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link fw-bold" href="pages/ui-features/typography.html">Typography</a></li>
        </ul>
      </div>
    </li>


  </ul>
</nav>