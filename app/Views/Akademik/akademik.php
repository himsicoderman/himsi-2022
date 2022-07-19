<?= $this->extend('Layouts/Web/templates.php'); ?>

<?= $this->section('main-content'); ?>

<section class="ekspresi__wrapper">
    <!-- Header -->
    <section class="top__section" style="background-image: url(/Assets/img/akademik/<?= $title; ?>.jpg);">
        <section class="ekspresi__header">
            <h1 class="home__title" style="color: #F4F4F4; text-align: center; font-size: 5rem;"><?= $title; ?></h1>
            <a href="#content-aka" style="color: #F4F4F4; text-align: center;" class="venobox">
                <button>Explore <i class="ri-arrow-right-down-line button__icon"></i></button>
            </a>
        </section>
    </section>
</section>

<section class="content" id="content-aka">
    <div class="grid-container">
        <?php

        use App\Helpers\Helpers;

        foreach ($posts as $post) : ?>

            <div class="container">
                <div class="card">
                    <img src="/Assets/img/uploads/<?= $post["thumbnail"]; ?>" alt="">
                    <div class="desc">
                        <div class="title">
                            <p class="title-aka">
                                <?= $post["title"]; ?> | <span class="category-aka"><?= $post["category"]; ?></span> <br>
                            </p>
                            <p class="content-description">
                                <?= Helpers::excerpt($post["triggers"]); ?>
                            </p>
                        </div>
                        <div class="btn-container">
                            <div class="btn">
                                <a href="/<?= strtolower($post["category"]); ?>/<?= $post["slug"]; ?>">
                                    <p class="xsamll">Lihat Detail</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>


<?= $this->endSection(); ?>