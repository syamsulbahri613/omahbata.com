<div style="padding-top: 8%; border: 0; background-size: cover;">
    <div class="container">
        <div class="row flex-column text-center justify-content-end" style="height: 100px;">
            <span style="font-size: 2rem; font-weight: 100;">CUSTOMER ORDER</span>
        </div>

        <div class="d-flex flex-column justify-content-center p-lg-4 mt-4 mb-5">
            <div class="d-flex flex-column flex-lg-row gap-1 navaddOrder mb-4" id="nav-tab" role="tablist">
                <span class="nav-link addOrder active" id="nav-pesanan-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-pesanan" type="button" role="tab" aria-controls="nav-pesanan"
                    aria-selected="true">Pesanan</span>
                <span class="nav-link addOrder" id="nav-pengiriman-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-pengiriman" type="button" role="tab" aria-controls="nav-pengiriman"
                    aria-selected="false" disabled>Pengiriman</span>
                <span class="nav-link addOrder" id="nav-pembayaran-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-pembayaran" type="button" role="tab" aria-controls="nav-pembayaran"
                    aria-selected="false" disabled>Pembayaran</span>
            </div>

            <div class="tab-content" id="nav-tabContent" style="background: #323538;">
                <div class="tab-pane fade show active" id="nav-pesanan" role="tabpanel"
                    aria-labelledby="nav-pesanan-tab" tabindex="0">

                    <div class="px-3 px-lg-5 py-4">
                        <span style="font-size: 1.125rem; font-weight: 600; letter-spacing: 2px;"><i
                                class="fas fa-box-open"></i> Produk dipesan</span>
                    </div>

                    <?php foreach($product as $item) : ?>
                    <div class="d-flex flex-column flex-lg-row pt-3 pb-5 gap-5 px-lg-5 px-3 align-items-lg-center">
                        <div style="width: 150px; padding: 0.5rem; background: white;">
                            <?php
                                $url = base_url()."asset/image/produk/".$item["MsProdukId"]."/".$item["MsProdukCode"]."";

                                // Menambahkan "_1" pada akhir URL
                                $url_baru = str_replace($item["MsProdukCode"], "".$item["MsProdukCode"]."_1.png", $url);
                             ?>

                            <img src="<?= $url_baru ?>" class="img-fluid" alt="image">
                        </div>

                        <div class="d-flex flex-column gap-2">
                            <span style="font-size: 0.9rem; letter-spacing: 3px;">
                                <?= $item["MsItemCatName"] ?></span>
                            <span style="font-size: 1.7rem; letter-spacing: 3px;">
                                <?= $item["MsProdukName"] ?></span>
                        </div>

                        <div class="d-flex flex-column gap-2">
                            <span style="font-size: 0.9rem; letter-spacing: 3px; line-height: 2;">
                                <?php
                                    $string = $item["MsProdukDetailVarian"];

                                    $split1 = explode("|", $string);
                                        foreach ($split1 as $value) {
                                            $split2 = explode(":", $value);
                                            $key = $split2[0];
                                            $value = $split2[1];
                                            echo $key . ": " . $value . "<br>";
                                        }
                                ?>
                            </span>
                        </div>

                        <div class="d-flex flex-column gap-2">
                            <span style="font-size: 1.1rem; letter-spacing: 3px;">Harga : Rp.
                                <?= number_format($item["MsProdukDetailPrice"]) ?> /<?= $item["SatuanName"] ?></span>
                        </div>

                    </div>
                    <?php endforeach;?>

                    <div class="row row-cols-lg-2 px-3 px-lg-5 py-4 d-flex" style="border-top: 3px solid #1a1c1e;">
                        <div class="col col-lg-12">
                            <div class="row row-cols-1 row-cols-lg-2 d-flex align-items-center">
                                <div class="col col-lg-5 d-flex flex-column gap-2 mb-5">
                                    <span
                                        style="font-size: 0.9rem; font-weight: 500; letter-spacing: 3px;">Catatan</span>
                                    <input type="text" placeholder="(Opsional) Tinggalkan Pesan Ke Penjual"
                                        style="margin: 0; font-size: 13px; padding: 0.6rem; letter-spacing: 2px; font-weight: 300; border: 1px solid #61686e; background-color: transparent; color: #d7d7d7;">
                                </div>
                                <div class="col col-lg-7">
                                    <div class="row row-cols-lg-2">
                                        <div class="col-lg-6 d-flex flex-column gap-2 mb-5">
                                            <span style="font-size: 0.9rem; font-weight: 500; letter-spacing: 3px;">Opsi
                                                Pengiriman</span>

                                            <select
                                                style="margin: 0; font-size: 13px; padding: 0.6rem; letter-spacing: 2px; font-weight: 300; border: 1px solid #61686e; background-color: transparent; color: #d7d7d7;"
                                                aria-label="Default select example">
                                                <option selected>Pilih Pengiriman</option>
                                                <option value="1">Omahbata</option>
                                                <option value="2">Lalamove</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-6 d-flex flex-column gap-2 mb-5">
                                            <span
                                                style="font-size: 0.9rem; font-weight: 500; letter-spacing: 3px;">Biaya
                                                Pengiriman</span>

                                            <span style="font-size: 1rem; font-weight: 200; letter-spacing: 3px;">RP.
                                                150.000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-3 px-lg-5 py-lg-3 pb-3">
                        <span class="sp-alamat-order"><i class="fas fa-map-marker-alt"></i> Alamat Pengiriman</span>
                    </div>
                    <div class="d-flex flex-column px-3 px-lg-5 pb-lg-5 pb-3" id="data-alamat-aktif">

                    </div>

                    <div class="row px-3 px-lg-5 pt-5 d-flex" style="border-top: 15px solid #1a1c1e;">
                        <div class="col col-lg-12">
                            <div class="row row-cols-1 row-cols-lg-2 pb-3">
                                <div class="col col-lg-7 pb-4 pb-lg-0">
                                    <span style="font-size: 0.9rem; font-weight: 500; letter-spacing: 3px;">Gunakan
                                        Voucher</span>
                                </div>
                                <div class="col col-lg-5 text-lg-end">
                                    <span
                                        style="font-size: 0.9rem; font-weight: 500; letter-spacing: 3px; padding: 0.5rem 1.5rem; border: 1px solid white">Pilih
                                        Voucher</span>
                                </div>
                            </div>

                            <hr>
                        </div>
                    </div>

                    <div class="row row-cols-1 gap-5 gap-lg-5 px-3 px-lg-5 py-4 d-flex justify-content-end">
                        <div class="col">

                            <div class="d-flex flex-column flex-lg-row gap-4 justify-content-between">
                                <div class="my-2">
                                    <span class="head-detailprodukorder">Total Pesanan</span><br>
                                    <span class="total-detailprodukorder">1 Produk, Quantity : x<?= $qty; ?></span><br>
                                    <span class="price-detailprodukorder">
                                        <?php
                                            $harga = $item["MsProdukDetailPrice"];
                                            $total = $qty * $harga;
                                            echo 'Rp. '.number_format($total).'';
                                        ?>
                                    </span>
                                </div>

                                <div class="my-2">
                                    <span class="head-detailprodukorder mt-3">Biaya Pengiriman</span><br>
                                    <span class="price-detailprodukorder">Rp. 150.000</span>
                                </div>

                                <div class="my-2">
                                    <span class="head-detailprodukorder mt-3">Discount</span><br>
                                    <span class="price-detailprodukorder">20 %</span>
                                </div>

                                <div class="my-2">
                                    <span class="head-detailprodukorder mt-3">Grand Total</span><br>
                                    <span class="price-detailprodukorder">Rp. 240.000</span>
                                </div>
                            </div>
                        </div>

                        <div class="col justify-content-center justify-content-lg-end d-flex align-items-center">
                            <span
                                style="font-size: 0.7rem; font-weight: 500; cursor: pointer; letter-spacing: 3px; padding: 0.8rem 1rem; border: 1px solid white;"
                                id="select-pengiriman"
                                onClick="selectPengiriman(<?= $this->session->userdata('MsCustomerId') ?>)">Atur
                                Alamat Pengiriman</span>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" style="background: #323538;" id="nav-pengiriman" role="tabpanel"
                    aria-labelledby="nav-pengiriman-tab" tabindex="0">

                </div>

                <div class="tab-pane fade" style=" background: #323538;" id="nav-pembayaran" role="tabpanel"
                    aria-labelledby="nav-pembayaran-tab" tabindex="0">
                    <div class="px-5 py-4 ">
                        <span style="font-size: 1.125rem; font-weight: 600; letter-spacing: 2px;"><i
                                class="fas fa-bookmark"></i> Pembayaran</span>
                    </div>
                    <div class="px-5 pt-3 pb-5">
                        <div class="row row-cols-lg-2 py-4">
                            <div class="col-lg-6">
                                <span>Total Pembayaran</span>
                            </div>

                            <div class="col-lg-6">
                                <span>Rp . 900.000</span>
                            </div>
                        </div>

                        <div class="row row-cols-lg-2 py-4">
                            <div class="col-lg-6">
                                <span>Batas Pembayaran Dalam</span>
                            </div>

                            <div class="col-lg-6">
                                <span>Rp . 900.000</span>
                            </div>
                        </div>

                        <div class="row row-cols-lg-3 py-4">
                            <div class="col col-lg-4">
                                <div class="py-2">
                                    <span style="font-weight: 700; font-size: 1.2rem">Bank BCA</span>
                                </div>

                                <div class="py-1">
                                    <span>No. Rekening: </span>
                                </div>

                                <div class="d-flex align-items-center gap-3">
                                    <div>
                                        <span style="font-size: 1.7rem; letter-spacing: 2px;">1498 0375 990</span>
                                    </div>

                                    <div>
                                        <span style="font-size: 1.2rem; letter-spacing: 3px;">Salin</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-4">
                                <div class="py-2">
                                    <span style="font-weight: 700; font-size: 1.2rem">Bank BNI</span>
                                </div>

                                <div class="py-1">
                                    <span>No. Rekening: </span>
                                </div>

                                <div class="d-flex align-items-center gap-3">
                                    <div>
                                        <span style="font-size: 1.7rem; letter-spacing: 2px;">137 1428 786</span>
                                    </div>

                                    <div>
                                        <span style="font-size: 1.2rem; letter-spacing: 3px;">Salin</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-4">
                                <div class="py-2">
                                    <span style="font-weight: 700; font-size: 1.2rem">Bank MANDIRI</span>
                                </div>

                                <div class="py-1">
                                    <span>No. Rekening: </span>
                                </div>

                                <div class="d-flex align-items-center gap-3">
                                    <div>
                                        <span style="font-size: 1.7rem; letter-spacing: 2px;">101 00 1177976 4</span>
                                    </div>

                                    <div>
                                        <span style="font-size: 1.2rem; letter-spacing: 3px;">Salin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url() ?>user/order">
                            <div class="pt-5 pb-3 d-flex justify-content-center" style="border-top: 3px solid #1a1c1e;">
                                <span
                                    style="width: 250px;  font-size: 0.7rem; font-weight: 500; cursor: pointer; letter-spacing: 3px; padding: 0.8rem 1rem; border: 1px solid white; text-align: center;"
                                    id="select-pengiriman">Ok</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- modal box alamat order start -->
    <div class="modal fade" id="pilihAlamat" tabindex="-1" aria-labelledby="pilihAlamatLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header py-4 border-0"
                    style="background-color: #2e3236; border-radius: 0; letter-spacing: 3px;">
                    <h1 class="modal-title" style="font-size: 1rem;" id="pilihAlamatLabel">Alamat Saya</h1>
                </div>

                <div class="modal-body mbdy">
                    <div id="data-pengiriman" class="d-flex flex-column mt-1">

                    </div>


                    <div class="p-4">
                        <span class="py-3 px-4" type="button" onClick="openAddAlamat()"
                            style="font-size: 0.8rem; letter-spacing: 2px; background: #2e3236; box-shadow: 0px 0px 1px 0px #60676e;"><i
                                class="fas fa-plus"></i> Tambah Alamat
                            Baru</span>
                    </div>
                </div>

                <div class="modal-footer border-0 py-4 rounded-0" style="background: #2e3236;">
                    <button type="button" class="btn rounded-0"
                        style="font-size: 0.8rem; letter-spacing: 2px; border: 1px solid #b3b3b3;  color: #b3b3b3;"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn rounded-0"
                        style="font-size: 0.8rem; letter-spacing: 2px; border: 1px solid #b3b3b3;  color: #b3b3b3;">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal box alamat add start -->
    <div class="modal fade" id="modalUbahAlamat" aria-labelledby="modalUbahAlamatLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header py-4 border-0"
                    style="background-color: #2e3236; border-radius: 0; letter-spacing: 3px;">
                    <h1 class="modal-title" style="font-size: 1rem;" id="modalUbahAlamatLabel">Alamat Baru</h1>
                </div>
                <div class="modal-body mbdy">
                    <div class="row row-cols-2 mb-3">
                        <div class=" col">
                            <input type="text" class="alamatInput" name="namaLengkap" id="namaLengkap"
                                placeholder="Nama Lengkap" aria-label="Username" value="">
                        </div>

                        <div class="col">
                            <input type="text" class="alamatInput" name="nomerTlp" id="nomerTlp"
                                placeholder="Nomor Telepon" aria-label="Server" value="">
                        </div>
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <input type="text" class="alamatInput domisili" name="alamatDomisili"
                            placeholder="Provinsi, Kota, Kecamatan" id="alamatadd" value="">
                    </div>

                    <div class="row mb-3 navDomisili">
                        <nav>
                            <div class=" nav nav-tabs alamatTab" id="nav-tab" role="tablist">
                                <button class="nav-link active alamatLink" name="mark-provinsi" id="nav-provinsi-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-provinsi" type="button" role="tab"
                                    aria-controls="nav-provinsi" aria-selected="true">Provinsi</button>
                                <button class="nav-link alamatLink" name="mark-kota" id="nav-kota-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-kota" type="button" role="tab"
                                    aria-controls="nav-kota" aria-selected="false" disabled>Kota</button>
                                <button class="nav-link alamatLink" name="mark-kecamatan" id="nav-kecamatan-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-kecamatan" type="button" role="tab"
                                    aria-controls="nav-kecamatan" aria-selected="false" disabled>Kecamatan</button>
                                <button class="nav-link alamatLink" name="mark-kelurahan" id="nav-kelurahan-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-kelurahan" type="button" role="tab"
                                    aria-controls="nav-kelurahan" aria-selected="false" disabled>Kelurahan</button>
                                <button class="nav-link alamatLink" name="mark-kodePos" id="nav-kodePos-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-kodePos" type="button" role="tab"
                                    aria-controls="nav-kodePos" aria-selected="false" disabled>Kode Pos</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-provinsi" role="tabpanel"
                                aria-labelledby="nav-provinsi-tab" tabindex="0">
                                <ul id="provinsi" class="list-group alamatListGroup">

                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-kota" role="tabpanel" aria-labelledby="nav-kota-tab"
                                tabindex="0">

                                <ul id="kota" class="list-group alamatListGroup">

                                </ul>
                            </div>

                            <div class="tab-pane fade" id="nav-kecamatan" role="tabpanel"
                                aria-labelledby="nav-kecamatan-tab" tabindex="0">
                                <ul id="kecamatan" class="list-group alamatListGroup">

                                </ul>
                            </div>

                            <div class="tab-pane fade" id="nav-kelurahan" role="tabpanel"
                                aria-labelledby="nav-kelurahan-tab" tabindex="0">
                                <ul id="kelurahan" class="list-group alamatListGroup">

                                </ul>
                            </div>

                            <div class="tab-pane fade" id="nav-kodePos" role="tabpanel"
                                aria-labelledby="nav-kodePos-tab" tabindex="0">
                                <ul id="kodePos" class="list-group alamatListGroup">

                                </ul>
                            </div>

                            <input type="hidden" id="customerRef"
                                value="<?= $this->session->userdata('MsCustomerId') ?>">
                        </div>
                    </div>

                    <script>
                    // $(document).ready(function(e) {
                    //     const alamatGenerate = [];

                    //     $.ajax({
                    //         url: '<?= base_url() ?>user/getProvince',
                    //         method: 'GET',
                    //         dataType: 'JSON',
                    //         success: function(data) {
                    //             var text = "";
                    //             data.forEach((d) => {
                    //                 text +=
                    //                     `<li class="list-group-item list-group-item-action border-0 alamatLi" onClick="selectProvinsi(${d.province_code}, '${d.province_name}')" value="${d.province_code}">${d.province_name}</li>`;
                    //             })
                    //             $("#provinsi").html(text);
                    //         },
                    //         error: function(msg) {

                    //         }
                    //     });

                    //     $(".domisili").focus(
                    //         function() {
                    //             $(".navDomisili").css("display", "block");
                    //             $(".navDomisili").on("click", function() {
                    //                 $('.domisili').trigger('focus');
                    //             });
                    //         }
                    //     );

                    // $(".domisili").focusout(
                    //     function() {
                    //         $(".navDomisili").css("display", "none")
                    //     },
                    // );

                    selectProvinsi = function(idProvinsi, textProvinsi) {

                        alamatGenerate.push(textProvinsi);
                        console.log(alamatGenerate);

                        $.ajax({
                            url: '<?= base_url() ?>/user/getCity/' + idProvinsi + '',
                            method: 'GET',
                            dataType: 'JSON',
                            success: function(data) {
                                console.log(data);
                                var textKota = "";
                                data.forEach((d) => {
                                    textKota +=
                                        `<li class="list-group-item list-group-item-action alamatLi" onClick="selectKota('${d.city}')" value="${d.province_code}">${d.city}</li>`;
                                })
                                $("#kota").html(textKota);
                                $('.nav-tabs button[data-bs-target="#nav-kota"]').prop(
                                    "disabled", false);
                                $('.nav-tabs button[data-bs-target="#nav-kota"]').tab(
                                    'show');
                            },
                            error: function(msg) {
                                console.log(msg);
                            }
                        });
                        $("#alamatadd").val(alamatGenerate);
                    };

                    selectKota = function(idKota) {

                        alamatGenerate.push(idKota);
                        console.log(alamatGenerate);

                        $.ajax({
                            url: '<?= base_url() ?>/user/getsub_district/' +
                                decodeURIComponent(
                                    idKota) + '',
                            method: 'GET',
                            dataType: 'JSON',
                            success: function(data) {
                                console.log(data);
                                var textKecamatan = "";
                                data.forEach((d) => {
                                    textKecamatan +=
                                        `<li class="list-group-item list-group-item-action alamatLi" onClick="selectKecamatan('${d.sub_district}')" value="${d.province_code}">${d.sub_district}</li>`;
                                })
                                $("#kecamatan").html(textKecamatan);
                                $('.nav-tabs button[data-bs-target="#nav-kecamatan"]')
                                    .prop(
                                        "disabled", false);
                                $('.nav-tabs button[data-bs-target="#nav-kecamatan"]')
                                    .tab(
                                        'show');
                            },
                            error: function(msg) {
                                console.log(msg);
                            }
                        });
                        $("#alamatadd").val(alamatGenerate);
                    };

                    selectKecamatan = function(idKecamatan) {
                        alamatGenerate.push(idKecamatan);
                        console.log(alamatGenerate);

                        $.ajax({
                            url: '<?= base_url() ?>/user/getUrban/' + decodeURIComponent(
                                idKecamatan) + '',
                            method: 'GET',
                            dataType: 'JSON',
                            success: function(data) {
                                console.log(data);
                                var textKecamatan = "";
                                data.forEach((d) => {
                                    textKecamatan +=
                                        `<li class="list-group-item list-group-item-action alamatLi" onClick="selectKelurahan('${d.urban}')" value="${d.province_code}">${d.urban}</li>`;
                                })
                                $("#kelurahan").html(textKecamatan);
                                $('.nav-tabs button[data-bs-target="#nav-kelurahan"]')
                                    .prop(
                                        "disabled", false);
                                $('.nav-tabs button[data-bs-target="#nav-kelurahan"]')
                                    .tab(
                                        'show');
                            },
                            error: function(msg) {
                                console.log(msg);
                            }
                        })
                        $("#alamatadd").val(alamatGenerate);
                    };

                    selectKelurahan = function(idKelurahan) {
                        alamatGenerate.push(idKelurahan);
                        console.log(alamatGenerate);

                        $.ajax({
                            url: '<?= base_url() ?>/user/getKodePos/' + decodeURIComponent(
                                idKelurahan) + '',
                            method: 'GET',
                            dataType: 'JSON',
                            success: function(data) {
                                console.log(data);
                                var textKelurahan = "";
                                data.forEach((d) => {
                                    textKelurahan +=
                                        `<li class="list-group-item list-group-item-action alamatLi" onClick="selectKodePos('${d.postal_code}')" value="${d.province_code}">${d.postal_code}</li>`;
                                })
                                $("#kodePos").html(textKelurahan);
                                $('.nav-tabs button[data-bs-target="#nav-kodePos"]')
                                    .prop(
                                        "disabled", false);
                                $('.nav-tabs button[data-bs-target="#nav-kodePos"]')
                                    .tab(
                                        'show');
                            },
                            error: function(msg) {
                                console.log(msg);
                            }
                        })
                        $("#alamatadd").val(alamatGenerate);
                    };

                    selectKodePos = function(idKodePos) {
                    alamatGenerate.push(idKodePos);
                    console.log(alamatGenerate);

                    $('.nav-tabs button[data-bs-target="#nav-kelurahan"]').prop(
                        "disabled", true);
                    $("#alamatadd").val(alamatGenerate);
                    }

                    });
                    </script>

                    <div class="input-group mb-3">
                        <textarea class="alamatInput" id="detailAlamat" placeholder="Nama Jalan, Gedung, No Rumah"
                            aria-label="Username"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="alamatInput" id="noteAlamat"
                            placeholder="Delail Lainnya (No rumah, block, atau patokan)" aria-label="Username">
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Atur Sebagai Alamat
                            Utama</label>
                    </div>
                </div>
                <div class="modal-footer border-0 py-4 rounded-0" style="background: #2e3236;">
                    <button type="button" class="btn rounded-0"
                        style="font-size: 0.8rem; letter-spacing: 2px; border: 1px solid #b3b3b3;  color: #b3b3b3;"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn rounded-0" id="btn-alamat"
                        style="font-size: 0.8rem; letter-spacing: 2px; border: 1px solid #b3b3b3;  color: #b3b3b3;">OK</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    pilihAlamat = function(id) {

        $("#pilihAlamat").modal("show");

        $.ajax({
            method: "POST",
            dataType: "json",
            url: "<?= site_url("function/FunctionUser/getAlamatCustomerByIdAll/") ?>" +
                id,
            success: function(data) {
                dataAddress = data;
                load_data_select_address();
            }
        });
    };

    openUbahAlamat = function(id) {
        $("#modalUbahAlamat").modal("show");

        $.ajax({
            method: "POST",
            dataType: "json",
            url: "<?= site_url("function/FunctionUser/getAlamatCustomerByActv/") ?>" +
                id,
            success: function(data) {
                dataAddressAct = data;
                // set_modal_action($("#modal-action"), del_address[id], 0);
            }
        });

        $("#namaLengkap").val(dataAddressAct['namaCustomerAddress']);
        $("#nomerTlp").val(dataAddressAct['MsCustomerDeliveryTelp']);
        $("#alamatDomisili").val(dataAddressAct['MsCustomerDeliveryAddress']);
    }

    var req_status_add = 0;

    $("#btn-alamat").click(function() {
        var namaCustomerAddress = $("#namaLengkap").val();
        var customerAddressTlp = $("#nomerTlp").val();
        var detailCustomerAddress = $("#detailAlamat").val();
        var noteCustomerAddress = $("#noteAlamat").val();
        var domisiliCustomerAddress = $("#alamatadd").val();
        var customerRef = $("#customerRef").val();

        if (!req_status_add) {
            $("#btn-alamat").html('<i class="fas fa-circle-notch fa-spin"></i> Loading');

            $.ajax({
                type: 'POST',
                url: "<?= site_url("function/FunctionUser/alamatAdd/") ?>",
                data: {
                    namaCustomerAddress: namaCustomerAddress,
                    customerAddressTlp: customerAddressTlp,
                    detailCustomerAddress: detailCustomerAddress,
                    noteCustomerAddress: noteCustomerAddress,
                    domisiliCustomerAddress: domisiliCustomerAddress,
                    customerRef: customerRef
                },
                before: function() {
                    req_status_add = 1;
                },
                success: function(data) {
                    req_status_add = 0;
                    $("#btn-alamat").html("Ok");
                    Swal.fire({
                        icon: 'success',
                        text: 'Alamat Berhasil Ditambahkan',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        timer: 1500,
                    })
                },
                error: function(err) {
                    Swal.fire({
                        icon: 'error',
                        text: err,
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        timer: 1500
                    });
                }
            })
        }

    });
    </script>
    <!-- modal box alamat end -->
</div>

<script>
$(document).ready(function() {
    $.ajax({
        method: "POST",
        dataType: "json",
        url: "<?= site_url("function/FunctionUser/getAlamatCustomerById/"+$_SESSION['MsCustomerId']) ?>",
        success: function(data) {
            dataAddress = data;
            load_data_delivery();
        }
    });
});



// selectPengiriman = function(id) {
//     $('.navaddOrder span[data-bs-target="#nav-pengiriman"]').prop(
//         "disabled", false);
//     $('.navaddOrder span[data-bs-target="#nav-pengiriman"]').tab(
//         'show');

//     $.ajax({
//         method: "POST",
//         dataType: "json",
//         url: "<?= site_url("function/FunctionUser/getAlamatCustomerById/") ?>" +
//             id,
//         success: function(data) {
//             dataAddress = data;
//             load_data_delivery();
//         }
//     });
// }

prosesPesanan = function() {
    $('.navaddOrder span[data-bs-target="#nav-pembayaran"]').prop(
        "disabled", false);
    $('.navaddOrder span[data-bs-target="#nav-pembayaran"]').tab(
        'show');
}

load_data_delivery = function() {
    var htmldelivery = "";
    for (var i = 0; dataAddress.length > i; i++) {
        if (dataAddress[i]["customerAddressType"] == 1) {
            htmldelivery =
                '<div id="card-delivery" class="card shadow-sm card-delivery select" style="background: #46494c; padding: 1.5rem 0;">';
            htmldelivery += '  <input id="MsCustomerDeliveryId" value="' + dataAddress[i]["idCustomerAddress"] +
                '" style="display:none"/>';
            htmldelivery += '  <div class="p-2 ps-4">';
            htmldelivery +=
                '      <span class="card-title fw-bold" style="letter-spacing: 2px; font-size: 1.2rem;">' +
                dataAddress[i]["namaCustomerAddress"] +
                '</span>';
            htmldelivery += '      <span class="card-text" style="font-size: 0.9rem; letter-spacing: 1px;"> | ' +
                dataAddress[i]["customerAddressTlp"] + '</span>';
            htmldelivery +=
                '      <span class="card-text" style="font-size: 0.8rem; padding: 0.2rem 1rem; background: #383a3c; border-radius: 0.2rem; letter-spacing: 2px;">Utama</span><br>';
            htmldelivery += '      <div class="py-3 d-flex align-items-center text-secondary">';
            htmldelivery += '          <i class="fas fa-map-marker-alt fa-2x pe-2"></i>';
            htmldelivery +=
                '          <a class="a-alamat" target="_blank" href="https://www.google.co.id/maps/search/' +
                dataAddress[i]["detailCustomerAddress"] +
                ' , ' + dataAddress[i]["domisiliCustomerAddress"] + '"><span class="label-small">' + dataAddress[i][
                    "detailCustomerAddress"
                ] +
                ' , ' + dataAddress[i]["domisiliCustomerAddress"] + '</span><br></a>';
            htmldelivery += '      </div>';
            htmldelivery += '      <span class="card-text">Note :  ' + dataAddress[i]["noteCustomerAddress"] +
                '</span>';
            htmldelivery += '  </div>';
            htmldelivery += '  <div class="d-flex flex-row ms-4 card-delivery-action my-1">';
            htmldelivery +=
                '      <a class="action-label a-ubah" onclick="openUbahAlamat(' +
                dataAddress[i]["idCustomerAddress"] + ')" >Ubah</a>';
            htmldelivery +=
                '      <a class="action-label a-pilih" onclick="pilihAlamat(' + dataAddress[i][
                    "customerRef"
                ] + ')" >Pilih Alamat Lain / Tambah ALamat</a>';
            htmldelivery += '</div>';
            $("#data-alamat-aktif").html(htmldelivery);
            del_id = dataAddress[i]["idCustomerAddress"];

        } else if (dataAddress[i]["idCustomerAddress"] == del_id) {
            htmldelivery =
                '<div id="card-delivery" class="card shadow-sm card-delivery select" style="background: #46494c; padding: 1.5rem 0;">';
            htmldelivery += '  <input id="MsCustomerDeliveryId" value="' + dataAddress[i]["idCustomerAddress"] +
                '" style="display:none"/>';
            htmldelivery += '  <div class="p-2 ps-4">';
            htmldelivery +=
                '      <span class="card-title fw-bold" style="letter-spacing: 2px; font-size: 1.2rem;">' +
                dataAddress[i]["namaCustomerAddress"] +
                '</span>';
            htmldelivery += '      <span class="card-text" style="font-size: 0.9rem; letter-spacing: 1px;"> | ' +
                dataAddress[i]["customerAddressTlp"] + '</span><br>';
            htmldelivery += '      <div class="py-3 d-flex align-items-center text-secondary">';
            htmldelivery += '          <i class="fas fa-map-marker-alt fa-2x pe-2"></i>';
            htmldelivery +=
                '          <a class="a-alamat" target="_blank" href="https://www.google.co.id/maps/search/' +
                dataAddress[i]["detailCustomerAddress"] +
                ' , ' + dataAddress[i]["domisiliCustomerAddress"] + '"><span class="label-small">' + dataAddress[i][
                    "detailCustomerAddress"
                ] +
                ' , ' + dataAddress[i]["domisiliCustomerAddress"] + '</span><br></a>';
            htmldelivery += '      </div>';
            htmldelivery += '      <span class="card-text">Note :  ' + dataAddress[i]["noteCustomerAddress"] +
                '</span>';
            htmldelivery += '  </div>';
            htmldelivery += '  <div class="d-flex flex-row ms-4 card-delivery-action my-1">';
            htmldelivery +=
                '      <a style="cursor: pointer; margin-right: 1rem;" class="action-label" onclick="ubah_data_delivery(' +
                i + ')" >Ubah</a>';
            htmldelivery += '      <a style="cursor: pointer;" class="action-label" onclick="pilih_data_delivery(' +
                dataAddress[i]["idCustomerAddress"] + ')" >Pilih Alamat Lain / Tambah ALamat</a>';
            htmldelivery += '</div>';
            $("#data-alamat-aktif").html(htmldelivery);
        }
    }
    $("#MsDeliveryIsActive").trigger("change");
}

pilih_data_delivery = function() {
    if (typeof window.ajaxRequestSingle !== "undefined") {
        window.ajaxRequestSingle.abort();
    }

    window.ajaxRequestSingle = $.ajax({
        method: "POST",
        url: "<?= site_url("message/message_sales/data_delivery_select/") ?>" + $("#MsCustomerId").val(),
        success: function(data) {
            $("#dialog-customer").html(data);
            $("#modal-action").modal("hide");
            set_modal_select($("#modal-action"));
        }
    });
}

function load_data_select_address() {
    var htmlAddress = "";
    var htmlAction = "";
    var orderflex = 2;
    for (var i = 0; dataAddress.length > i; i++) {
        if (dataAddress[i]["customerAddressType"] == 1) {
            htmlAddress +=
                '<div  class="card shadow-sm card-delivery order-1 delivery-select active" data-value="' +
                dataAddress[i]["idCustomerAddress"] + '" data-index="' + i + '" >';
            htmlAction =
                '      <a class="action-label" style="cursor: pointer;" onclick="change_delivery_select(' + i +
                ')" >Ubah</a>';
        } else {
            htmlAddress +=
                '<div  class="card shadow-sm card-delivery order-' +
                orderflex +
                ' delivery-select" data-value="' + dataAddress[i]["idCustomerAddress"] +
                '">';
            orderflex++;
            htmlAction =
                '      <a class="action-label" style="cursor: pointer;" onclick="change_delivery_select(' + i +
                ')" >Ubah</a>';
            htmlAction += '      <div class="action-space"></div>';
            htmlAction +=
                '      <a class="action-label" style="cursor: pointer;" onclick="set_delivery_select(' + i +
                ')" >Jadikan Alamat Utama</a>';
        }
        htmlAddress += '  <div class="p-2 ps-4" style="letter-spacing: 1px;">';
        htmlAddress += '      <span class="card-title fw-bold" style="font-size: 1.2rem; letter-spacing: 4px;">' +
            dataAddress[i][
                "namaCustomerAddress"
            ] + (
                dataAddress[i]["customerAddressType"] == 1 ?
                '&nbsp;<span class="badge text-bg-warning">Utama</span>' : "") +
            '</span><br>';
        htmlAddress += '      <span class="card-text">' + dataAddress[i][
                "customerAddressTlp"
            ] +
            '</span><br>';
        htmlAddress +=
            '      <div class="py-2 d-flex align-items-center text-secondary">';
        htmlAddress += '          <i class="fas fa-map-marker-alt fa-2x pe-2"></i>';
        htmlAddress += '          <span class="label-small" style="letter-spacing: 2px;">' + dataAddress[i][
                "detailCustomerAddress"
            ] + ' <br> ' + dataAddress[i]["domisiliCustomerAddress"] +
            '</span>';
        htmlAddress += '      </div>';
        htmlAddress += '          <span class="label-small">Note :  ' + dataAddress[i]["noteCustomerAddress"] +
            '</span>';
        htmlAddress += '  </div>';
        htmlAddress +=
            '  <div class="d-flex flex-row ms-4 card-delivery-action my-1 gap-2">';
        htmlAddress += htmlAction;
        htmlAddress += '  </div>';
        htmlAddress += '</div>';
    }
    $("#data-pengiriman").html(htmlAddress);
};
</script>