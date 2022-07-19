<?= $this->extend('Layouts/Admin/templates.php'); ?>

<?= $this->section('main-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bold text-dark">Staff HIMSI 2022</h1>
    </div>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> <?= session()->getFlashdata('pesan'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <!-- Content Row -->
    <!-- <div class="row">

    </div> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahStaff"><i class="fa fa-plus"></i> Tambah Data</button>
            <button class="btn btn-info"><i class="fa fa-print"></i> Print Data</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Nama</th>
                            <th>Dinas</th>
                            <th>Jabatan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Nama</th>
                            <th>Dinas</th>
                            <th>Jabatan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($staffs as $staff) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td>
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#editStaff<?= $staff["staffID"]; ?>"><i class="fa fa-pen"></i> Edit</button> |
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteStaff<?= $staff["staffID"]; ?>"><i class="fa fa-trash"></i> Delete</button> |
                                    <button class="btn btn-info" data-toggle="modal" data-target="#detailsStaff<?= $staff["staffID"]; ?>"><i class="fa fa-info"></i> Details</button>
                                </td>
                                <td><?= ucwords($staff["nama"]); ?></td>
                                <td><?= $staff["dinas"]; ?></td>
                                <td><?= $staff["jabatan"]; ?></td>
                            </tr>

                            <!-- Edit Modal -->
                            <div class="modal" id="editStaff<?= $staff["staffID"]; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Data Staff</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="/admin/users/editStaff" method="post">
                                                <input type="hidden" class="form-control" value="<?= $staff["staffID"]; ?>" name="id" id="id">
                                                <div class="form-group">
                                                    <label for="nama">Nama:</label>
                                                    <input type="text" name="nama" class="form-control" value="<?= $staff["nama"]; ?>" id="nama">
                                                </div>
                                                <div class="form-group">
                                                    <label for="dinas">Dinas:</label>
                                                    <input type="text" name="dinas" class="form-control" value="<?= $staff["dinas"]; ?>" id="dinas">
                                                </div>
                                                <div class="form-group">
                                                    <label for="TTL">TTL:</label>
                                                    <input type="text" name="TTL" class="form-control" value="<?= $staff["TTL"]; ?>" id="TTL">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat:</label>
                                                    <input type="text" name="alamat" class="form-control" value="<?= $staff["alamat"]; ?>" id="alamat">
                                                </div>
                                                <div class="form-group">
                                                    <label for="angkatan">Angkatan:</label>
                                                    <input type="text" name="angkatan" class="form-control" value="<?= $staff["angkatan"]; ?>" id="angkatan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan">Jabatan:</label>
                                                    <input type="text" name="jabatan" class="form-control" value="<?= $staff["jabatan"]; ?>" id="jabatan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="hobi">Hobby:</label>
                                                    <input type="text" name="hobi" class="form-control" value="<?= $staff["hobi"]; ?>" id="hobi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email:</label>
                                                    <input type="email" name="email" class="form-control" value="<?= $staff["email"]; ?>" id="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="instagram">Instagram:</label>
                                                    <input type="text" name="instagram" class="form-control" value="<?= $staff["instagram"]; ?>" id="instagram">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Kesan & Pesan:</label>
                                                    <textarea name="kesan_pesan" id="kesan_pesan" class="form-control" cols="30" rows="5"><?= $staff["kesan_pesan"]; ?></textarea>
                                                </div>

                                                <!-- Edit Button -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Delete Modal -->
                            <div class="modal" id="deleteStaff<?= $staff["staffID"]; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Data Staff</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus data <?= $staff["nama"]; ?>?
                                            <form action="/admin/users/deleteStaff/<?= $staff["staffID"]; ?>" method="post">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?= $staff["staffID"]; ?>"><br>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="submit" name="hapus" class="btn btn-danger">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Details Modal -->
                            <div class="modal" id="detailsStaff<?= $staff["staffID"]; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title"><?= $staff["nama"]; ?></h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <img src="/Assets/img/staffs/<?= $staff["dinas"]; ?>/<?= $staff["picture"]; ?>" class="img-thumbnail" width="300" alt=""><br>
                                            <h5 class="font-weight-bold mt-2"><?= $staff["nama"] ?></h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><?= $staff["dinas"]; ?> | <?= $staff["jabatan"] ?> | <?= $staff["angkatan"] ?></h6>
                                            <ul class="list-group">
                                                <li class="list-group-item" aria-disabled="true">TTL : <?= $staff["TTL"] ?></li>
                                                <li class="list-group-item">Alamat : <?= $staff["alamat"] ?></li>
                                                <li class="list-group-item">Hobi : <?= $staff["hobi"] ?></li>
                                                <li class="list-group-item">Divisi : <?= $staff["divisi"] ?></li>
                                                <li class="list-group-item">Instagram : <a href="https://www.instagram.com/<?= $staff["instagram"] ?>"><?= $staff["instagram"] ?></a></li>
                                                <li class="list-group-item">Email : <a href="mailto:<?= $staff["email"] ?>"><?= $staff["email"] ?></a></li>
                                                <li class="list-group-item">Kesan & Pesan : <?= $staff["kesan_pesan"] ?></li>
                                            </ul>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Tambah Modal -->
<div class="modal" id="tambahStaff">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Staff</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="/admin/users/saveStaff" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="email">Nama:</label>
                        <input type="text" name="nama" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Dinas:</label>
                        <input type="text" name="dinas" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">TTL:</label>
                        <input type="text" name="TTL" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat:</label>
                        <input type="text" name="alamat" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Angkatan:</label>
                        <input type="number" name="angkatan" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Jabatan:</label>
                        <input type="text" name="jabatan" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Hobby:</label>
                        <input type="text" name="hobi" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Instagram:</label>
                        <input type="text" name="instagram" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Kesan & Pesan:</label>
                        <textarea name="kesan_pesan" id="kesan_pesan" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <label for="thumbail">Profile Picture</label><br>
                    <div class="custom-file">
                        <input type="file" name="picture" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile" >Choose file</label>
                    </div>

                    <!-- Edit Button -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>