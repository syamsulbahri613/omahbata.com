<div class="signinWrap">
    <div class="signin-content">
        <!-- <div class="signin-ads">
            <img src="<?= base_url() ?>/asset/LEDBSD.png" alt="">
        </div> -->

        <div class="signin-form">
            <div class="card-body p-3 p-md-5">
                <span style="text-align: center; font-size: 2.5rem; font-weight: 700; letter-spacing: 2px; line-height: 2; color: #e1e1e1; text-shadow: 1px 1px 1px #964314;">OMAH<span style="color: #67432b; text-shadow: 1px 1px 1px #b9b9b9;">BATA</span></span><br>

                <span style="font-size: 1.4vh; letter-spacing: 4px;">Art To coming From Own Heart</span>

                <hr class="text-dark mb-5">
                <div class="input-group flex-nowrap mb-4 ">
                    <input type="text" class="form-control shadow-sm" name="MsEmpCode" id="username"
                        placeholder="Masukan email" aria-label="Username" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap mb-4">
                    <input type="password"
                        class="form-control shadow-sm" id="password" name="MsEmpPass"
                        placeholder="Masukan password" aria-label="Username" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group justify-content-center">
                    <button type="submit" id="login" name="login" class="btn btn-sm w-100 mb-2 rounded-0"
                        style="background-color: #dc3545e3; color: white; padding: 7px 0">Login</button>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="#" style="color: white; font-size: 0.6rem; text-decoration: 0.6rem;">Lupa Password</a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalSignIn"
                        style="color: white; font-size: 0.6rem; text-decoration: none;">Login Dengan No Handphone</a>
                </div>

                <hr class="text-dark my-5">

                <sup class="justify-content-center d-flex text-dark">Atau</sup>

                <div class="d-flex justify-content-center gap-3 mt-4">
                    <!-- <a style="text-decoration: none;" href="auth.php"><span style="border-radius: 0.2rem; padding: 0.7rem; font-size: 0.8rem; border: 1px solid black; color: black; display: flex; gap: 5px; letter-spacing: 2px;"><i class="fab fa-google text-dark fs-4"></i> <span style="color: black; align-self: center;">Sign in with Google</span></span></a> -->
                    <!-- <a href="#" style="text-decoration: none;"><span style="border-radius: 0.2rem; padding: 0.7rem; font-size: 0.8rem; border: 1px solid black; color: black; display: flex; gap: 5px; letter-spacing: 2px;"><i class="fab fa-facebook text-dark fs-4"></i> <span style="color: black; align-self: center;">Facebook</span></span></a> -->
                    <div id="g_id_onload"
                        data-client_id="824280131086-n650s8f2uvufcn77va63qms1vptqqfcf.apps.googleusercontent.com"
                        data-callback="handleCredentialResponse">
                    </div>
                    <div class="g_id_signin" data-type="standard" data-onsucces="onSignIn"></div>
                </div>


            </div>
        </div>
    </div>
</div>


<div class="modal fade" style="margin-top: 10%;" id="modalSignIn" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" style="font-size: 1rem; color: black; font-weight: 700;"
                    id="exampleModalLabel">Daftar Dengan Nomer Telpon</span>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3 py-5">
                    <input type="number_format" class="form-control" placeholder="Masukan Nomer Telpon"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="popup" class="popup panel panel-primary">
    <img class="img-fluid" src="<?= base_url() ?>/asset/LEDBSD.png" alt="popup">
    <div class="panel-footer" style="background: white;">
        <button id="close" class="btn-close fs-3" style="position: absolute; top: 0; right: 0;"></button>
    </div>
</div>

<script>
function decodeJwtResponse(token) {
    let base64Url = token.split('.')[1]
    let base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    let jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));
    return JSON.parse(jsonPayload)
}

let responsePayload;

function handleCredentialResponse(response) {
    // decodeJwtResponse() is a custom function defined by you
    // to decode the credential response.
    responsePayload = decodeJwtResponse(response.credential);

    // console.log("ID: " + responsePayload.sub);
    // console.log('Full Name: ' + responsePayload.name);
    // console.log('Given Name: ' + responsePayload.given_name);
    // console.log('Family Name: ' + responsePayload.family_name);
    // console.log("Image URL: " + responsePayload.picture);
    // console.log("Email: " + responsePayload.email);

    var MsCustomerTokenGmail = responsePayload.sub;
    var MsCustomerName = responsePayload.name;
    var MsCustomerImage = responsePayload.picture;
    var MsCustomerEmail = responsePayload.email;

    $.ajax({
        url: "<?= base_url() ?>Login/loginGmail",
        method: "POST",
        data: {
            MsCustomerTokenGmail: MsCustomerTokenGmail,
            MsCustomerName: MsCustomerName,
            MsCustomerImage: MsCustomerImage,
            MsCustomerEmail: MsCustomerEmail
        },
        success: function(data) {
            setTimeout(function() { // wait for 5 secs(2)
                location.href = "https://preview.omahbata.com/"; // then reload the page.(3)
            }, 2000);
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            Toast.fire({
                icon: 'success',
                title: 'Berhasil Login dengan google'
            })
        }

    });

}
</script>