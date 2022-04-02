<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="<?= base_url() . 'assets/cms/images/app-img/lyandra_logo.svg'; ?>" height="50px"/>
            <!-- <img src="<?= base_url() . 'assets/cms/images/app-img/lyandra_logo.svg'; ?>" /> -->
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#events">Events</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <?php if (isLogin()) : ?>
                    <li class="dropdown">
                        <a href="javascript:void(0)">
                            <span><?= getUserData()['name']; ?></span> <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a href="<?= base_url() . 'dashboard'; ?>">Dashboard</a></li>
                            <li><a href="<?= base_url() . 'auth/logout'; ?>">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a class="getstarted scrollto" href="<?= base_url() . 'auth'; ?>">Login / Register</a></li>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->