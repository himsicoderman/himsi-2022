<?= $this->extend('Layouts/Web/templates.php'); ?>

<?= $this->section('main-content'); ?>
<div class="ekspresi__wrapper">
    <!-- Header -->
    <section class="top__section" style="background-image: url(/Assets/img/ekspresi/ekspresi.png);">
        <section class="ekspresi__header">
            <h1 class="home__title" style="color: #F4F4F4;">EKSPRESI</h1>
            <p><b>Ekspresi</b> (Eksplor Bareng HIMSI) adalah podcast official yang dikelola oleh Dinas Media dan Informasi HIMSI, bertujuan untuk menyebarkan informasi ke khalayak luar dengan mengundang narasumber dari dalam maupun luar HIMSI yang ekspert dibidangnya.</p>
            <a class="venobox animated" data-autoplay="true" data-vbtype="video" href="<?= $posts[0]["link"]; ?>" data-gall="myGallery"><button>Watch Now</button></a>
        </section>
    </section><!-- End Header Section-->
    <!-- Content -->
    <section class="content__section">
        <div class="playlist__one">
            <h4 class="playlist__title">ORIGINAL SERIES EKSPRESI</h4>
            <div class="videos">
                <?php foreach ($posts as $post) : ?>
                    <div class="video" style="background-image: url(/Assets/img/ekspresi/<?= $post["thumbnail"]; ?>)">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="<?= $post["link"] ?>" data-gall="myGallery"><i class="fas fa-play-circle"></i></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="playlist__two">
            <h4 class="playlist__title">SI FEST 2021 SERIES PODCAST</h4>
            <div class="videos">
                <?php foreach ($posts_sifest as $post) : ?>
                    <div class="video" style="background-image: url(/Assets/img/ekspresi/<?= $post["thumbnail"]; ?>)">
                        <a class="venobox" data-autoplay="true" data-vbtype="video" href="<?= $post["link"] ?>" data-gall="myGallery"><i class="fas fa-play-circle"></i></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Content Section -->
</div><!-- End Wrapper -->
<?= $this->endSection(); ?>