</div>
<script>
$('.lazy').Lazy({
    // your configuration goes here
    // scrollDirection: 'vertical',
    effect: 'fadeIn',
    effectTime: '1s',
    visibleOnly: true,
    onError: function(element) {
        console.log('error loading ' + element.data('src'));
    }
});

$(".lazy").Lazy({
    beforeLoad: function(element) {
        console.log('before');
    },
    afterLoad: function(element) {
        console.log('after');
    },
    onError: function(element) {
        console.log('error');
    },
    onFinishedAll: function() {
        console.log('finish');
    }
});
</script>

<div class="footer-C-newsletter">
    <div style="background-color: #00000087; position: absolute; width: 100%; height: 100%; top: 0; left: 0;">
    </div>

    <!-- <div class="d-flex flex-column justify-content-center" style="background: #ffffff9c; padding: 3rem 1rem;">
        <div class="d-flex justify-content-center" style="z-index: 20;">
            <span style=" font-size: 1.5rem; letter-spacing: 6px; font-weight: 200;">MEDIA PARTNER</span>
        </div>

        <div class="d-flex justify-content-center flex-wrap align-self-center gap-2 py-5" style="z-index: 20;">
            <a style="cursor: pointer;" target="blank"
                href="https://www.youtube.com/watch?v=iPAn7e_Va9M&list=PLmriyx1tVZAyYsww_q2Uu6RK_hCkPBJri&index=29">
                <div style="display: flex; align-items: center; width: 140px; height: 140px; padding: 1rem;">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/liputan/cnn.png" alt="">

                </div>
            </a>

            <a style="cursor: pointer;"
                href="https://kumparan.com/omahbatabusiness/kedai-kopi-asal-amerika-ini-usung-konsep-bangunan-industrial-dari-bahan-local-1y62DzBJcDH"
                target="blank">
                <div style="display: flex; align-items: center; width: 140px; height: 140px; padding: 1rem;">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/liputan/Kumparan.jpg" alt="">

                </div>
            </a>

            <a style="cursor: pointer;"
                href="https://www.liputan6.com/lifestyle/read/4010522/bawa-kesan-klasik-pada-rumah-lewat-tumpukan-batu-bata-unik-multifungsi"
                target="blank">
                <div style="display: flex; align-items: center; width: 140px; height: 140px; padding: 1rem;">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/liputan/liputan6.png" alt="">

                </div>
            </a>

            <a style="cursor: pointer;"
                href="https://swa.co.id/swa/profile/profile-entrepreneur/jurus-mohamad-ilham-besarkan-omah-bata"
                target="blank">
                <div style="display: flex; align-items: center; width: 140px; height: 140px; padding: 1rem;">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/liputan/SWA.jpg" alt="">

                </div>
            </a>

            <a style="cursor: pointer;" href="https://www.youtube.com/watch?v=2UNFpSYdna4" target="blank">
                <div style="display: flex; align-items: center; width: 140px; height: 140px; padding: 1rem;">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/liputan/Trans-TV.png" alt="">

                </div>
            </a>
        </div>

    </div> -->

    <div class="d-flex flex-column justify-content-center" style="background: #ffffff9c; padding:1rem;">
        <div class="d-flex justify-content-center" style="z-index: 20;">
            <span style=" font-size: 1.5rem; letter-spacing: 6px; font-weight: 200;">MEDIA PARTNER</span>
        </div>

        <div class="d-flex justify-content-center flex-wrap align-self-center gap-2 py-5" style="z-index: 20;">
            <a style="cursor: pointer;" target="blank"
                href="https://www.youtube.com/watch?v=iPAn7e_Va9M&list=PLmriyx1tVZAyYsww_q2Uu6RK_hCkPBJri&index=29">
                <div style="display: flex; align-items: center; width: 140px; height: 140px; padding: 1rem;">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/liputan/cnn.png" alt="">

                </div>
            </a>

            <a style="cursor: pointer;"
                href="https://kumparan.com/omahbatabusiness/kedai-kopi-asal-amerika-ini-usung-konsep-bangunan-industrial-dari-bahan-local-1y62DzBJcDH"
                target="blank">
                <div style="display: flex; align-items: center; width: 140px; height: 140px; padding: 1rem;">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/liputan/Kumparan.jpg" alt="">

                </div>
            </a>

            <a style="cursor: pointer;"
                href="https://www.liputan6.com/lifestyle/read/4010522/bawa-kesan-klasik-pada-rumah-lewat-tumpukan-batu-bata-unik-multifungsi"
                target="blank">
                <div style="display: flex; align-items: center; width: 140px; height: 140px; padding: 1rem;">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/liputan/liputan6.png" alt="">

                </div>
            </a>

            <a style="cursor: pointer;"
                href="https://swa.co.id/swa/profile/profile-entrepreneur/jurus-mohamad-ilham-besarkan-omah-bata"
                target="blank">
                <div style="display: flex; align-items: center; width: 140px; height: 140px; padding: 1rem;">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/liputan/SWA.jpg" alt="">

                </div>
            </a>

            <a style="cursor: pointer;" href="https://www.youtube.com/watch?v=2UNFpSYdna4" target="blank">
                <div style="display: flex; align-items: center; width: 140px; height: 140px; padding: 1rem;">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/liputan/Trans-TV.png" alt="">

                </div>
            </a>
        </div>

    </div>

    <div class="row row-cols-1 mb-5 mb-md-0 row-cols-md-2 row-cols-lg-3 gy-5" style="margin: 1rem 0 0 0; opacity: 0.9;">
        <div class="col-lg-3" style="color: #ffffffa6;">
            <span style="font-size: 2rem; font-weight: 100; letter-spacing: 4px;">FOLLOW <span
                    style="font-size: 2rem; font-weight: 600; letter-spacing: 1px;">US</span></span>
            <ul style="display: flex; padding: 0; margin-top: 2rem; flex-wrap: wrap;">
                <li class="li-footer"><a style="text-decoration: none; color: #ffffffa6;" target="blank"
                        href="https://www.youtube.com/c/OMAHBATAOFFICIAL"><i class="fab fs-3 fa-youtube"></i></a></li>
                <li class="li-footer"><a style="text-decoration: none; color: #ffffffa6;" target="blank"
                        href="https://www.instagram.com/omahbata/channel/?hl=id"><i
                            class="fs-3 fab fa-instagram"></i></a></li>
                <li class="li-footer"><a style="text-decoration: none; color: #ffffffa6;" target="blank"
                        href="https://twitter.com/omahbata"><i class="fs-3 fab fa-twitter"></a></i></li>
                <li class="li-footer"><a style="text-decoration: none; color: #ffffffa6;" target="blank"
                        href="https://www.tiktok.com/@omahbata"><i class="fs-3 fab fa-tiktok"></i></a></li>
                <li class="li-footer"><a style="text-decoration: none; color: #ffffffa6;" target="blank"
                        href="https://id-id.facebook.com/omahbatabataexpose/"><i class="fs-3 fab fa-facebook"></i></a>
                </li>
            </ul>
        </div>
        <div class="col-lg-4" style="color: #ffffffa6;">
            <span style="font-size: 2rem; font-weight: 100; letter-spacing: 4px;">OPERATIONAL <span
                    style="font-weight: 600; font-size: 2rem; letter-spacing: 1px;">HOUR</span></span>
            <div class="mt-4 fs-5">
                <span style="font-size: 1rem; font-weight: 200; letter-spacing: 4px;">Senin-Jumat : 08.00 sd
                    17.00</span>
            </div>

            <div class="mt-2 fs-5">
                <span style="font-size: 1rem; font-weight: 200; letter-spacing: 4px;">Sabtu : 09.00 sd 16.00</span>
            </div>

        </div>
        <div class="col-md-12 col-lg-5 px-lg-5" style="color: #ffffffa6;">
            <span style=" color: #ffffffa6; font-size: 2rem; font-weight: 100; letter-spacing: 4px;">OUR <span
                    style="font-weight: 600; letter-spacing: 1px;">NEWSLETTER</span></span>
            <p class="pt-3"
                style="font-size: 1rem; font-weight: 200; color: white; letter-spacing: 1px; font-family: 'Montserrat', sans-serif;">
                Subscribe to our newsletter to get
                update about our grand offers.</p>


            <div class="input-group mb-3 mt-5" style="filter: drop-shadow(5px 5px 3px rgba(0,0,0,1.3));">
                <input type="text" class="form-control rounded-0"
                    style="background: none; border: 1px solid #ffffffa6; color: #ffffffa6; height: 50px;"
                    placeholder="Enter your email address" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <button class="btn rounded-0 fw-normal px-4"
                    style="font-size: small; color: white; border: 1px solid #ffffffa6;" type="button"
                    id="button-addon2">Send <i class="fas fa-paper-plane ml-2"></i></button>
            </div>

        </div>
    </div>
</div>
</div>

<div class="container-fluid">
    <div class="row row-cols-1">
        <div class="col py-4 px-2" style=" background: #1a1c1e00; color: #ffffffc7; ">
            <div class="d-flex gap-3 justify-content-center">
                <small class="align-self-center" style="font-size: 1rem; font-weight: 200;">&reg;2022 PT. Global Cakra
                    Buana Group. All Right Reserved.</small>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"
    integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ=="
    crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script src="<?= base_url("asset/script.js") ?>"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
    once: true,
    delay: 200,
    duration: 1000,
});

gsap.to(".bg1", {
    scrollTrigger: {
        scrub: 0.5
    },
    scale: 1.5,
})

gsap.to(".featured-project", {
    scrollTrigger: {
        scrub: 1
    },
    scale: 0.8
})

// gsap.to(".content", {
//     scrollTrigger: {
//         scrub: 1
//     },
//     y: -500
// })

gsap.to(".box-content-head", {
    scrollTrigger: {
        scrub: 1
    },
    y: -900
})

gsap.to(".sec3", {
    scrollTrigger: {
        scrub: 1
    },
    scale: 0.9
})

gsap.from(".box-head", {
    opacity: 0,
    duration: 1,
    delay: 0.8,
    y: 50
});

</script>

<script>

$(document).ready(function() {
    // addOrder = function(elm) {
    //         var MsItemRef = $(elm).data('msitemref');
    //         var MsCustomerTokenGmailref = $(elm).data('token');
    //          var Qty = $(elm).data('qty');
    //         var Qty = document.getElementById("qtycart").value;

    //         $.ajax({
    //             method: "POST",
    //             data: {
    //                 MsItemRef: MsItemRef,
    //                 MsCustomerTokenGmailref: MsCustomerTokenGmailref,
    //                 Qty: Qty
    //             },
    //             async: false,
    //             contentType: 'application/json',
    //             dataType: 'json',
    //             data: JSON.stringify(payload),
    //             success: function(data, textStatus, jqXHR) {
    //                 console.log(jqXHR.status);
    //                 window.location.href = "https://<?= base_url() ?>user/addOrder";
    //             }
    //         });
    //     }

    addCart = function(elm) {
        var MsItemRef = $(elm).data('msitemref');
        var MsCustomerTokenGmailref = $(elm).data('token');
        //  var Qty = $(elm).data('qty');
        var Qty = document.getElementById("qtycart").value;

        $.ajax({
            url: "<?= base_url() ?>cart/add_to_cart",
            method: "POST",
            data: {
                MsItemRef: MsItemRef,
                MsCustomerTokenGmailref: MsCustomerTokenGmailref,
                Qty: Qty
            },
            success: function(data) {
                setTimeout(function() { // wait for 5 secs(2)
                    location.reload()
                }, 2000);
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    icon: 'success',
                    title: 'Produk Berhasil Di Tambah Ke Keranjang'
                })
            },
            error: function(error) {
                setTimeout(function() { // wait for 5 secs(2)
                    location.reload()
                }, 2000);
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    icon: 'warning',
                    title: 'Produk Sudah ada di keranjang'
                })
            }
        });
    }

    addWishlist = function(elm) {
        var MsItemRef = $(elm).data('msitemref');
        var MsCustomerTokenGmailref = $(elm).data('token');

        $.ajax({
            url: "<?= base_url() ?>WishList/add_to_wishlist",
            method: "POST",
            data: {
                MsItemRef: MsItemRef,
                MsCustomerTokenGmailref: MsCustomerTokenGmailref
            },
            success: function(data) {
                setTimeout(function() { // wait for 5 secs(2)
                    location.reload()
                }, 2000);
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    icon: 'success',
                    title: 'Produk Berhasil Di Tambah Ke Daftar Favorite'
                })
            }

        });
    }

    $('#priceTotal').load("<?= base_url();?>cart/load_cart");

    //Hapus Item Cart
    $(document).on('click', '.delete_cart', function() {
        var row_id = $(this).attr("id"); //mengambil row_id dari artibut id
        $.ajax({
            url: "<?php echo base_url();?>cart/delete_cart",
            method: "POST",
            data: {
                row_id: row_id
            },
            success: function(data) {
                $('#priceTotal').html(data);
            }
        });
    });

});

$(document).ready(function() {
        //select the POPUP FRAME and show it
        $("#popup").hide().fadeIn(1000);

        //close the POPUP if the button with id="close" is clicked
        $("#close").on("click", function(e) {
            e.preventDefault();
            $("#popup").fadeOut(1000);
        });
    });
</script>
</body>

</html>