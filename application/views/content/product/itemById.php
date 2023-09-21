
<div class="contain-PI">
    <div class="container-fluid p-lg-5">
        <?php foreach ($MsitemById as $item) : ?>
        <div class="row row-cols-1 row-cols-lg-2 py-lg-5 px-lg-3 shadow-sm pb-5">
            <div class="col-lg-5 py-3 text-center d-flex justify-content-center"
                style="background: #292a2b; border-radius: 0.5rem;">
                <div class="row-2">
                    <div style="width: 100%; padding: 1rem;">
                        <?php
                        $url = base_url()."asset/image/produk/".$item["MsProdukId"]."/".$item["MsProdukCode"]."";

                        // Menambahkan "_1" pada akhir URL
                        $url_baru = str_replace($item["MsProdukCode"], "".$item["MsProdukCode"]."_1.png", $url);
                    ?>
                        <img style="width: 100%; max-height: 600px; object-fit: contain;" src="<?= $url_baru ?>"
                            id="containerShow" alt="">
                    </div>

                    <div class="d-flex gap-1 flex-wrap" style="width: 100%; height: auto; padding: 1rem;"
                        id="list-produk">
                        <!-- <img style="width: 100%; height: 100%;" onclick="show(this)"
                                src=""
                                alt="image"> -->

                        <script>
                        var data_image = <?= JSON_ENCODE($produkimage) ?>;

                        function load_data_image() {
                            var html = "";
                            for (var i = 0; i < data_image.length; i++) {
                                html += `
                                        <div class="imgSub">
                                        <img style="width: 70px; height: 70px; object-fit: contain;" onclick="show(this)" src="${data_image[i]}" alt="image">
                                        </div>`;
                                $("#list-produk").html(html);
                            }
                        }
                        load_data_image();
                        </script>

                    </div>
                </div>
            </div>

            <div class="col-lg-7 d-flex px-3 flex-column pt-5 pt-lg-0">
                <div class="headItemByid">
                    <span style="font-weight: 200;"><?= $item["MsItemCatName"] ?> / </span>
                    <span style="font-weight: 500; letter-spacing: 2px;"><?= $item["MsProdukName"] ?></span>
                </div>

                <div
                    style="background-color: #3c3c3c73; margin: 1rem 0; padding: 0.8rem 0; box-shadow: 0px 0px 6px 0.2px #343434;">
                    <div class="contain-price">
                        <span class="pricesale"><i class="fas fa-tags"></i> Rp.
                            <span id="price"> - </span><span class="item-qty">/ <span id="satuan"> - </span>
                            </span></span>
                        <span class="pricedsc">
                            Rp. 1.500 </span>
                    </div>

                    <div class="contain-promo">
                        <div class="img-promo">
                            <img class="img-fluid" src="<?= base_url() ?>/asset/image/obilogo.png" alt="">
                        </div>

                        <span style="font-size: 1.2rem; font-weight: 700; letter-spacing: 2px;">Promo OBI-Sale</span>
                    </div>
                </div>

                <?php
                     $varian = (explode(";",$item["MsProdukVarian"]));
                    foreach($varian as $row){
                        $varheader = (explode(":",$row));
                        if($varheader[0] != "Vendor"){
                            echo '<div class="row row-cols-2 py-4">
                        <div class="col-3">
                            <span class="headtextVarian">'.$varheader[0].'</span>
                        </div>
                        <span class="col-9 d-flex flex-wrap gap-2">';

                        $vardetail = (explode("|",$varheader[1]));
                        $k = 0;
                        foreach($vardetail as $rows){
                            echo '  
                            <span class="varian-btn" id="'.$varheader[0].'" data-var="'.$rows.'">'.$rows.'</span>';
                        }
                        echo '</span></div>';
                        }
                        
                    }
                ?>

                <div class="row row-cols-1 row-cols-sm-2 py-4">
                    <div class="col col-sm-3">
                        <span class="headtextVarian">Kuantitas</span>
                    </div>

                    <div class="col col-sm-9 mt-sm-0 mt-3 d-flex flex-wrap gap-2">
                        <div class="keranjang">
                            <div class="numbers-row">
                                <div class="dec btn-chart-nav" id="qtydown">-</div>
                                <input type="number" name="qtycart" class="input-text-keranjang" id="qtycart"
                                    value="10">
                                <div class="inc btn-chart-nav" id="qtyup">+</div>
                            </div>
                            <span style="align-self: center; letter-spacing: 1px">Stok tersisa : 190</span>
                        </div>

                        <script>
                        var inputQty = document.getElementById("qtycart");
                        inputQty.addEventListener("input", function() {
                            if (this.value.length > 5) {
                                this.value = this.value.slice(0, 5);
                            }
                        });
                        </script>

                    </div>
                </div>

                <div class="d-flex flex-column flex-lg-row gap-2">
                    <!-- <button class="btn-buy">Beli Langsung</button> -->

                    <a class="btn-buy text-decoration-none text-center" id="btn-order">Beli
                        Langsung</a>

                    <!-- <?php if ($this->session->userdata("login_status") == true){?>
                    <button class="btn-buy" onClick="addOrder(this)" data-msitemref="<?= $item["MsProdukId"] ?>"
                        data-token="<?= $this->session->userdata("MsCustomerTokenGmail") ?>">Beli Langsung</button>
                    <?php }else {?>
                    <a href="<?= base_url() ?>/signIn">
                        <button class="btn-buy">Beli Langsung</button>
                    </a>
                    <?php }?> -->

                    <?php if ($this->session->userdata("login_status") == true){?>
                    <button class="btn-chart" onClick="addCart(this)" data-msitemref="<?= $item["MsProdukId"] ?>"
                        data-token="<?= $this->session->userdata("MsCustomerTokenGmail") ?>"> + Keranjang</button>
                    <?php }else {?>
                    <a class="btn-chart text-center text-decoration-none" href="<?= base_url() ?>/signIn"> +
                        Keranjang</a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <div class="container-fluid p-lg-5">
        <div class="row row-cols-1 row-cols-lg-2 px-3 flex-column-reverse flex-lg-row">
            <div class="col col-lg-5 p-0">

                <div class="my-2 my-lg-5 py-3 px-lg-5">
                    <span class="head-gallery">Gallery
                        Product</span>
                </div>

                <div class="row px-3 px-lg-5 row-cols-1 row-cols-sm-2 row-cols-lg-1 row-cols-xl-2 text-center">
                    <?php foreach ($DataProjectItem as $item2) : ?>
                    <a href="<?= base_url() ?>project/projectById/<?= $item2["CustomerProjectId"] ?>"
                        class="itemProject col mb-5 d-flex flex-column">
                        <img class="img-fluid" style="height: 15vh; object-fit: cover;"
                            src="<?= base_url() ?>/asset/image/project/<?= $item2["CustomerProjectHeaderImg"] ?>"
                            alt="">
                        <span class="head-titlegallery"><?= $item2["CustomerProjectTitle"] ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-lg-7 p-0 p-lg-3">
                <div class="my-2 my-lg-5 py-3" style="background-color: #2d3032;">
                    <span class="head-detailItem">Spesifikasi
                        Produk</span>
                </div>

                <div class="row row-cols-2 p-3">
                    <div class="col-6 col-lg-4">
                        <span style="font-size: 1.6vh;">Kode Produk</span>
                    </div>

                    <div class="col-6 col-lg-5">
                        <span style="font-size: 1.6vh;">BXP00001</span>
                    </div>
                </div>

                <div class="row row-cols-2 p-3">
                    <div class="col-6 col-lg-4">
                        <span style="font-size: 1.6vh;">Kategori</span>
                    </div>

                    <div class="col-6 col-lg-5">
                        <span style="font-size: 1.6vh;">ROSTER</span>
                    </div>
                </div>

                <div class="row row-cols-2 p-3">
                    <div class="col-6 col-lg-4">
                        <span style="font-size: 1.6vh;">Berat</span>
                    </div>

                    <div class="col-6 col-lg-5">
                        <span style="font-size: 1.6vh;">3kg</span>
                    </div>
                </div>

                <div class="row row-cols-2 p-3">
                    <div class="col-6 col-lg-4">
                        <span style="font-size: 1.6vh;">Satuan</span>
                    </div>

                    <div class="col-6 col-lg-5">
                        <span style="font-size: 1.6vh;">PCS</span>
                    </div>
                </div>

                <div class="row row-cols-2 p-3">
                    <div class="col-6 col-lg-4">
                        <span style="font-size: 1.6vh;">Volume</span>
                    </div>

                    <div class="col-6 col-lg-5">
                        <span style="font-size: 1.6vh;">25 /Pcs</span>
                    </div>
                </div>

                <div class="row row-cols-2 p-3">
                    <div class="col-6 col-lg-4">
                        <span style="font-size: 1.6vh;">Dikirim Dari</span>
                    </div>

                    <div class="col-6 col-lg-5">
                        <span style="font-size: 1.6vh;">TANGERANG SELATAN</span>
                    </div>
                </div>

                <div class="my-5 py-3" style="background-color: #2d3032;">
                    <span class="head-detailItem">Deskripsi
                        Produk</span>
                </div>

                <div class="row p-3">
                    <div class="pb-3">
                        <span
                            style="font-size: 1.3rem; letter-spacing: 3px; font-weight: 500;"><?= $item["MsItemCatName"] ?>
                            / <?= $item["MsProdukName"] ?></span>
                    </div>

                    <div style="text-align: justify;">
                        <span style="font-size: 1.6vh; line-height: 1.7rem; letter-spacing: 1px;">
                            <?php foreach ($MsitemDeskripsi as $row) : ?>
                            <?= $row["MsItemDeskripsiText"] ?>
                            <?php endforeach;?>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    var size = "";
    var color = "";
    var sizeSelected = false;
    var colorSelected = false;
    var hargatotal = "";
    var idDetail = "";

    $('#qtycart').prop('disabled', true);

    $('.varian-btn#Ukuran').click(function() {
        sizevar = $(this).data("var");
        size = sizevar;

        $('.varian-btn#Ukuran').removeClass('active');
        $(this).addClass('active');
        colorSelected = true;
        validateSelected();

    });

    $('.varian-btn#Warna').click(function() {
        colorvar = $(this).data("var");
        color = colorvar;

        $('.varian-btn#Warna').removeClass('active');
        $(this).addClass('active');
        sizeSelected = true;
        validateSelected();
    });

    function validateSelected() {
        if (colorSelected && sizeSelected) {
            $('#qtycart').prop('disabled', false);
            detailProduk();
            $('#btn-order').on('click', function() {
        var quantity = parseInt($('#qtycart').val());

        window.location.href = '<?= base_url() ?>user/addOrder/<?= $item["MsProdukId"] ?>/'+ idDetail + '?qty=' + quantity;
    });
        } else {
            $('#qtycart').prop('disabled', true);
        }
    }

    function detailProduk() {
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>function/FunctionUser/getItemVarian/<?= $item["MsProdukId"] ?>",
            data: {
                varsize: size,
                varcolor: color,
            },
            dataType: 'json',
            success: function(response) {
                var harga = response[0];
                var satuan = response[1];
                var produkdetail = response[2];
                hargatotal = harga;
                idDetail = produkdetail;
                $('#price').text(harga);
                $('#satuan').text(satuan);
                updateTotalPrice();
            }
        });
    }

    function updateTotalPrice() {
        var quantity = parseInt($('#qtycart').val());
        var pricePerItem = hargatotal;

        if (quantity === '' || isNaN(quantity) || quantity <= 1) {
            quantity = 1;
            $('#qtycart').val(quantity);
        }

        var totalPrice = quantity * pricePerItem;

        $('#price').text(totalPrice);
    }

    $('#qtycart').on('change input', function() {
        updateTotalPrice();
    });

});

function show(imgs) {
    var expandImg = document.getElementById("containerShow");
    expandImg.src = imgs.src;
}

$('#containerShow').imagezoomsl({
    zoomrange: [4, 4],

});
</script>