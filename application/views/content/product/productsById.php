<div style=" padding-top: 10%;">

    <div class="product-nav">
        <?php foreach ($productKategoriById as $item) : ?>
            <?php $catid = $item['CategoryRef']; ?>
            <span style="font-size: 2rem; font-weight: 700;"><?= $item['CategoryDetailHeader'] ?></span>
        <?php endforeach; ?>
        <div class="drop">
        <span>Category</span>
            <button class="dropbtn-product"><i class="fas fa-chevron-down fs-5"></i></button>
            <div class="drop-content-product">
                <a href="<?= base_url() ?>product/productsById/5">BATA EXPOSE</a>
                <a href="<?= base_url() ?>product/productsById/6">BATA TEMPEL</a>
                <a href="<?= base_url() ?>product/productsById/1">ROSTER WHITE</a>
                <a href="<?= base_url() ?>product/productsById/2">ROSTER RED</a>
                <a href="<?= base_url() ?>product/productsById/3">ROSTER SEMEN</a>
                <a href="<?= base_url() ?>product/productsById/4">ROSTER TANAH LIAT</a>
                <a href="<?= base_url() ?>/product/productsById/10">ROBLOCK</a>
            </div>
        </div>
        <input style="background: none; border: 1px solid #c5c5c5; padding: 0.3rem;" type="text">
        <button class="px-3" style="background: slategray; border: 1px solid slategray; padding: 0.3rem;"><i class="fas fa-search text-light"></i></button>
    </div>

    <div class="container mt-5 pb-2">
        <hr class="pb-5">
        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-1 g-md-2" id="data-item" data-index="0">

        </div>
    </div>

    <script>
        var loaddata = true;
        var request; // Stores the XMLHTTPRequest object
        var timeout; // Stores time
        $(window).scroll(function() {
            if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                if (loaddata) {
                    load_data();
                }
            }
        });
        load_data = function() {
            $(".loading").css("display", "block");
            request = $.ajax({
                url: "<?= base_url("product/getitem/")  . $catid . "/" ?>" + $("#data-item").data("index"),
                success: function(data) {
                    if (data != "") {
                        $("#data-item").append(data);
                        $("#data-item").data("index", parseInt($("#data-item").data("index")) + 20);
                    } else {
                        loaddata = false;
                    }
                    $(".loading").css("display", "none");
                    timeout = request = null;
                    if ($('img.lazy').length) {
                        $('img.lazy').lazy({
                            effect: 'fadeIn',
                            visibleOnly: true,
                            onError: function(element) {
                                console.log('error loading ' + element.data('src'));
                            },
                            afterLoad: function(element) {
                                console.log('after loading ' + element.data('src'));
                                $(element).removeClass('skeleton');
                            }

                        }).removeClass('lazy').addClass('lazyloaded');
                    }
                }
            });

            timeout = setTimeout(function() {
                if (request) {
                    request.abort();
                    $(".loading").css("display", "none");
                }
            }, 10000);
        }
        load_data();
    </script>
</div>