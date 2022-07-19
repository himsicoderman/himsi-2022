<?= $this->extend('Layouts/Web/templates.php'); ?>

<?= $this->section('main-content'); ?>
<div class="grid-container">
    <div class="container left">
        <div class="content">
            <div class="title title-sp">
                <h1><?= $post["title"]; ?>.</h1>
                <p class="published">
                    Published on <?= $post["published"]; ?> by <?= $post["author"]; ?>
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
</div>
<?= $this->endSection(); ?>