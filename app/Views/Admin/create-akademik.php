<?= $this->extend('Layouts/Admin/templates.php'); ?>

<?= $this->section('main-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bold text-dark">CREATE NEW POST</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 p-5 col-md-12">
        <form action="/admin/users/savePostAka" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control <?= ($validation->hasError('title')) ? "is-invalid" : ""; ?>" value="<?= old('title'); ?>" id="title" placeholder="Enter Title" name="title">
                <div class="invalid-feedback">
                    <?= $validation->getError('title'); ?>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="category">Category</label>
                    <select class="custom-select <?= ($validation->hasError('category')) ? "is-invalid" : ""; ?>" name="category" id="inputGroupSelect01">
                        <option value="Beasiswa">Beasiswa</option>
                        <option value="Lomba">Lomba</option>
                        <option value="Webinar">Webinar</option>
                        <option value="Volunteer">Volunteer</option>
                        <div class="invalid-feedback">
                            <?= $validation->getError('category'); ?>
                        </div>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="author">Author</label>
                    <input type="text" class="form-control <?= ($validation->hasError('author')) ? "is-invalid" : ""; ?>" id="author" placeholder="Enter author" value="<?= old('author'); ?>" name="author">
                    <div class="invalid-feedback">
                        <?= $validation->getError('author'); ?>
                    </div>
                </div>
            </div>
            <label for="thumbail">Thumbnail</label><br>
            <div class="col-md-4">
                <img src="/Assets/img/pojok-himsi/news.jpg" class="img-thumbnail img-preview" alt="">
            </div>
            <div class="custom-file">
                <input type="file" name="thumbnail" class="custom-file-input <?= ($validation->hasError('thumbnail')) ? "is-invalid" : ""; ?>" id="thumbnail" onchange="previewImg();">
                <div class="invalid-feedback">
                    <?= $validation->getError('thumbnail'); ?>
                </div>
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <div class="form-group">
                <label for="content">Triggers</label>
                <textarea name="triggers" class="form-control <?= ($validation->hasError('triggers')) ? "is-invalid" : ""; ?>" cols="30" rows="8"><?= old('triggers'); ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('content'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control summernote <?= ($validation->hasError('content')) ? "is-invalid" : ""; ?>" id="content" name="content" rows="6"><?= old('content'); ?></textarea>
                <div class="invalid-feedback">
                    <?= $validation->getError('content'); ?>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="create">Create New Post</button>
        </form>
    </div>

</div>

<?= $this->endSection(); ?>