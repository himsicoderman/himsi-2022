    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <!-- =================== NAV IMAGE ==================== -->
            <a href="<?= base_url(); ?>" class="nav__logo">
                <img src="<?= base_url(); ?>/Assets/img/himsi-unsri.png" width="130" alt="HIMSI & Universitas Sriwijaya LOGO" />
            </a>

            <!-- ==================== NAV MENU ==================== -->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <!-- ==================== HOME ==================== -->
                    <li class="nav__item">
                        <a href="<?= base_url(); ?>" class="nav__link <?= $nav["active"] === "Home" ? "active-link" : ""; ?>">Home</a>
                    </li>

                    <!-- ================== ABOUT US ================== -->
                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link dropdown__link <?= $nav["active"] === "About Us" ? "active-link" : ""; ?>">About Us <i class="bx bx-chevron-down dropdown__icon"></i></a>

                        <ul class="dropdown__menu">
                            <li class="dropdown__item">
                                <a href="<?= base_url(); ?>/about/logo" class="nav__link <?= $title === "Logo" ? "active-link-dropdown" : ""; ?>">Logo</a>
                            </li>
                            <li class="dropdown__item">
                                <a href="<?= base_url(); ?>/about/visi_misi" class="nav__link <?= $title === "Visi Misi" ? "active-link-dropdown" : ""; ?>">Visi & Misi</a>
                            </li>
                            <li class="dropdown__item">
                                <a href="<?= base_url(); ?>/about/proker" class="nav__link <?= $title === "Proker" ? "active-link-dropdown" : ""; ?>">Program Kerja</a>
                            </li>
                            <li class="dropdown__item">
                                <a href="<?= base_url(); ?>/about/struktur_organisasi" class="nav__link <?= $title === "Struktur Organisasi" ? "active-link-dropdown" : ""; ?>">Struktur Organisasi</a>
                            </li>
                        </ul>
                    </li>

                    <!-- ================ PROFILE DINAS =============== -->
                    <li class="nav__item dropdown">
                        <a href="#" class="nav__link dropdown__link <?= $nav["active"] === "Profile" ? "active-link" : ""; ?>">Profile <i class="bx bx-chevron-down dropdown__icon"></i></a>

                        <ul class="dropdown__menu">
                            <?php foreach ($nav["profile-link"] as $dinas) : ?>
                                <li class="dropdown__item">
                                    <a href="<?= base_url(); ?>/profile/<?= $dinas["dinasID"]; ?>/<?= $dinas["singkatan"]; ?>" class="nav__link <?= $title === $dinas["singkatan"] ? "active-link-dropdown" : ""; ?>"><?= $dinas["nama_dinas"]; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <!-- ================= POJOK HIMSI ================ -->
                    <li class="nav__item">
                        <a href="<?= base_url(); ?>/pojok-himsi" class="nav__link <?= $nav["active"] === "Pojok Himsi" ? "active-link" : ""; ?>">Pojok HIMSI</a>
                    </li>

                    <!-- =================== AKADEMIK ================= -->
                    <li class="nav__item">
                        <a href="<?= base_url(); ?>/akademik" class="nav__link <?= $nav["active"] === "Akademik" ? "active-link" : ""; ?>">Akademik</a>
                    </li>

                    <!-- ==================== IMABA =================== -->
                    <li class="nav__item">
                        <a href="<?= base_url(); ?>/imaba" class="nav__link <?= $nav["active"] === "IMaba" ? "active-link" : ""; ?>">iMaba</a>
                    </li>

                    <!-- ================== CONTACT US ================ -->
                    <li class="nav__item">
                        <a href="<?= base_url(); ?>/#contact" class="nav__link <?= $nav["active"] === "Contact" ? "active-link" : ""; ?>">Contact Us</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <!-- ================== NAV BUTTONS =================== -->
            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="change-theme" id="theme-button"></i>
                <!-- ri-moon-line -->

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>