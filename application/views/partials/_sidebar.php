<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url() . 'dashboard'; ?>">
        <i class="mdi mdi-home-outline menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item nav-category">Tournament</li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url() . 'tournament'; ?>">
        <i class="mdi mdi-timetable menu-icon"></i>
        <span class="menu-title">Tournament List</span>
      </a>
    </li>

    <li class="nav-item nav-category">Administrator</li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url() . 'settings/about'; ?>">
        <i class="mdi mdi-domain menu-icon"></i>
        <span class="menu-title">About</span>
      </a>
    </li>
    <!-- <li class="nav-item" id="settings-trigger">
      <a class="nav-link" href="javascript:void(0)" >
        <i class="mdi mdi-shape menu-icon"></i>
        <span class="menu-title">Theme</span>
      </a>
    </li> -->

    <li class="nav-item nav-category">UI Elements</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-floor-plan"></i>
        <span class="menu-title">UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
        </ul>
      </div>
    </li>


  </ul>
</nav>