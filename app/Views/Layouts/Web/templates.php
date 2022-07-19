<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ==================== META ==================== -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no" />
    <meta name="description" content="Website HIMSI Fasilkom UNSRI">
    <meta name="keywords" content="UNSRI, HIMSI, Sistem Informasi, Himpunan Mahasiswa, Program Kerja">
    <meta name="author" content="RISTEK PTI HIMSI Fasilkom UNSRI">

    <!-- =================== FAVICON ================== -->
    <link rel="icon" href="<?= base_url(); ?>/Assets/img/himsi-logo.png" type="image/png" />

    <!-- =================== UNICONS ================== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <!-- ================= FONT AWESOME =============== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- =================== BOX ICONS ================ -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

    <!-- ================== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- ====================== CSS =================== -->
    <?php if ($nav["active"] === "Profile") : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/profiles.css" />
    <?php endif; ?>
    <?php if ($nav["active"] === "Staff") : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/staff.css" />
    <?php endif; ?>
    <?php if ($nav["active"] === "Ekspresi" || $nav["active"] === "Pojok HIMSI" || $nav["active"] === "Akademik") : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/ekspresi.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/venobox.css" media="screen">
    <?php endif; ?>
    <?php if ($title === "Proker") : ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php endif; ?>

    <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/styles.css" />

    <?php if ($nav["active"] === "Pojok HIMSI") : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/pojok-himsi.css" />
    <?php endif; ?>

    <?php if ($nav["active"] === "Akademik") : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/self-page.css" />
    <?php endif; ?>

    <?php if ($nav["active"] === "Pojok HIMSI") : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/self-page-post.css" />
    <?php endif; ?>

    <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/preloader.css" />
    <?php if ($nav["active"] === "Akademik") : ?>
        <link rel="stylesheet" href="<?= base_url(); ?>/Assets/css/akademik.css" />
    <?php endif; ?>

    <!-- ===================== TITLE ================== -->
    <title> <?= $title; ?> | HIMSI FASILKOM UNSRI </title>

</head>

<body>

    <?= $this->include('Layouts/Web/pre-loader.php'); ?>

    <?= $this->include('Layouts/Web/navbar.php'); ?>

    <main class="main">

        <?= $this->renderSection('main-content'); ?>

    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="<?= base_url(); ?>/" class="footer__logo">
                    <img src="<?= base_url(); ?>/Assets/img/himsi-unsri.png" width="130" alt="HIMSI & Universitas Sriwijaya LOGO" />
                    <!-- <i class="ri-leaf-line footer__logo-icon"></i> Plantex -->
                </a>

                <h3 class="footer__title">
                    HIMSI Fasilkom <br />
                    Universitas Sriwijaya
                </h3>

                <div class="footer__subscribe">
                    <input type="text" placeholder="Enter your experience" class="footer__input" />

                    <button class="button button--flex footer__button">
                        Send
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our Address</h3>

                <ul class="footer__data">
                    <li class="footer__information">Gedung F Lantai 1 Ruang F1.2 </li>
                    <li class="footer__information">Fakultas Ilmu Komputer</li>
                    <li class="footer__information">Universitas Sriwijaya</li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Contact Us</h3>

                <ul class="footer__data">
                    <li class="footer__information"><a href="mailto:himsifasilkomunsri@gmail.com" class="footer__social-link">himsifasilkomunsri@gmail.com</a></li>

                    <div class="footer__social">
                        <a href="https://www.youtube.com/channel/UCmyzeEb4Q1FCrGQ2kxeIiLQ" class="footer__social-link">
                            <i class="ri-youtube-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/himsiunsri/" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://page.line.me/?accountId=himsiunsri" class="footer__social-link">
                            <i class="ri-line-fill"></i>
                        </a>
                    </div>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Navigations</h3>

                <ul class="footer__data">
                    <li class="footer__information">
                        <a href="<?= base_url(); ?>/" class="footer__social-link">
                            Home
                        </a>
                    </li>
                    <li class="footer__information">
                        <a href="<?= base_url(); ?>/about/logo" class="footer__social-link">
                            About Us
                        </a>
                    </li>
                    <li class="footer__information">
                        <a href="<?= base_url(); ?>/pojok_himsi" class="footer__social-link">
                            Pojok HIMSI
                        </a>
                    </li>
                    <li class="footer__information">
                        <a href="<?= base_url(); ?>/akademik" class="footer__social-link">
                            Akademik
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <p class="footer__copy">Copyright © 2022 All Rights Reserved by DINAS RISTEK. </p>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>

    <?php if ($title === "Proker") : ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php endif; ?>

    <?php if ($nav["active"] === "Ekspresi") : ?>
        <script src="<?= base_url(); ?>/Assets/vendor/jquery/jquery.3.4.1.min.js"></script>
        <script src="<?= base_url(); ?>/Assets/js/venobox.js"></script>

        <script>
            $(document).ready(function() {
                $('.venobox').venobox({
                    closeColor: '#f4f4f4',
                    spinColor: '#f4f4f4',
                    arrowsColor: '#f4f4f4',
                    closeBackground: '#17191D',
                    overlayColor: 'rgba(23,25,29,0.8)'
                });
            });
        </script>
    <?php endif; ?>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="<?= base_url(); ?>/Assets/js/scrollreveal.min.js"></script>

    <!-- ==================== SWIPER JS ==================== -->
    <script src="<?= base_url(); ?>/Assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="<?= base_url(); ?>/Assets/js/main.js"></script>
</body>

</html>