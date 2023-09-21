<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="<?= base_url("asset/sb-admin/css/sb-admin-2.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("asset/bootstrap5-2/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css">
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
    <!-- <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" /> -->
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />

    <script src="<?= base_url("asset/bootstrap5-2/js/jquery-3.6.0.min.js") ?>"></script>
    <script src="<?= base_url("asset/bootstrap5-2/js/popper.min.js") ?>"></script>
    <script src="<?= base_url("asset/sweetalert/dist/sweetalert2.min.js") ?>"></script>
    <script src="<?= base_url("asset/bootstrap5-2/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("asset/datatable/datatables.min.js") ?>"></script>
    <script src="<?= base_url("asset/cropper/dist/cropper.js") ?>"></script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <!-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> -->
</head>

<body style="font-family: 'Montserrat', sans-serif; ">
    <div class="container">
        <div class="col col-md-5" style="margin: auto; margin-top: 15vh;">
            <div class="card rounded-4" style="box-shadow: 0px 0px 9px #b1b1b1b3;">
                <div class="card-body">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/iconobi.png" alt="">
                    <div class="input-group flex-nowrap mb-2">
                        <span class="input-group-text" style="background-color: #dc3545e3; color: white;" id="addon-wrapping"><i class="fa far fa-user"></i></span>
                        <input type="text" class="form-control" name="MsEmpCode" id="username" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group flex-nowrap mb-4">
                        <span class="input-group-text" style="background-color: #dc3545e3; color: white;" id="addon-wrapping"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="MsEmpPass" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>

                    <div class="input-group justify-content-center">
                        <button type="submit" id="login" name="login" class="btn btn-sm w-100 mb-5" style="background-color: #dc3545e3; color: white;">Login</button>
                    </div>

                    <sup class="justify-content-center d-flex">&copy; Support By : IT Center & Program</sup>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    $("#username").keyup(function(event) {
        if (event.keyCode === 13) {
            $("#password").focus();
        }
    });
    $("#password").keyup(function(event) {
        if (event.keyCode === 13) {
            $("#login").click();
        }
    });
    $('#login').on('click', function() {
        $(this).html('<i class="fas fa-circle-notch fa-spin"></i> Loading');
        $.ajax({
            method: "POST",
            url: "<?php echo site_url('login/check') ?>",
            data: {
                'MsEmpCode': $("#username").val(),
                'MsEmpPass': $("#password").val()
            },
            success: function(data) {
                $("#message-username").html(data.username);
                $("#message-password").html(data.password);
                $("#login").html('Login');
                if (data.status == 'Success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Success',
                        showConfirmButton: false,
                        timer: 1500,
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            window.location.replace('<?= site_url('admin'); ?>');
                        }
                    })

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Login failed',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }
        });
    })
</script>

</html>