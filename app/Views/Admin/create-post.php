<?= $this->extend('Layouts/Admin/templates.php'); ?>

<?= $this->section('main-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bold text-dark">CREATE NEW POST😵‍💫</h1>
    </div>

    <div class="card shadow mb-4 p-5 col-md-12">
        <form action="/admin/users/savePost" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control <?= ($validation->hasError('title')) ? "is-invalid" : ""; ?>" id="title" value="<?= old('title'); ?>" placeholder="Enter Title" name="title">
                <div class="invalid-feedback">
                    <?= $validation->getError('title'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control <?= ($validation->hasError('author')) ? "is-invalid" : ""; ?>" id="author" value="<?= old('author'); ?>" placeholder="Enter author" name="author">
                <div class="invalid-feedback">
                    <?= $validation->getError('author'); ?>
                </div>
            </div>
            <label for="thumbail">Thumbnail</label>
            <div class="col-md-4">
                <img src="/Assets/img/pojok-himsi/news.jpg" class="img-thumbnail img-preview" alt="">
            </div>
            <div class="custom-file">
                <input type="file" name="thumbnail" class="custom-file-input <?= ($validation->hasError('thumbnail')) ? "is-invalid" : ""; ?>" id="thumbnail" onchange="previewImg();">
                <div class="invalid-feedback">
                    <?= $validation->getError('thumbnail'); ?>
                </div>
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div><br><br>
            <div class="form-group">
                <label for="content">Triggers</label>
                <textarea name="triggers" class="form-control <?= ($validation->hasError('triggers')) ? "is-invalid" : ""; ?>" cols="30" rows="8"><?= old('triggers'); ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('content'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control summernote <?= ($validation->hasError('content')) ? "is-invalid" : ""; ?>" cols="30" rows="10"><?= old('content'); ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('content'); ?>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="create">Create New Post</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>