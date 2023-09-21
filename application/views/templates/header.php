<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?= base_url("asset/animate.css/animate.min.css") ?>" type="text/css">
    <link href="<?= base_url("asset/bootstrap5-2/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/omahbata/style.css?version=v2.0.3") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontawesome5/fontawesome.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontawesome5/all.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/sweetalert/dist/sweetalert2.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/slick/slick.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/slick/slick-theme.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/aos/aos.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/lora.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/montserrat.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/poppins.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/roboto.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/header.css?version=v1.1.9") ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700|Poppins" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />


    <script src="<?= base_url("asset/bootstrap5-2/js/jquery-3.6.0.min.js") ?>"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script src="<?= base_url("asset/bootstrap5-2/js/popper.js") ?>"></script>
    <script src="<?= base_url("asset/bootstrap5-2/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("asset/sweetalert/dist/sweetalert2.min.js") ?>"></script>
    <script src="<?= base_url("asset/slick/slick.min.js") ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/gsap/gsap.min.js") ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/gsap/TextPlugin.min.js") ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/lazy/jquery.lazy.min.js") ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/zoomer/zoomsl.min.js") ?>"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        el_autohide = document.querySelector('.autohide');
        navbar_height = document.querySelector('.navbar').offsetHeight;
        //  document.body.style.paddingTop = navbar_height + 'px';

        if (el_autohide) {
            var last_scroll_top = 0;
            window.addEventListener('scroll', function() {
                let scroll_top = window.scrollY;
                if (scroll_top < last_scroll_top) {
                    el_autohide.classList.remove('scrolled-down');
                    el_autohide.classList.add('scrolled-up');
                } else {
                    el_autohide.classList.remove('scrolled-up');
                    el_autohide.classList.add('scrolled-down');
                }
                scroll_top > 0 ? el_autohide.classList.add('shadow-sm', 'bg-dark') : el_autohide
                    .classList.remove('shadow-sm', 'bg-dark')
                last_scroll_top = scroll_top;
            });
            window.addEventListener
        }
    });
    </script>
    <style>
    small {
        /* font-family: 'Montserrat', sans-serif; */
        font-family: 'Poppins', sans-serif;
    }
    </style>
</head>

<body style="background-color: #1a1c1e;">
    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <nav class="navbar ipnav" style="background: rgba(0, 0, 0, 0.164);color:orange;">
        <div class="container-fluid">
            <div class="navbar align-content-center" style="width: 175px;height:60px;">
                <img src="<?= base_url() ?>/asset/iconobi.png" class="img-fluid" width="100px" height="120px"
                    alt="omahbata">
            </div>
            <button class="navbar-toggler   border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="filter: invert(1);">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end pt-3"
                style="background-color: #1c1c1ce6; text-align: center; width: 70%;" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header justify-content-end" style="color: #ffffffa3;">

                    <button type="button" class="btn-close" style="background-color: #ffffffa3;"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 ul-nav-phone">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>"><span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>product"><span>Products</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>project"><span>Project</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>contact"><span>Contact</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <nav class="autohide navbar navbar-expand-lg p-4 scrolled-up pcnav">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-around flex-wrap customNav"
                id="navbarNavAltMarkup">
                <div class="navbar align-content-center logoshow" style="width: 175px;height:60px; ">
                    <img src="<?= base_url() ?>/asset/iconobi.png" class="img-fluid" alt="omahbata">
                </div>
                <div class="navbar-nav navbarshow gap-3" style=" font-weight: 300;">
                    <a class="nav-link <?= ($_page == "HOME" ? "active" : "") ?>" href="<?= base_url() ?>">HOME</a>
                    <a class="nav-link <?= ($_page == "PRODUCTS" ? "active" : "") ?>"
                        href="<?= base_url() ?>product">PRODUCTS</a>
                    <a class="nav-link <?= ($_page == "PROJECT" ? "active" : "") ?>"
                        href="<?= base_url() ?>project">PROJECT</a>
                    <a class="nav-link <?= ($_page == "CONTACT" ? "active" : "") ?>"
                        href="<?= base_url() ?>contact">CONTACT</a>
                </div>
                <div class="navbar actionshow gap-4">
                    <a href="<?= base_url() ?>wishList" style="position: relative;">
                        <i class="fas fa-heart icon"></i><span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php
                                $query = $this->db->query('SELECT * FROM TblMsitemWishlist where MsCustomerTokenGmailref = "'.$this->session->userdata('MsCustomerTokenGmail').'"');
                                echo $query->num_rows();
                            ?>
                        </span>
                    </a>
                    <a href="<?= base_url() ?>cart" style="position: relative;">
                        <i class="fas fa-shopping-cart icon chart-navigasi">
                        </i><span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php
                             $query = $this->db->query('SELECT * FROM TblMsItemCart where MsCustomerTokenGmailref = "'.$this->session->userdata('MsCustomerTokenGmail').'"');
                             echo $query->num_rows();
                            ?>
                        </span>

                    </a>

                    <?php
                        if($this->session->userdata('login_status') == true){?>
                    <div class="akun">
                        <img src="<?= $this->session->userdata('MsCustomerImage')?>" style="width: 45px; height: 45px;"
                            class="imgUser rounded-circle mx-auto d-block" alt="...">

                        <div class="barAkun">
                            <div class="d-flex flex-column">
                                <span class="namaAkun"><?= $this->session->userdata('MsCustomerName');?></span>
                                <span class="emailAkun">Email :
                                    <?= $this->session->userdata('MsCustomerEmail');?></span>
                            </div>

                            <div class="d-flex flex-column gap-2">
                                <a class="listbarAkun" href="<?= base_url() ?>user/order">
                                    <span><i class="fas fa-box-open"></i> Pesanan Saya</span>
                                </a>

                                <a class="listbarAkun" href="<?= base_url() ?>user/kelolaAkun">
                                    <span><i class="fas fa-user"></i> Kelola akun</span>
                                </a>

                                <a class="listbarAkun" href="#">
                                    <span><i class="fas fa-bell"></i> Notifikasi</span>
                                </a>

                                <a class="listbarAkun" href="<?= base_url() ?>login/logoutUser">
                                    <span><i class="fas fa-sign-out-alt"></i> Keluar</span>
                                </a>
                            </div>

                            <div class="triangle"></div>
                        </div>

                    </div>
                    <?php }else {?>
                    <a style="text-decoration: none;" href="<?= base_url() ?>signIn"> <span class="signIn">Login <i
                                class="fas fa-lock"></i></span></a>
                    <?php }?>



                </div>
            </div>
        </div>
    </nav>

    <div class="phone-navigasi">
        <div
            class="d-flex flex-row justify-content-evenly justify-content-sm-center gap-sm-4 justify-item-center phone-navigasi-contain">
            <a href="<?= base_url() ?>" style="position: relative;">
                <i class="fas fa-home fs-5"></i>
            </a>

            <a href="<?= base_url() ?>cart" style="position: relative;">
                <i class="fas fa-shopping-cart chart-navigasi">
                </i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    <?php
                             $query = $this->db->query('SELECT * FROM TblMsItemCart where MsCustomerTokenGmailref = "'.$this->session->userdata('MsCustomerTokenGmail').'"');
                             echo $query->num_rows();
                            ?>
                </span>

            </a>

            <a style="position: relative;" href="<?= base_url() ?>wishList">
                <i class="fas fa-heart fs-5">
                </i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    <?php
                                $query = $this->db->query('SELECT * FROM TblMsitemWishlist where MsCustomerTokenGmailref = "'.$this->session->userdata('MsCustomerTokenGmail').'"');
                                echo $query->num_rows();
                            ?>
                </span>
            </a>

            <?php
            if($this->session->userdata('login_status') == true){?>
            <a href="<?= base_url() ?>login/logoutUser" style="position: relative;">
                <i class="fas fa-sign-out-alt"></i>
            </a>
            <?php }else {?>
            <a href="<?= base_url() ?>signIn" style="position: relative;">
                <i class="fas fa-sign-in-alt fs-5"></i>
            </a>
            <?php }?>
        </div>
    </div>