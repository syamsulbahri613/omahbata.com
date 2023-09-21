<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link href="<?= base_url("asset/sb-admin/css/sb-admin-2.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("asset/bootstrap5-2/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/datepicker/daterangepicker.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/omahbata/style.css?version=v2.0.2") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontawesome5/fontawesome.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/sweetalert/dist/sweetalert2.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontawesome5/all.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/datatable/datatables.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/lora.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/montserrat.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/poppins.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/roboto.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/cropper/dist/cropper.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/select2/css/select2.min.css") ?>" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /> -->
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />

    <script src="<?= base_url("asset/bootstrap5-2/js/jquery-3.6.0.min.js") ?>"></script>
    <script src="<?= base_url("asset/jquery/jquery.moment.min.js") ?>"></script>
    <script src="<?= base_url("asset/bootstrap5-2/js/popper.js") ?>"></script>
    <script src="<?= base_url("asset/sweetalert/dist/sweetalert2.min.js") ?>"></script>
    <script src="<?= base_url("asset/bootstrap5-2/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("asset/datatable/datatables.min.js") ?>"></script>
    <script src="<?= base_url("asset/cropper/dist/cropper.js") ?>"></script>
    <script src="<?= base_url("asset/date-bootstrap/js/bootstrap-datepicker.min.js") ?>"></script>
    <script src="<?= base_url("asset/select2/js/select2.min.js") ?>"></script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <!-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> -->
    <style>
        .pointer {
            cursor: pointer;
        }
    </style>


</head>



<body id="page-top" style="font-family: Montserrat, sans-serif;">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url("admin") ?>">
                <div class="sidebar-brand-text mx-3">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/iconobi.png" alt="">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url("admin") ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Produk
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url("admin/kategori") ?>">
                    <i class="fas fa-fw fa-sitemap"></i>
                    <span>Kategori</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url("admin/item") ?>">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Produk</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Project And Update News
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url("admin/project") ?>">
                    <i class="fas fa-fw fa-project-diagram"></i>
                    <span>Project</span>
                </a>
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Update News</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <hr>

            <li class="nav-item justify-content-end">
                <a class="nav-link" href="<?= site_url("login/logout") ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                          Omahbata Indonesia <img src="<?= base_url() ?>/asset/iconobi.png" alt="" width="80px" height="60px">
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->