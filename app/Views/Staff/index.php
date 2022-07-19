<?= $this->extend('Layouts/Web/templates.php'); ?>

<?= $this->section('main-content'); ?>
<section class="about section container" id="about">
    <h1 class="staff__title"><?= $staff["nama"]; ?></h1>
    <h2 class="staff__jabatan"> <?= $staff["jabatan"]; ?> <?= $staff["jabatan"] === "Staff" ? "Dinas" : ""; ?> <?= $staff["jabatan"] === "Deputi" ? "Dinas" : ""; ?> <?= $staff["dinas"] === "INTI" ? "HIMSI Fasilkom UNSRI 2022" : ucwords(strtolower($staff["dinas"])); ?> </h2>
    <span class="border"></span>
    <div class="about__container grid">
        <img src="/assets/img/staffs/<?= $staff["dinas"]; ?>/<?= $staff["picture"]; ?>" alt="" class="about__img" />

        <div class="about__data">
            <div class="about__details">
                <p class="about__details-description">
                    <i class="ri-calendar-line about__details-icon"></i>
                    <?= $staff["TTL"]; ?>
                </p>
                <p class="about__details-description">
                    <i class="ri-map-pin-line about__details-icon"></i>
                    <?= $staff["alamat"]; ?>
                </p>
                <p class="about__details-description">
                    <i class="ri-contacts-line about__details-icon"></i>
                    <?= $staff["hobi"]; ?>
                </p>
                <p class="about__details-description">
                    <i class="ri-instagram-line about__details-icon"></i>
                    <a href="https:/instagram.com/<?= $staff["instagram"] ?>" target="_blank"><?= $staff["nama"] ?></a>
                </p>
                <p class="about__details-description">
                    <i class="ri-mail-send-line about__details-icon"></i>
                    <a href="mailto:<?= $staff["email"] ?>" target="_blank"><?= $staff["email"] ?></a>
                </p>
                <?php if ($staff["jabatan"] === "Staff" && $staff["divisi"] !== "") : ?>
                    <p class="about__details-description">
                    <p class="about__details-icon">Divisi</p>
                    >> <?= $staff["divisi"]; ?>
                    </p>
                <?php endif; ?>
                <p class="about__details-description" style="margin-top: -25px;">
                <p class="about__details-icon">Kesan & Pesan</p>
                >> <?= $staff["kesan_pesan"]; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>