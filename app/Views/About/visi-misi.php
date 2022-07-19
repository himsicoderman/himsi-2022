<?= $this->extend('Layouts/Web/templates.php'); ?>

<?= $this->section('main-content'); ?>
<section class="post section__post bd-container__post swiper" id="post">
    <h1 class="features-title">
        VISI & MISI
        HIMSI FASILKOM UNSRI
    </h1>
    <span class="border"></span>
    <div class="post__container bd-grid swiper-slide">
        <div class="post__data visi-misi">
            <p class="post__description">
            <div class="col-md-6 my-1">
                <h2 class="text-center fw-bold judulvisi">VISI</h2>
                <p class="p-custom">Menjadikan HIMSI sebagai himpunan yang berkualitas dengan berlandaskan asas kekeluargaan dan profesionalitas demi meningkatkan kapabilitas dan kontribusi HIMSI untuk Jurusan Sistem Informasi.</p>
            </div>
            <br>
            <div class="col-md-6 my-1">
                <h2 class="text-center fw-bold judulmisi">MISI</h2>
                <ol>
                    <li class="li-custom">Mendorong kader-kader HIMSI untuk terus berprogresif dengan memaksimalkan dan mengoptimalkan program kerja yang dapat memberikan kebermanfaatan kepada HIMSI dan Jurusan Sistem Informasi.</li>
                    <li class="li-custom">Membangun rasa kekeluargaan dan kebersamaan serta solidaritas antar anggota HIMSI dan Jurusan Sistem Informasi.</li>
                    <li class="li-custom">Mewadahi dan menyalurkan aspirasi seluruh mahasiswa Sistem Informasi demi kemajuan dan kebaikan bersama.</li>
                    <li class="li-custom">Menghadirkan kegiatan yang dapat mengoptimalkan potensi dan prestasi mahasiswa Sistem Informasi baik secara akademik maupun non akademik.</li>
                </ol>
            </div>
            </p>
        </div>

        <img src="/Assets/img/visi-misi.png" alt="" class="visi-misi_img" />
    </div>
</section>
<?= $this->endSection(); ?>