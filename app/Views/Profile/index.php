<?= $this->extend('Layouts/Web/templates.php'); ?>

<?= $this->section('main-content'); ?>
<section class="banner_image section">
    <img src="/Assets/img/banners/desktop/<?= $dinas["banner_pict"]; ?>" alt="" class="banner_dinas desktop-banner" width="80%">
    <img src="/Assets/img/banners/mobile/<?= $dinas["banner_pict"]; ?>" alt="" class="banner_dinas mobile-banner" width="80%">
    <div class="profile__header">
        <h1 style="text-align: center; color: #FFF; font-weight: bold;"><?= strtoupper($dinas["nama_dinas"]); ?></h1>
        <!-- <p style="text-align: center; font-size: 1rem; color: #FFF;"><?= strtoupper($dinas["nama_dinas"]); ?></p> -->
    </div>
</section>

<section class="post section__post bd-container__post about__section" id="post">
    <div class="post__container bd-grid">
        <div class="post__data">
            <h1 class="post__initial">
                Tentang Kami
            </h1>
            <span class="border"></span>
            <p class="post__description">
                <?= $dinas["deskripsi"]; ?>
            </p>
        </div>

        <div class="dinas-logo">
            <img src="/Assets/img/logo-dinas/<?= $dinas["banner_pict"] ?>" alt="" class="dinas__logo" />
        </div>
    </div>
</section>

<?php if ($dinas["has_divisi"] == 1) : ?>

    <section class="steps section container">
        <div class="steps__bg">
            <h2 class="section__title-center steps__title">
                DIVISI<br />
                DINAS <?= $dinas["singkatan"]; ?>
            </h2>

            <div class="steps__container divisi">
                <?php $number = 1; ?>
                <?php foreach ($divisi as $data) : ?>
                    <div class="steps__card card-<?= $number ?> divisi-card">
                        <img class="img-profile-staff" src="/Assets/img/logo-divisi/<?= $data["logo"]; ?>" width="100" alt="">
                        <h3 class="steps__card-title">Divisi <?= $data["nama_divisi"]; ?></h3>
                        <p class="steps__card-description" style="text-align: justify;">
                            <?= $data["deskripsi"]; ?>
                        </p>
                    </div>
                    <?php $number++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php if ($dinas["singkatan"] !== "INTI") : ?>
    <section class="struktur">
        <section class="kadin__section">
            <h1>Kepala Dinas</h1>
            <span class="border"></span>
            <div class="staff__section">
                <div class="ps">
                    <a href="/staff/<?= $kadin["nama"]; ?>">
                        <img class="img-profile-staff" src="/Assets/img/staffs/<?= $kadin["dinas"]; ?>/<?= $kadin["picture"]; ?>" alt="" width="150">
                    </a>
                    <p><?= $kadin["nama"]; ?></p>
                    <p style="font-weight: bold;">Kepala Dinas <?= $kadin["dinas"]; ?></p>
                </div>
            </div>
        </section>

        <section class="kadin__section">
            <h1>Deputi</h1>
            <span class="border"></span>
            <div class="staff__section">
                <div class="ps">
                    <a href="/staff/<?= $deputi["nama"]; ?>">
                        <img class="img-profile-staff" src="/Assets/img/staffs/<?= $deputi["dinas"]; ?>/<?= $deputi["picture"]; ?>" alt="" width="150">
                    </a>
                    <p><?= $deputi["nama"]; ?></p>
                    <p style="font-weight: bold;">Deputi Dinas <?= $deputi["dinas"]; ?></p>
                </div>
            </div>
        </section>

        <section class="kadin__section">
            <?php if ($dinas["has_divisi"] == 1) { ?>
                <h1>Kepala Divisi</h1>
                <span class="border"></span>
                <div class="kadiv">
                    <?php foreach ($kadiv as $data) : ?>
                        <div class="staff__section">
                            <div class="ps">
                                <a href="/staff/<?= $data["nama"]; ?>">
                                    <img class="img-profile-staff" src="/Assets/img/staffs/<?= $data["dinas"]; ?>/<?= $data["picture"]; ?>" alt="" width="150">
                                </a>
                                <p><?= $data["nama"]; ?></p>
                                <p style="font-weight: bold;">Kepala Divisi <?= $data["divisi"]; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php } else if (is_null($dinas["has_divisi"])) { ?>
                <h1>Staff Khusus</h1>
                <span class="border"></span>
                <div class="kadiv">
                    <div class="staff__section">
                        <div class="ps">
                            <a href="/staff/<?= $staffKhusus["nama"]; ?>">
                                <img class="img-profile-staff" src="/Assets/img/staffs/<?= $staffKhusus["dinas"]; ?>/<?= $staffKhusus["picture"]; ?>" alt="" width="150">
                            </a>
                            <p><?= $staffKhusus["nama"]; ?></p>
                            <p style="font-weight: bold;">Staff Khusus Dinas <?= $staffKhusus["dinas"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </section>

        <section class="team__section">
            <h1>Staffs</h1>
            <span class="border"></span>
            <div class="staff__section">
                <?php foreach ($staffs as $staff) : ?>
                    <div class="ps">
                        <a href="/staff/<?= $staff["nama"]; ?>">
                            <img class="img-profile-staff" src="/Assets/img/staffs/<?= $staff["dinas"]; ?>/<?= $staff["picture"]; ?>" alt="" width="150">
                        </a>
                        <p><?= ucwords(strtolower($staff["nama"])); ?></p>
                        <p style="font-weight: bold;"><?= $staff["jabatan"]; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </section>

    <!--==================== STEPS ====================-->
    <section class="steps section container">
        <div class="steps__bg">
            <h2 class="section__title-center steps__title">
                PROGRAM KERJA<br />
                DINAS <?= $dinas["singkatan"]; ?>
            </h2>

            <div class="steps__container">
                <?php $number = 1; ?>
                <?php foreach ($prokerDinas as $data) : ?>
                    <div class="steps__card card-<?= $number ?>">
                        <div class="steps__card-number"><?= $number < 10 ? "0" . $number : $number; ?></div>
                        <h3 class="steps__card-title"><?= $data["nama_proker"]; ?></h3>
                        <p class="steps__card-description" style="text-align: justify;">
                            <?= $data["deskripsi"]; ?>
                        </p>
                    </div>
                    <?php $number++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php else : ?>
    <section class="struktur">
        <?php foreach ($bupati as $data) : ?>
            <section class="kadin__section">
                <h1><?= $data["jabatan"]; ?></h1>
                <span class="border"></span>

                <div class="staff__section">
                    <div class="ps">
                        <a href="/staff/<?= $data["nama"]; ?>">
                            <img class="img-profile-staff" src="/Assets/img/staffs/<?= $data["dinas"]; ?>/<?= $data["picture"]; ?>" alt="" width="150">
                        </a>
                        <p><?= $data["nama"]; ?></p>
                        <p style="font-weight: bold;"><?= $data["jabatan"]; ?> HIMSI Fasilkom UNSRI 2022</p>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>

        <section class="kadin__section">
            <h1>Sekretaris Umum</h1>
            <span class="border"></span>
            <div class="kadiv">
                <?php foreach ($sekretaris as $data) : ?>
                    <div class="staff__section">
                        <div class="ps">
                            <a href="/staff/<?= $data["nama"]; ?>">
                                <img class="img-profile-staff" src="/Assets/img/staffs/<?= $data["dinas"]; ?>/<?= $data["picture"]; ?>" alt="" width="150">
                            </a>
                            <p><?= $data["nama"]; ?></p>
                            <p style="font-weight: bold;"><?= $data["jabatan"]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="kadin__section">
            <h1>Bendahara Umum</h1>
            <span class="border"></span>
            <div class="kadiv">
                <?php foreach ($bendahara as $data) : ?>
                    <div class="staff__section">
                        <div class="ps">
                            <a href="/staff/<?= $data["nama"]; ?>">
                                <img class="img-profile-staff" src="/Assets/img/staffs/<?= $data["dinas"]; ?>/<?= $data["picture"]; ?>" alt="" width="150">
                            </a>
                            <p><?= $data["nama"]; ?></p>
                            <p style="font-weight: bold;"><?= $data["jabatan"]; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    </section>

<?php endif; ?>

<?php if ($dinas["singkatan"] == "BISTRA") : ?>
    <!--==================== INSTAGRAM ====================-->
    <section class="about section container" id="about">
        <div class="about__container grid">
            <img src="/Assets/img/bistra-ig.png" alt="" class="about__img follow-ig" width="350" />

            <div class="about__data" style="align-self: center;">
                <h2 class="section__title about__title">
                    Follow Our Instagram<br />
                    at @himsi.store
                </h2>

                <a href="https://www.instagram.com/himsi.store/" class="button--link button--flex">
                    Follow Us <i class="ri-arrow-right-down-line button__icon"></i>
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($dinas["singkatan"] == "PMB") : ?>
    <!--==================== INSTAGRAM ====================-->
    <section class="about section container" id="about">
        <div class="about__container grid">
            <img src="/Assets/img/pmb-ig.png" alt="" class="about__img follow-ig" width="350" />

            <div class="about__data" style="align-self: center;">
                <h2 class="section__title about__title">
                    Follow Our Instagram<br />
                    at @himsi.pmb
                </h2>

                <a href="https://www.instagram.com/himsi.pmb/" class="button--link button--flex">
                    Follow Us <i class="ri-arrow-right-down-line button__icon"></i>
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>
<?= $this->endSection(); ?>