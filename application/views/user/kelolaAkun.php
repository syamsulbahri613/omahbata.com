<div style="padding: 10% 0%; border: 0;">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col col-lg-3">
                <div class="d-flex flex-column p-1">
                    <div class="row row-cols-2 justify-content-center align-items-center align-self-start">

                        <div class="col-3">
                            <img src="<?= $this->session->userdata('MsCustomerImage') ?>"
                                style="width: 50px; height: 50px;" class="imgUser rounded-circle d-block" alt="...">
                        </div>

                        <div class="col-9">
                            <span
                                style="font-size: 16pt; letter-spacing: 2px; font-weight: 200;"><?= $this->session->userdata('MsCustomerName') ?></span>
                        </div>
                    </div>

                    <div class="d-flex py-5 flex-column">
                        <a class="link-dashboard active" href="<?= base_url() ?>user/kelolaAkun"">
                            <div class=" p-3">
                            <i class="fas px-2 fa-user"></i> <span
                                style="font-size: 1rem; letter-spacing: 4px;">Akun</span>
                    </div>
                    </a>

                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="link-sub-dashboard active" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="true">
                            <div class="p-3">
                                <span>Profile</span>
                            </div>
                        </a>
                        <a class="link-sub-dashboard" id="v-pills-alamatSub-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-alamatSub" type="button" role="tab"
                            aria-controls="v-pills-alamatSub" aria-selected="false">
                            <div class="p-3">
                                <span>Alamat</span>
                            </div>
                        </a>
                    </div>

                    <a class="link-dashboard" href="<?= base_url() ?>user/order"">
                            <div class=" p-3">
                        <i class="fas px-2 fa-clipboard-list"></i> <span
                            style="font-size: 1rem; letter-spacing: 4px;">Order</span>
                </div>
                </a>

                <a class="link-dashboard" href="#" style="text-decoration: none; transition: 0.2s;">
                    <div class="p-3">
                        <i class="fas px-2 fa-bell"></i> <span
                            style="font-size: 1rem; letter-spacing: 4px;">Notifikasi</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col col-lg-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                aria-labelledby="v-pills-profile-tab" tabindex="0">

                <div class="d-flex flex-column py-4" style="background: #2e3236;">
                    <div class="px-4">
                        <span
                            style="font-size: 1.2rem; letter-spacing: 1px; font-weight: 500; align-self: center;">Profil
                            Saya</span>
                    </div>

                    <div class="px-4">
                        <span style="font-size: 1rem; letter-spacing: 1px; font-weight: 200; align-self: center;">Kelola
                            informasi Anda untuk keamanan</span>
                    </div>
                </div>

                <div class="p-4 bg-dark w-100 h-100" style="background: #2e3236;">
                    <div class="row row-col-lg-2 row-col-1 py-5">
                        <div class="col-lg-4">
                            <div class="d-flex flex-column gap-4 justify-content-center align-content-center">
                                <img src="<?= base_url()?>/asset/image/iconobi.png" style="width: 100px; height: 100px;"
                                    class="imgUser rounded-circle mx-auto d-block" alt="...">

                                <div class="text-center">
                                    <span class="px-2 py-1 border border-1">Upload Foto</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="row row-col-lg-2 mb-4">
                                <div class="col-4">
                                    <span>Nama Pengguna</span>
                                </div>

                                <div class="col-8">
                                    <input class="alamatInput" type="text">
                                </div>
                            </div>

                            <div class="row row-col-lg-2 mb-4">
                                <div class="col-4">
                                    <span>Email</span>
                                </div>

                                <div class="col-8">
                                    <input class="alamatInput" type="text">
                                </div>
                            </div>

                            <div class="row row-col-lg-2 mb-4">
                                <div class="col-4">
                                    <span>Nomer Telepon</span>
                                </div>

                                <div class="col-8">
                                    <input class="alamatInput" type="text">
                                </div>
                            </div>

                            <div class="row row-col-lg-2 mb-4">
                                <div class="col-4">
                                    <span>Jenis Kelamin</span>
                                </div>

                                <div class="col-8">
                                    <div class="d-flex gap-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Pria
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Wanita
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Lainnya
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-col-lg-2 mb-4">
                                <div class="col-4">
                                    <span></span>
                                </div>

                                <div class="col-8">
                                    <span class="py-2 px-3 border border-1"
                                        style="font-size: 0.9rem; letter-spacing: 3px;">Simpan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="v-pills-alamatSub" role="tabpanel" aria-labelledby="v-pills-alamatSub-tab"
                tabindex="0">
                <div class="d-flex justify-content-between py-2 py-lg-0 px-1" style="background: #2e3236;">
                    <div class="p-1 p-lg-4" style="align-self: center;">
                        <span class="sp-alamat">Alamat Saya</span>
                    </div>

                    <div class="p-1 p-lg-4">
                        <span class="py-2 px-2 py-lg-3 px-lg-4 text-bg-dark sp-btn-alamat" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"> <i
                                class="fas fa-plus"></i> Tambah Alamat
                            Baru</span>
                    </div>
                </div>

                <div class="p-4 bg-dark w-100 h-100" style="background: #2e3236;">
                    <?php foreach($data as $item) : ?>
                    <?php if($item->customerAddressType == 1) { ?>
                    <div class="row row-cols-lg-2 py-5 mb-4"
                        style="background: #2e3236; box-shadow: 0px 0px 2px 0px #686d72;">
                        <div class="col-lg-8 d-flex flex-column" style="text-align: justify;">
                            <span class="mb-3"
                                style="font-size: 1.7vh; letter-spacing: 2px; font-weight: 600;"><?= $item->namaCustomerAddress ?>
                                | <?= $item->customerAddressTlp ?></span>

                            <span
                                style="font-size: 1.5vh; line-height: 1.8rem; letter-spacing: 1px;"><?= $item->detailCustomerAddress ?></span>
                            <span><?= $item->domisiliCustomerAddress ?></span>

                            <div class="mt-3">
                                <span
                                    style="padding: 0.4rem 0.5rem; font-size: 0.7rem; border: 1px solid #a39c9c; letter-spacing: 2px; color: #d5c8c8;">
                                    Alamat
                                    Utama</span>
                            </div>
                        </div>


                        <div class="col-lg-4">
                            <div class="d-flex justify-content-end gap-1">
                                <span
                                    style="background: grey; padding: 0.5rem 0.8rem; font-size: 0.8rem; cursor: pointer;"><i
                                        class="fas fa-edit"></i></span>
                                <span
                                    style="background: grey; padding: 0.5rem 0.8rem; font-size: 0.8rem; cursor: pointer;"><i
                                        class="fas fa-trash"></i></span>
                            </div>
                        </div>
                    </div>
                    <?php }else { ?>
                    <div class="row row-cols-lg-2 py-5 mb-4"
                        style="background: #2e3236; box-shadow: 0px 0px 2px 0px #686d72;">
                        <div class="col-lg-8 d-flex flex-column" style="text-align: justify;">
                            <span class="mb-3"
                                style="font-size: 1.7vh; letter-spacing: 2px; font-weight: 600;"><?= $item->namaCustomerAddress ?>
                                | <?= $item->customerAddressTlp ?></span>

                            <span
                                style="font-size: 1.5vh; line-height: 1.8rem; letter-spacing: 1px;"><?= $item->detailCustomerAddress ?></span>
                            <span><?= $item->domisiliCustomerAddress ?></span>
                        </div>

                        <div class="col-lg-4">
                            <div class="d-flex justify-content-end gap-1">
                                <span
                                    style="background: grey; padding: 0.5rem 0.8rem; font-size: 0.8rem; cursor: pointer;"><i
                                        class="fas fa-edit"></i></span>
                                <span
                                    style="background: grey; padding: 0.5rem 0.8rem; font-size: 0.8rem; cursor: pointer;"><i
                                        class="fas fa-trash"></i></span>
                                <span
                                    style="background: grey; padding: 0.5rem 0.8rem; font-size: 0.8rem; cursor: pointer;">terapkan
                                    alamat Utama</span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content rounded-0">
            <div class="modal-header py-4 border-0"
                style="background-color: #2e3236; border-radius: 0; letter-spacing: 3px;">
                <h1 class="modal-title" style="font-size: 1rem;" id="exampleModalLabel">Alamat Baru</h1>
            </div>
            <div class="modal-body mbdy">
                <div class="row row-cols-2 mb-3">
                    <div class=" col">
                        <input type="text" class="alamatInput" name="namaLengkap" id="namaLengkap"
                            placeholder="Nama Lengkap" aria-label="Username">
                    </div>

                    <div class="col">
                        <input type="text" class="alamatInput" name="nomerTlp" id="nomerTlp" placeholder="Nomor Telepon"
                            aria-label="Server">
                    </div>
                </div>

                <div style="margin-bottom: 1rem;">
                    <input type="text" class="alamatInput domisili" name="alamatDomisili"
                        placeholder="Provinsi, Kota, Kecamatan" id="alamatadd" value="">
                </div>

                <div class="custom-search" style="display:none;">
                    <div class="row mb-3 navDomisili">
                        <nav>
                            <div class=" nav nav-tabs alamatTab" id="nav-tab" role="tablist">
                                <button class="nav-link active alamatLink" name="mark-provinsi" id="nav-provinsi-tab"
                                    data-bs-toggle="tab" data-type="provinsi" data-bs-target="#provinsi-tab-pane"
                                    type="button" role="tab" aria-controls="nav-provinsi"
                                    aria-selected="true">Provinsi</button>
                                <button class="nav-link alamatLink" name="mark-kota" id="nav-kota-tab"
                                    data-bs-toggle="tab" data-type="kota" data-bs-target="#kota-tab-pane" type="button"
                                    role="tab" aria-controls="nav-kota" aria-selected="false" disabled>Kota</button>
                                <button class="nav-link alamatLink" name="mark-kecamatan" id="nav-kecamatan-tab"
                                    data-type="kecamatan" data-bs-toggle="tab" data-bs-target="#kecamatan-tab-pane"
                                    type="button" role="tab" aria-controls="nav-kecamatan" aria-selected="false"
                                    disabled>Kecamatan</button>
                                <button class="nav-link alamatLink" name="mark-kelurahan" id="nav-kelurahan-tab"
                                    data-type="kelurahan" data-bs-toggle="tab" data-bs-target="#kelurahan-tab-pane"
                                    type="button" role="tab" aria-controls="nav-kelurahan" aria-selected="false"
                                    disabled>Kelurahan</button>
                                <!-- <button class="nav-link alamatLink" name="mark-kodePos" id="nav-kodePos-tab"
                                    data-type="kodePos" data-bs-toggle="tab" data-bs-target="#nav-kodePos" type="button"
                                    role="tab" aria-controls="nav-kodePos" aria-selected="false" disabled>Kode
                                    Pos</button> -->
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active list-group alamatListGroup" id="tab-pane" role="tabpanel"
                                aria-labelledby="tab-pane" tabindex="0">
                            </div>

                            <input type="hidden" id="customerRef"
                                value="<?= $this->session->userdata('MsCustomerId') ?>">
                        </div>
                    </div>

                    <div class="search-text" style="display:none">
                        <div class="tab-content" style="max-height: 15rem;overflow-y:auto;">
                            <div class="tab-pane fade show active list-group " id="list-search" role="tabpanel"
                                aria-labelledby="tab-pane" tabindex="0">
                            </div>
                        </div>
                    </div>

                </div>

                <script>
                $(document).ready(function(e) {

                    var timeoutopen;
                    var opennavDomisili = false;
                    var typenav = "provinsi";
                    var selectcity = {
                        provinsi: {},
                        kota: {},
                        kecamatan: {},
                        kelurahan: {}
                    };
                    $("#alamatadd").focus(function() {
                        $("#alamatadd").val("");
                        load_custom_search(typenav);
                        opennavDomisili = true;
                        closenavDomisili(0);
                    }).focusout(function() {
                        opennavDomisili = false;
                        closenavDomisili(300);

                        if (selectcity["provinsi"]["value"] !== undefined) $("#alamatadd").val(
                            selectcity["provinsi"]["value"]);
                        if (selectcity["kota"]["value"] !== undefined) $("#alamatadd").val(
                            selectcity["provinsi"]["value"] + ", " + selectcity["kota"]["value"]);
                        if (selectcity["kecamatan"]["value"] !== undefined) $("#alamatadd").val(
                            selectcity["provinsi"]["value"] + ", " + selectcity["kota"]["value"] +
                            ", " + selectcity["kecamatan"]["value"]);
                        if (selectcity["kelurahan"]["value"] !== undefined) $("#alamatadd").val(
                            selectcity["provinsi"]["value"] + ", " + selectcity["kota"]["value"] +
                            ", " + selectcity["kecamatan"]["value"] + ", " + selectcity["kelurahan"]
                            [
                                "value"
                            ] + ", " + selectcity["kelurahan"]["kode"]);
                    });
                    closenavDomisili = function(delay) {
                        clearTimeout(timeoutopen);
                        timeoutopen = setTimeout(function() {
                            if (!opennavDomisili) {
                                $(".custom-search").hide();
                            } else {
                                console.log("open search");
                                $(".custom-search").show();
                            }
                        }, delay);
                    }
                    $(".custom-search").hover(
                        function() {
                            opennavDomisili = true;
                            closenavDomisili(0);
                        },
                        function() {
                            if (!$("#alamatadd").is(":focus")) {
                                opennavDomisili = false;
                                closenavDomisili(500);
                            }
                        }
                    );

                    $('.nav-tabs button').on('shown.bs.tab', function(e) {
                        var current_tab = e.target;
                        var previous_tab = e.relatedTarget;
                        console.log($(current_tab).data("type"));
                        $("#alamatadd").focus();
                        load_custom_search($(current_tab).data("type"));
                    });

                    load_custom_search = function(type) {
                        $.ajax({
                            dataType: "json",
                            method: "POST",
                            url: "<?= site_url() ?>user/get_data_city",
                            data: {
                                "type": type,
                                "select": selectcity,
                            },
                            success: function(data) {
                                $("#tab-pane").html("");
                                for (var i = 0; i < data.length; i++) {
                                    var status = "";
                                    if (type == "provinsi") {
                                        if (selectcity["provinsi"]["id"] == data[i]["id"])
                                            status =
                                            "active";
                                    }
                                    if (type == "kota") {
                                        if (selectcity["kota"]["id"] == data[i]["id"]) status =
                                            "active";
                                    }
                                    if (type == "kecamatan") {
                                        if (selectcity["kecamatan"]["id"] == data[i]["id"])
                                            status =
                                            "active";
                                    }
                                    if (type == "kelurahan") {
                                        if (selectcity["kelurahan"]["id"] == data[i]["id"])
                                            status = "active";
                                    }

                                    $("#tab-pane").append(
                                        `<a onclick="custom_click('${type}',this)" class="alamatLi list-group-item list-group-item-action ${status}" data-id="${data[i]["id"]}" data-value="${data[i]["value"]}"  data-kode="${data[i]["kode"]}">${data[i]["text"]}</a>`
                                    )
                                }
                            }
                        });
                    }

                    custom_click = function(type, el) {
                        $("#alamatadd").val("");
                        if (type == "provinsi") {
                            selectcity["provinsi"] = $(el).data();
                            selectcity["kota"] = {};
                            selectcity["kecamatan"] = {};
                            selectcity["kelurahan"] = {};
                            $("#nav-kota-tab").prop("disabled", false);
                            $("#kecamatan-tab").prop("disabled", true);
                            $("#nav-kelurahan-tab").prop("disabled", true);
                            $("#nav-kota-tab").trigger("click");

                            $("#alamatadd").attr("placeholder", selectcity["provinsi"]["value"]);
                            typenav = "kota";
                        }
                        if (type == "kota") {
                            selectcity["kota"] = $(el).data();
                            selectcity["kecamatan"] = {};
                            selectcity["kelurahan"] = {};
                            $("#nav-kecamatan-tab").prop("disabled", false);
                            $("#kelurahan-tab").prop("disabled", true);
                            $("#nav-kecamatan-tab").trigger("click");

                            $("#alamatadd").attr("placeholder", selectcity["provinsi"]["value"] + ", " +
                                selectcity["kota"]["value"]);
                            typenav = "kecamatan";
                        }
                        if (type == "kecamatan") {
                            selectcity["kecamatan"] = $(el).data();
                            selectcity["kelurahan"] = {};
                            $("#nav-kelurahan-tab").prop("disabled", false);
                            $("#nav-kelurahan-tab").trigger("click");

                            $("#alamatadd").attr("placeholder", selectcity["provinsi"]["value"] + ", " +
                                selectcity["kota"]["value"] + ", " + selectcity["kecamatan"]["value"]);
                            typenav = "kelurahan";
                        }
                        if (type == "kelurahan") {
                            selectcity["kelurahan"] = $(el).data();
                            $("#alamatadd").attr("placeholder", selectcity["provinsi"]["value"] + ", " +
                                selectcity["kota"]["value"] + ", " + selectcity["kecamatan"]["value"] +
                                ", " +
                                selectcity["kelurahan"]["value"] + ", " + selectcity["kelurahan"][
                                    "kode"
                                ]);
                            $("#alamatadd").val(selectcity["provinsi"]["value"] + ", " + selectcity["kota"]
                                ["value"] + ", " + selectcity["kecamatan"]["value"] + ", " + selectcity[
                                    "kelurahan"]["value"] + ", " + selectcity["kelurahan"]["kode"]);
                        }
                    }

                    var datatable_search = [];
                    $("#alamatadd").keyup(function() {
                        if ($("#alamatadd").val().length > 0) {
                            $(".search-text").show();
                            $(".navDomisili").hide();
                            $.ajax({
                                dataType: "json",
                                method: "POST",
                                url: "<?= site_url() ?>user/get_data_city_search",
                                data: {
                                    "search": $("#alamatadd").val(),
                                },
                                success: function(data) {
                                    datatable_search = data;
                                    $("#list-search").html("");
                                    for (var i = 0; i < data.length; i++) {
                                        $("#list-search").append(
                                            `<a onclick="search_click(${i})" class="alamatLi list-group-item list-group-item-action" >${data[i]["text"]}</a>`
                                        )
                                    }
                                }
                            });
                        } else {
                            $(".search-text").hide();
                            $(".navDomisili").show();
                        }
                    });

                    search_click = function(index) {
                        selectcity["provinsi"]["id"] = datatable_search[index]["provinsi"]["id"];
                        selectcity["provinsi"]["value"] = datatable_search[index]["provinsi"]["value"];
                        selectcity["kota"]["id"] = datatable_search[index]["kota"]["id"];
                        selectcity["kota"]["value"] = datatable_search[index]["kota"]["value"];
                        selectcity["kecamatan"]["id"] = datatable_search[index]["kecamatan"]["id"];
                        selectcity["kecamatan"]["value"] = datatable_search[index]["kecamatan"]["value"];
                        selectcity["kelurahan"]["id"] = datatable_search[index]["kelurahan"]["id"];
                        selectcity["kelurahan"]["value"] = datatable_search[index]["kelurahan"]["value"];
                        selectcity["kelurahan"]["kode"] = datatable_search[index]["kelurahan"]["kode"];


                        $("#alamatadd").attr("placeholder", selectcity["provinsi"]["value"] + ", " +
                            selectcity["kota"]["value"] + ", " + selectcity["kecamatan"]["value"] + ", " +
                            selectcity["kelurahan"]["value"] + ", " + selectcity["kelurahan"]["kode"]);
                        $("#alamatadd").val(selectcity["provinsi"]["value"] + ", " + selectcity["kota"][
                            "value"
                        ] + ", " + selectcity["kecamatan"]["value"] + ", " + selectcity["kelurahan"][
                            "value"
                        ] + ", " + selectcity["kelurahan"]["kode"]);
                    }

                    // $.ajax({
                    //     url: '<?= base_url() ?>/user/getProvince',
                    //     method: 'GET',
                    //     dataType: 'JSON',
                    //     success: function(data) {
                    //         var text = "";
                    //         data.forEach((d) => {
                    //             text +=
                    //                 `<li class="list-group-item list-group-item-action border-0 alamatLi" onClick="selectProvinsi(${d.MsProvinceId}, '${d.MsProvinceName}')" value="${d.MsProvinceId}">${d.MsProvinceName}</li>`;
                    //         })
                    //         $("#provinsi").html(text);
                    //     },
                    //     error: function(msg) {

                    //     }
                    // });

                    // $(".domisili").focus(
                    //     function() {
                    //         $(".navDomisili").css("display", "block");
                    //         $(".navDomisili").on("click", function() {
                    //             $('.domisili').trigger('focus');
                    //         });
                    //     }
                    // );

                    // $(".domisili").focusout(
                    //     function() {
                    //         $(".navDomisili").css("display", "none")
                    //     },
                    // );

                    // selectProvinsi = function(idProvinsi, textProvinsi) {

                    //     $.ajax({
                    //         url: '<?= base_url() ?>/user/getCity/' + idProvinsi + '',
                    //         method: 'GET',
                    //         dataType: 'JSON',
                    //         success: function(data) {
                    //             console.log(data);
                    //             var textKota = "";
                    //             data.forEach((d) => {
                    //                 textKota +=
                    //                     `<li class="list-group-item list-group-item-action alamatLi" onClick="selectKota(${d.MsRegencyId}, '${d.MsRegencyName}')" value="${d.MsProvinceId}">${d.MsRegencyName}</li>`;
                    //             })
                    //             $("#kota").html(textKota);
                    //             $('.nav-tabs button[data-bs-target="#nav-kota"]').prop(
                    //                 "disabled", false);
                    //             $('.nav-tabs button[data-bs-target="#nav-kota"]').tab('show');
                    //         },
                    //         error: function(msg) {
                    //             console.log(msg);
                    //         }
                    //     });

                    // };

                    // selectKota = function(idKota, valtextKota) {

                    //     $.ajax({
                    //         url: '<?= base_url() ?>/user/getsub_district/' + idKota + '',
                    //         method: 'GET',
                    //         dataType: 'JSON',
                    //         success: function(data) {
                    //             console.log(data);
                    //             var textKecamatan = "";
                    //             data.forEach((d) => {
                    //                 textKecamatan +=
                    //                     `<li class="list-group-item list-group-item-action alamatLi" onClick="selectKecamatan(${d.MsDistrictId}, '${d.MsDistrictName}')" value="${d.MsDistrictId}">${d.MsDistrictName}</li>`;
                    //             })
                    //             $("#kecamatan").html(textKecamatan);
                    //             $('.nav-tabs button[data-bs-target="#nav-kecamatan"]').prop(
                    //                 "disabled", false);
                    //             $('.nav-tabs button[data-bs-target="#nav-kecamatan"]').tab(
                    //                 'show');
                    //         },
                    //         error: function(msg) {
                    //             console.log(msg);
                    //         }
                    //     });

                    // };

                    // selectKecamatan = function(idKecamatan, valTextRegency) {

                    //     $.ajax({
                    //         url: '<?= base_url() ?>/user/getUrban/' + idKecamatan + '',
                    //         method: 'GET',
                    //         dataType: 'JSON',
                    //         success: function(data) {
                    //             console.log(data);
                    //             var textKecamatan = "";
                    //             data.forEach((d) => {
                    //                 textKecamatan +=
                    //                     `<li class="list-group-item list-group-item-action alamatLi" onClick="selectKelurahan(${d.MsVillageId}, '${d.MsVillageName}')" value="${d.MsVillageId}"><b>${d.MsVillageKodePos}</b> , ${d.MsVillageName}</li>`;
                    //             })
                    //             $("#kelurahan").html(textKecamatan);
                    //             $('.nav-tabs button[data-bs-target="#nav-kelurahan"]').prop(
                    //                 "disabled", false);
                    //             $('.nav-tabs button[data-bs-target="#nav-kelurahan"]').tab(
                    //                 'show');
                    //         },
                    //         error: function(msg) {
                    //             console.log(msg);
                    //         }
                    //     })

                    // };

                    // selectKelurahan = function(idKelurahan, valTextKelurahan) {

                    //     $.ajax({
                    //         url: '<?= base_url() ?>/user/getKodePos/' + decodeURIComponent(
                    //             idKelurahan) + '',
                    //         method: 'GET',
                    //         dataType: 'JSON',
                    //         success: function(data) {
                    //             console.log(data);
                    //             var textKelurahan = "";
                    //             data.forEach((d) => {
                    //                 textKelurahan +=
                    //                     `<li class="list-group-item list-group-item-action alamatLi" onClick="selectKodePos(${d.MsVillageId}, '${d.MsVillageKodePos}')" value="${d.MsVillageKodePos}">${d.MsVillageKodePos}</li>`;
                    //             })
                    //             $("#kodePos").html(textKelurahan);
                    //             $('.nav-tabs button[data-bs-target="#nav-kodePos"]').prop(
                    //                 "disabled", false);
                    //             $('.nav-tabs button[data-bs-target="#nav-kodePos"]').tab(
                    //                 'show');
                    //         },
                    //         error: function(msg) {
                    //             console.log(msg);
                    //         }
                    //     })

                    // };

                    // selectKodePos = function(idKodePos, valTextKodepos) {

                    //     $('.nav-tabs button[data-bs-target="#nav-kelurahan"]').prop(
                    //         "disabled", true);

                    // }

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
                    <label class="form-check-label" for="flexSwitchCheckDefault">Atur Sebagai Alamat Utama</label>
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
</div>

<script>
$(".link-sub-dashboard").click(function() {
    $(".link-sub-dashboard").removeClass("active");
    id = $(this).data("id");
    if ($(this).data("id") == id) {
        $(this).addClass("active");
    }
});



// $("#input-search").hover(
//          function() {
//              console.log($(".input-search input").val());
//              $(this).addClass("active");
//          },
//          function() {
//              console.log($(".input-search input").val());
//              if ($(".input-search input").val() == "") {
//                  $(".input-search").removeClass("active");
//              }
//          }
//      );


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