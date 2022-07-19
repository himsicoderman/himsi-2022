<?= $this->extend('Layouts/Web/templates.php'); ?>

<?= $this->section('main-content'); ?>
<div class="grid-container">
    <div class="container left">
        <div class="content">
            <div class="title title-sp">
                <h1><?= $post["title"]; ?>.</h1>
                <p class="published">
                    <a href="/<?= strtolower($post["category"]); ?>"><?= $post["category"]; ?></a> | Published on <?= $post["published"]; ?> by <?= $post["author"]; ?>
                </p>
            </div>

            <div class="image">
                <img src="/Assets/img/uploads/<?= $post["thumbnail"] ?>" alt="">
            </div>

            <div class="content">
                <p>
                    <?= $post["content"]; ?>
                </p>
            </div>
        </div>
    </div>

    <div class="container right">
        <div class="back">
            <div class="grid-container-back">
                <div class="container-back">
                    <a href="/akademik">
                        <div class="back-btn">
                            <h2>Kembali</h2>
                        </div>
                    </a>
                </div>
                <div class="container-back1"></div>
            </div>
        </div>
        <div class="grid-container-right">
            <?php

            use App\Helpers\Helpers;

            foreach ($newest as $post) : ?>
                <div class="blog-box-m">
                    <img src="/Assets/img/uploads/<?= $post["thumbnail"] ?>" class="new-thumb">
                    <div class="content--card">
                        <p>
                            <a href="/<?= strtolower($post["category"]); ?>/<?= $post["slug"]; ?>" class="new-title">
                                <?= $post["title"];; ?>
                            </a>
                        </p>
                        <!-- <p>
                            <?= Helpers::excerpt($post["triggers"], 10); ?>
                        </p> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>