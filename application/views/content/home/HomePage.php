<section>
    <div class="containerHead">
        <img src="<?= base_url() ?>asset/image/headerHome.jpg" class="bg1" alt="" />
        <div class="box-head">


            <div class="box-content-head cs1">
                <span class="mp-text">MP HOUSE <span style="font-weight: 200;">BY TIES</span></span>
                <span class="tng-text">TANGERANG</span>
                <a href="<?= base_url() ?>project/projectById/2"><button class="btn-show-csproject">LIHAT PROJECT</button></a>
            </div>
        </div>
    </div>
</section>

<section class="section2">
    <div class="content" style="padding: 0;">
        <div class="pt-4 px-3">
            <div class="text-center justify-content-end py-md-5 py-4">
                <span class=" text-uppercase future">Featured <span class="future-2">Projects</span></span>
            </div>

            <div class="featured-project text-center">
                <?php foreach ($project as $row) : ?>
                    <div class="cs-project">
                        <a href="<?= base_url() ?>project/projectById/<?= $row["CustomerProjectId"] ?>">
                            <div class="img-fluid cs-bg" style="background-image: url(<?= base_url('asset/image/project/' . $row["CustomerProjectHeaderImg"] . '') ?>); background-size: cover; background-position: center;">
                                <div class="cs-desk">
                                    <div>
                                        <span style="font-size: 1rem; white-space: text-overflow: ellipsis; max-width: 100px; pre-line; overflow: hidden; text-overflow: ellipsis; font-weight: 700; color: white; "><?= $row["CustomerProjectTitle"] ?></span>
                                    </div>
                                    <sub><?= date('d F Y', strtotime($row["CustomerProjectDate"])); ?> | <?= $row["CustomerProjectAddress"]  ?></sub><br>
                                </div>

                                <span class="btn-cs-desk"><i class="fas fa-chevron-right fs-3"></i></span>
                            </div>
                        </a>

                        <div class="cs-text">
                            <span style="font-size: 1rem; font-weight: 200;">CUSTOMER <span style="font-size: 1rem; font-weight: 500;">PROJECT</span></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


            <div class="row py-1 pb-5">
                <div class="d-flex align-items-center justify-content-center " style="height: 100px;">
                    <a class="btn-custom" href="<?= base_url() ?>project"><span style="font-size: 1.3rem; font-weight: 100;">VISIT ALL </span><span style="font-size: 1.3rem; font-weight: 600;">PROJECT</span></a>
                </div>
            </div>
            <script>
                $(document).ready(function() {

                    var options = {
                        infinite: true,
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        adaptiveHeight: true,
                        infinite: false,
                        dots: true,
                        responsive: [{
                                breakpoint: 1440,
                                settings: {
                                    slidesToShow: 4,
                                    slidesToScroll: 4,
                                    dots: true,
                                }
                            },
                            {
                                breakpoint: 1300,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3,
                                    dots: true,
                                }
                            },
                            {
                                breakpoint: 992,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2,
                                    dots: false,
                                }
                            },
                            {
                                breakpoint: 576,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    dots: false,
                                }
                            },
                            {
                                breakpoint: 375,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    dots: false,
                                }
                            }
                        ]
                    };


                    const mySlider = $('.featured-project').on('init', function(slick) {

                        multiSlideAdaptiveHeight(this);

                    }).on('beforeChange', function(slick, currentSlide, nextSlide) {

                        multiSlideAdaptiveHeight(this);

                    }).slick(options);


                    function multiSlideAdaptiveHeight(slider) {

                        let activeSlides = [];
                        let tallestSlide = 0;

                        setTimeout(function() {

                            $('.slick-track .slick-active', slider).each(function(item) {

                                activeSlides[item] = $(this).outerHeight();

                            });

                            activeSlides.forEach(function(item) {

                                if (item > tallestSlide) {

                                    tallestSlide = item;

                                }

                            });

                            $('.slick-list', slider).height(tallestSlide);

                        }, 10);

                    }


                    $(window).on('resize', function() {

                        multiSlideAdaptiveHeight(mySlider);

                    });
                });
            </script>
        </div>
    </div>
</section>

<section>
    <div class="content-youtube">
        <div class="content-youtube-text py-5">
            <span class="content-youtube-span1">KATA MEREKA TENTANG <span class="content-youtube-span2">OMAHBATA</span></span>
        </div>

        <div class="row row-cols-1 row-cols-md-2 sec3" style="margin-bottom: 8rem;">
            <div class="col col-md-5 p-0">
                <div class="col vd1">
                    <iframe src="https://www.youtube.com/embed/Q0U-9m9_sLw" width="100%" height="100%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>

                <div class="col vd2">
                    <iframe src="https://www.youtube.com/embed/5gPSkUXMq-I" width="100%" height="100%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>

            <div class="col col-md-7 p-0">
                <div class="col vd3">
                    <iframe src="https://www.youtube.com/embed/M-6erT4kwK8" width="100%" height="100%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="py-5" style="background: url(<?= base_url() ?>/asset/image/3.jpg); background-attachment: fixed;">
        <div class="container bck-sec">
            <div class="p-0">
                <div class="col d-flex flex-column justify-content-center align-self-center p-3 p-md-4 p-lg-5">
                    <span class="aneka-produk-span1">
                        PERCANTIK HUNIAN ANDA DENGAN
                    </span>
                    <span class="aneka-produk-span2">
                        ANEKA PRODUK KAMI
                    </span>
                </div>
            </div>

            <div class="col m-1 m-sm-2 m-md-3 m-lg-5">
                <div class="aneka-produk">
                    <div class="aneka-produk-img1">
                        <img class="img-fluid" style="object-fit: cover; height: 500px;" src="<?= base_url() ?>/asset/image/headerProduct/exposefix.jpg" alt="">
                        <a class="aneka-produk-btn1" href="<?= base_url() ?>product/productsById/5"><span style="font-size: 2.5rem; font-weight: 200;">BATA <span style="font-size: 2.5rem; font-weight: 700;">EXPOSE</span></span></a>
                    </div>
                    <div class="aneka-produk-img2">
                        <img class="img-fluid" style="object-fit: cover; height: 500px;" src="<?= base_url() ?>/asset/image/headerProduct/Redfix.jpg" alt="">
                        <a class="aneka-produk-btn2" href="<?= base_url() ?>product/productsById/6"><span style="font-size: 2.5rem; font-weight: 200;">BATA <span style="font-size: 2.5rem; font-weight: 700;">TEMPEL</span></span></a>
                    </div>
                    <div class="aneka-produk-img3">
                        <img class="img-fluid" style="object-fit: cover; height: 500px;" src="<?= base_url() ?>/asset/image/headerProduct/semenfix.jpg" alt="">
                        <a class="aneka-produk-btn3" href="<?= base_url() ?>product"><span style="font-size: 2.5rem; font-weight: 200;">ROS<span style="font-size: 2.5rem; font-weight: 700;">TER</span></span></a>
                    </div>
                    <div class="aneka-produk-img4">
                        <img class="img-fluid" style="object-fit: cover; height: 500px;" src="<?= base_url() ?>/asset/image/headerProduct/tempelfix.jpg" alt="">
                        <a class="aneka-produk-btn4" href="<?= base_url() ?>product/productsById/10"><span style="font-size: 2.5rem; font-weight: 200;">RO<span style="font-size: 2.5rem; font-weight: 700;">BLOCK</span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            var options = {
                autoplay: true,
                autoplaySpeed: 2000,
                infinite: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                infinite: false,
                dots: true,
                // responsive: [{
                //         breakpoint: 1200,
                //         settings: {
                //             slidesToShow: 3,
                //             slidesToScroll: 3,
                //             dots: true,
                //         }
                //     },
                //     {
                //         breakpoint: 992,
                //         settings: {
                //             slidesToShow: 2,
                //             slidesToScroll: 2,
                //             dots: false,
                //         }
                //     },
                //     {
                //         breakpoint: 576,
                //         settings: {
                //             slidesToShow: 1,
                //             slidesToScroll: 1,
                //             dots: false,
                //         }
                //     },
                //     {
                //         breakpoint: 375,
                //         settings: {
                //             slidesToShow: 1,
                //             slidesToScroll: 1,
                //             dots: false,
                //         }
                //     }
                // ]
            };


            const mySlider = $('.aneka-produk').on('init', function(slick) {

                multiSlideAdaptiveHeight(this);

            }).on('beforeChange', function(slick, currentSlide, nextSlide) {

                multiSlideAdaptiveHeight(this);

            }).slick(options);


            function multiSlideAdaptiveHeight(slider) {

                let activeSlides = [];
                let tallestSlide = 0;

                setTimeout(function() {

                    $('.slick-track .slick-active', slider).each(function(item) {

                        activeSlides[item] = $(this).outerHeight();

                    });

                    activeSlides.forEach(function(item) {

                        if (item > tallestSlide) {

                            tallestSlide = item;

                        }

                    });

                    $('.slick-list', slider).height(tallestSlide);

                }, 10);

            }


            $(window).on('resize', function() {

                multiSlideAdaptiveHeight(mySlider);

            });
        });
    </script>
</section>

<section>
    <div class="sec-promo">
        <!-- <div style="padding: 2rem 0;">
            <span style="font-size: 3rem; font-weight: 200; letter-spacing: 8px;">PAGE <span style="font-weight: 700; letter-spacing: 0px;">PROMO</span></span>
        </div> -->

        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col col-lg-8">
                <img class="img-fluid" src="<?= base_url() ?>/asset/LEDBSD.png" alt="">
            </div>

            <div class="col col-lg-4 d-flex flex-column justify-content-center promo-text-konten">
                <span class="promo-text1">Ayo Ambil Promonya</span>
                <span class="promo-text2">Sebelum Kehabisan</span>
                <a href="" style="text-decoration: none; margin-top: 3rem;"><span class="promo-btn">LIHAT PROMO</span></a>
            </div>
        </div>
    </div>
</section>

<section class="sec-servic">
    <div class="py-5" style="background: linear-gradient(184deg, #00000099, #1a1c1e);">
        <div class="container bg-ss">
            <div class="row p-4 p-md-5 p-lg-3 p-sm-5">
                <div class="d-flex flex-column text-center flex-wrap justify-content-center">

                    <div class="text-center justify-content-end mb-5 text-white text-uppercase">
                        <!-- <h2>Service & Support</h2> -->
                    </div>

                    <div class="row gy-5 front-layer">
                        <div class="col-lg-3 col-md-6 align-self-center" style="text-align: left; line-height: 2.5rem;">
                            <span style="font-size: 3rem; font-weight: 100;">SERVICE</span>
                            <span style="font-size: 3rem; font-weight: 700; color: #9b9fa3;">SUPPORT</span>
                        </div>
                        <div class="col-lg-3 col-md-6 service" style="line-height: 2rem;">
                            <div class="img-fluid rounded-3 p-3 py-5 text-white h-100 d-flex flex-column" style="background-color: #f5f5dc0f;">
                                <img class="justi" src=" <?= base_url("asset/image/appreciation-best-marketing-svgrepo-com.svg") ?>" style="width:50%; filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%)); align-self: center;" alt="">
                                <span class="mt-4" style="font-size: 1.5rem; font-weight: 100;">Best Service</span>
                                <span style="font-weight: 300;">Pelayanan terbaik dan profesional.</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 service" style="line-height: 2rem;">
                            <div class="img-fluid rounded-3 p-3 py-5 text-white h-100 d-flex flex-column" style="background-color: #f5f5dc0f;">
                                <img src=" <?= base_url("asset/image/factory-stock-house-svgrepo-com.svg") ?>" style="width:50%; filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%)); align-self: center;" alt="">
                                <span class="mt-4" style="font-size: 1.5rem; font-weight: 100;">Biggest Factory</span>
                                <span style="font-weight: 300;">Pabrik sendiri, terlengkap dan terbesar.</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 service">
                            <div class="img-fluid rounded-3 p-3 py-5 text-white h-100 d-flex flex-column" style="background-color: #f5f5dc0f;">
                                <img src="<?= base_url("asset/image/numb1.svg") ?>" style="width:50%;filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%)); align-self: center; margin-bottom: 1rem;" alt="">
                                <span class="mt-4" style="font-size: 1.5rem; font-weight: 100;">Pioneer</span>
                                <span style="font-weight: 300;">Pelopor di Indonesia</span>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 service">
                            <div class="img-fluid rounded-3 p-3 py-5 text-white h-100 d-flex flex-column" style="background-color: #f5f5dc0f;">
                                <img src="<?= base_url("asset/image/status-good-svgrepo-com.svg") ?>" style="width:50%; filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%)); align-self: center;" alt="">
                                <span class="mt-4" style="font-size: 1.5rem; font-weight: 100;">Good Quality</span>
                                <span style="font-weight: 300;">Produk kami sudah memiliki standar mutu yang tinggi.</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 service">
                            <div class="img-fluid rounded-3 p-3 py-5 text-white h-100 d-flex flex-column" style="background-color: #f5f5dc0f;">
                                <img src="<?= base_url("asset/image/change-svgrepo-com.svg") ?>" style="width:50%;  filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%)); align-self: center;" alt="">
                                <h4 class="mt-4" style="font-size: 1.5rem; font-weight: 100;">Custom</h4>
                                <span style="font-weight: 300;">Jasa custom roster</span>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 service">
                            <div class="img-fluid rounded-3 p-3 py-5 text-white h-100 d-flex flex-column" style="background-color: #f5f5dc0f;">
                                <img src="<?= base_url("asset/image/telemarketer-customer-service-svgrepo-com.svg") ?>" style="width:50%;  filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%)); align-self: center;" alt="">
                                <span class="mt-4" style="font-size: 1.5rem; font-weight: 100;">Sales Support</span>
                                <span style="font-weight: 300;">Memiliki kontak layanan After Sales</span>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 service">
                            <div class="img-fluid rounded-3 p-3 py-5 text-white h-100 d-flex flex-column" style="background-color: #f5f5dc0f;">
                                <img src="<?= base_url("asset/image/brickwall-brick-svgrepo-com.svg") ?>" style="width:50%;  filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%)); align-self: center;" alt="">
                                <span class="mt-4" style="font-size: 1.5rem; font-weight: 100;">installation service</span>
                                <span style="font-weight: 300;">Jasa pasang profesional</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="position: relative; overflow: hidden;">
    <div class="py-5" style="background-image: url(https://demo.bosathemes.com/bosa/corporate-dark/wp-content/uploads/sites/36/2021/03/bosa-corporate-dark-img21.png); background-position: center center; background-repeat: no-repeat; background-size: cover; opacity: 1; transition: background 0.3s, border-radius 0.3s, opacity 0.3s;">
        <div class="container py-5">
            <div class="row py-5">
                <div class="text-center justify-content-end mb-5 text-uppercase">
                    <span style="font-size: 1.7rem; font-weight: 200;">Our <span style="font-weight: 600;">Client</span></span>
                </div>
                <div class="row justify-content-center ms-auto me-auto">
                    <div class="client">
                        <?php foreach ($WebClientLogo as $row) : ?>
                            <div class="col">
                                <div class="box-client mb-5 shadow-sm">
                                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/logoClient/<?= $row["WebCilentLogo"] ?>" alt="">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {

                        // my slick slider options
                        var options = {
                            autoplay: true,
                            autoplaySpeed: 2000,
                            infinite: true,
                            rows: 2,
                            slidesToShow: 6,
                            slidesToScroll: 6,
                            adaptiveHeight: true,
                            dots: true,
                            responsive: [{
                                    breakpoint: 1440,
                                    settings: {
                                        slidesToShow: 6,
                                        slidesToScroll: 6,
                                        dots: true,
                                    }
                                },
                                {
                                    breakpoint: 1200,
                                    settings: {
                                        slidesToShow: 5,
                                        slidesToScroll: 5,
                                        dots: false,
                                    }
                                },
                                {
                                    breakpoint: 992,
                                    settings: {
                                        slidesToShow: 3,
                                        slidesToScroll: 3,
                                        dots: false,
                                    }
                                },
                                {
                                    breakpoint: 576,
                                    rows: 1,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 2,
                                        dots: false,
                                    }
                                }
                            ]
                        };


                        const mySlider = $('.client').on('init', function(slick) {

                            multiSlideAdaptiveHeight(this);

                        }).on('beforeChange', function(slick, currentSlide, nextSlide) {

                            multiSlideAdaptiveHeight(this);

                        }).slick(options);

                        function multiSlideAdaptiveHeight(slider) {

                            let activeSlides = [];
                            let tallestSlide = 0;

                            setTimeout(function() {

                                $('.slick-track .slick-active', slider).each(function(item) {

                                    activeSlides[item] = $(this).outerHeight();

                                });

                                activeSlides.forEach(function(item) {

                                    if (item > tallestSlide) {

                                        tallestSlide = item;

                                    }

                                });

                                $('.slick-list', slider).height(tallestSlide);

                            }, 10);

                        }

                    });
                </script>
            </div>
        </div>
    </div>

    <!-- <div id="test45" style=" position: absolute; width: 100%; height: 100%; top: 0; left: 0; display: flex; flex-direction: row; flex-wrap: wrap;">
       
    </div> -->
</section>