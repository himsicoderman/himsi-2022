<?= $this->extend('Layouts/Admin/templates.php'); ?>

<?= $this->section('main-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $post["title"]; ?></h1>
    </div>

    <div class="card shadow mb-4 p-5">
        <div>
            <img src="<?= base_url() ?>/Assets/img/uploads/<?= $post["thumbnail"] ?>" class="img-fluid" alt="Post1's Thumbnail" width="500"><br><br>
        </div>
        <h6>Published on <?= $post["published"]; ?> | <?= $post["author"]; ?></h6>
        <hr>
        <p class="text-justify" style="margin-top: -1rem;">
            <?= $post["content"]; ?>.
        </p>
    </div>

</div>
<?= $this->endSection(); ?>