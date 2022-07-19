<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="RISTEK HIMSI UNSRI 2022">

    <title><?= $title; ?> | RISTEK HIMSI 2022</title>

    <!-- =================== FAVICON ================== -->
    <link rel="icon" href="/Assets/img/himsi-logo.png" type="image/png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&family=Poppins:wght@500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .container-fluid {
            font-size: 1rem;
        }

        .note-editor .dropdown-toggle::after {
            all: unset;
        }

        .note-editor .note-dropdown-menu {
            box-sizing: content-box;
        }

        .note-editor .note-modal-footer {
            box-sizing: content-box;
        }
    </style>

    <script src="/Assets/vendor/jquery/jquery.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <link rel="stylesheet" href="/Assets/vendor/tam-emoji/css/emoji.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/users">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Ristek HIMSI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $nav === "dashboard" ? "active" : ""; ?>">
                <a class="nav-link" href="/admin/users">
                    <i class="fa fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Features
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?= $nav === "staff" ? "active" : ""; ?>">
                <a class="nav-link" href="/admin/users/staffs">
                    <i class="fa fa-users"></i>
                    <span>Staff</span>
                </a>
            </li>

            <li class="nav-item <?= $nav === "pojok_himsi" ? "active" : ""; ?>">
                <a class="nav-link" href="/admin/users/pojok_himsi">
                    <i class="fa fa-newspaper"></i>
                    <span>Pojok HIMSI</span>
                </a>
            </li>

            <li class="nav-item <?= $nav === "akademik" ? "active" : ""; ?>">
                <a class="nav-link" href="/admin/users/akademik">
                    <i class="fa fa-graduation-cap"></i>
                    <span>Akademik</span>
                </a>
            </li><br>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <?= $this->include('Layouts/Admin/navbar.php'); ?>

                <!-- End of Topbar -->

                <?= $this->renderSection('main-content'); ?>

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="/admin/logout">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="/Assets/vendor/tam-emoji/js/config.js"></script>
                <script src="/Assets/vendor/tam-emoji/js/tam-emoji.js"></script>

                <script>
                    document.emojiButton = 'fas fa-smile';
                    document.emojiType = 'unicode';
                    document.emojiSource = '/Assets/vendor/tam-emoji/img';

                    $('.summernote').summernote({
                        callbacks: {
                            onImageUpload: function(files) {
                                for (let i = 0; i < files.length; i++) {
                                    $.upload(files[i]);
                                }
                            },
                            onMediaDelete: function(target) {
                                $.delete(target[0].src);
                            }
                        },
                        placeholder: 'Create Post!',
                        tabsize: 2,
                        height: 500,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['fontname', ['fontname']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video', 'emoji']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ]
                    });

                    $.upload = function(file) {
                        let out = new FormData();
                        out.append('file', file, file.name);
                        $.ajax({
                            method: 'POST',
                            url: '<?php echo site_url('admin/users/upload') ?>',
                            contentType: false,
                            cache: false,
                            processData: false,
                            data: out,
                            success: function(img) {
                                $('.summernote').summernote('insertImage', img);
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                console.error(textStatus + " " + errorThrown);
                            }
                        });
                    };

                    $.delete = function(src) {
                        $.ajax({
                            method: 'POST',
                            url: '<?php echo site_url('admin/users/deleteImg') ?>',
                            cache: false,
                            data: {
                                src: src
                            },
                            success: function(response) {
                                console.log(response);
                            }

                        });
                    };
                </script>

                <!-- Bootstrap core JavaScript-->
                <script src="/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="/Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="/Assets/js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="/Assets/vendor/datatables/jquery.dataTables.min.js"></script>
                <script src="/Assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="/Assets/js/demo/datatables-demo.js"></script>

                <script>
                    function previewImg() {

                        const thumb = document.querySelector('#thumbnail');
                        const thumbLabel = document.querySelector('.custom-file-label');
                        const imgPreview = document.querySelector('.img-preview');

                        thumbLabel.textContent = thumb.files[0].name;

                        const fileThumb = new FileReader();
                        fileThumb.readAsDataURL(thumb.files[0]);

                        fileThumb.onload = function(e) {
                            imgPreview.src = e.target.result;
                        }

                    }
                </script>


</body>

</html>