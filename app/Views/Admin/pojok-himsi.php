<?= $this->extend('Layouts/Admin/templates.php'); ?>

<?= $this->section('main-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bold text-dark">Pojok HIMSI</h1>
    </div>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> <?= session()->getFlashdata('pesan'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-lg-6">
            <?php //Flasher::flash(); 
            ?>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="/admin/users/createPost"><i class="fa fa-plus"></i> Create New Post</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Title</th>
                            <th>Published</th>
                            <th>Author</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Title</th>
                            <th>Published</th>
                            <th>Author</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($posts as $post) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td>
                                    <a class="btn btn-md btn-warning" href="/admin/users/editPost/<?= $post["slug"]; ?>"><i class="fa fa-pen"></i> Edit</a> |
                                    <button class="btn btn-md btn-danger" data-toggle="modal" data-target="#deletePost<?= $post["postID"]; ?>"><i class="fa fa-trash"></i> Delete</button>
                                </td>
                                <td><a href="/admin/users/detailPost/<?= $post["slug"]; ?>"><?= $post["title"]; ?></a></td>
                                <td><?= $post["published"]; ?></td>
                                <td><?= $post["author"]; ?></td>
                            </tr>

                            <!-- Delete Modal -->
                            <div class="modal" id="deletePost<?= $post["postID"]; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete <?= $post["title"]; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus post ini?
                                        </div>

                                        <form action="/admin/users/pojok-himsi/<?= $post["postID"]; ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <!-- Modal footer -->
                                            <input type="hidden" name="id" value="<?= $post["postID"] ?>">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <?php $no++ ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>