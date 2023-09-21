<style>
    .dropzone {
        border: 1px solid white;
        color: white;
    }

    .dropzone .dz-preview {
        background-color: transparent !important;
    }

    .dropzone .dz-preview:hover .dz-image img {
        filter: blur(1px) !important;
    }

    .dz-action {
        position: absolute;
        top: 74%;
        right: 0;
        z-index: 100;
        background-color: black;
        color: white;
    }

    .dz-action:hover i {
        cursor: pointer;
        background-color: #ffffff80;
        color: #ffffffd9;
    }

    .dz-crop {
        position: absolute;
        top: 74%;
        left: 47%;
        z-index: 100;
        color: #d5d5d5;
        background-color: black;
    }

    .dz-crop:hover i {
        cursor: pointer;
        background-color: #ffffff80;
        color: #ffffffd9;
    }
</style>

<div class="container-fluid">
    <!-- Page Heading -->
    <div style="display: flex; flex-direction: row; justify-content: space-between; align-items: flex-start;">
        <h3 class="fw-bold mb-4 text-gray-800 text-uppercase">Customer Project</h3>
        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle"></i> Add Customer Project</button>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="row mb-1">
                        <label for="input-pencarian" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-select form-select-sm" id="input-status">
                                <option value="-">Semua Status</option>
                                <option value="1" selected>aktif</option>
                                <option value="0">tidak aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input-pencarian" class="col-sm-3 col-form-label">Pencarian</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control-sm" id="input-pencarian">
                        </div>
                    </div>
                </div>
            </div>
            <table id="tb_data" class="table table-hover table-sm" style="width:100%; font-size: 1vw;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Date</th>
                        <!-- <th>Deskripsi</th> -->
                        <th>Address</th>
                        <th>Header</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Customer Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="CustomerProjectTitle" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="add-CustomerProjectTitle" placeholder="Masukan Judul Project....">
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label for="CustomerProjectTitle" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="add-CustomerProjectDate">
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label for="CustomerProjectDeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="add-CustomerProjectDeskripsi" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="add-CustomerProjectDate" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="text" id="add-CustomerProjectDate" name="add-CustomerProjectDate" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="CustomerProjectAddress" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="add-CustomerProjectAddress" placeholder="Masukan Judul Project....">
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label for="CustomerProjectHeaderImg" class="col-sm-2 col-form-label">Header Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="add-CustomerProjectHeaderImg">
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label for="CustomerProjectHeaderImg" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="custom-select" id="add-CustomerProjectVisible" required>
                                <option value="" selected>Pilih Status</option>
                                <option value="1">Aktif</option>
                                <option value="0">Nonaktif</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="addCustomerProject" class="btn btn-primary">Save Customer Project</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="modal-edit" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT CUSTOMER PROJECT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row row-cols-1 row-cols-lg-2 p-2 p-lg-5 mb-3">
                    <div class="row mb-5 col-lg">
                        <img id="CustomerProjectHeaderImg" src="asset/image/test.jpg" class="img-fluid rounded-1" style="height: 500px; background-size: cover; background-position: center; object-fit: cover;">
                        </img>
                    </div>
                    <div class="row col-lg justify-content-lg-evenly align-content-center">
                        <div class="row">
                            <h2 class="mb-4" id="CustomerProjectTitle"></h2>
                            <small class="mb-2" id="CustomerProjectDeskripsi"></small>
                            <span id="CustomerProjectDate"></span>
                            <span id="CustomerProjectAddress"></span>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row row-cols-2 p-2">
                    <div class="col-9">
                        <h4 class="p-lg-5 p-sm-4 mb-3">Gallery Project</h4>
                        <div class="row row-cols-1 p-sm-4 p-lg-5 text-center" id="galleryProject">

                        </div>
                    </div>
                    <div class="col-3">

                    </div>
                </div>

                <div class="row p-2 p-xl-5">
                    <div class="d-flex flex-row justify-content-between" style="align-items: baseline;">
                        <span class="mb-3 p-lg-5 p-sm-4 fw-bolder">Item yang digunakan</span>
                    </div>
                    <div class="row row-cols-2 row-cols-md-4 row-cols-xl-5 row-cols-xxl-6 m-auto" id="projectItem">

                    </div>
                </div>

                <div class="accordion-item mt-2">
                    <h2 class="accordion-header" id="panelstay-basic-information">
                        <button class="accordion-button" style="height: 100px; color: #ffffff; font-size: 1em; padding-left: 5%; background-color: #5a5c69;" type="button" data-bs-toggle="collapse" data-bs-target="#panel-basic-information" aria-expanded="true" aria-controls="panelstay-basic-information">
                            <i class="fas fa-info-circle pe-2"></i> Customer Project
                        </button>
                    </h2>
                    <div id="panel-basic-information" class="accordion-collapse collapse show" aria-labelledby="panelstay-basic-information">
                        <div class="accordion-body py-5">
                            <div class="row">
                                <p class="col-2"></p>
                                <label for="input-pencarian" class="col-2 col-form-label">Title</label>
                                <div class="col-6">
                                    <input type="text" class="form-control form-control" id="input-CustomerProjectTitle">
                                </div>
                                <p class="col-2"></p>
                            </div>

                            <div class="row mb-1">
                                <p class="col-2"></p>
                                <label for="input-pencarian" class="col-2 col-form-label">Address</label>
                                <div class="col-6">
                                    <input type="text" class="form-control form-control" id="input-CustomerProjectAddress">
                                </div>
                                <p class="col-2"></p>
                            </div>

                            <div class="row mb-1">
                                <p class="col-2"></p>
                                <label for="input-pencarian" class="col-2 col-form-label">Deskripsi</label>
                                <div class="col-6">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="input-CustomerProjectDeskripsi" style="height: 200px"></textarea>
                                </div>
                                <p class="col-2"></p>
                            </div>

                            <div class="row mb-1">
                                <p class="col-2"></p>
                                <label for="input-pencarian" class="col-2 col-form-label">Date</label>
                                <div class="col-6">
                                    <input type="text" class="form-control form-control" id="input-CustomerProjectDate">
                                </div>
                                <p class="col-2"></p>
                            </div>

                            <div class="row mb-1">
                                <p class="col-2"></p>
                                <label for="input-pencarian" class="col-2 col-form-label">Foto Customer Project</label>
                                <div class="col-6">
                                    <div class="dropzone" id="myDropZone2">
                                    </div>
                                </div>
                                <p class="col-2"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelstay-Gallery-product">
                        <button class="accordion-button" style="height: 100px; color: #ffffff; font-size: 1em; padding-left: 5%; background-color: #5a5c69;" type="button" data-bs-toggle="collapse" data-bs-target="#panel-Gallery-product" aria-expanded="true" aria-controls="panelstay-Gallery-product">
                            <i class="fas fa-info-circle pe-2"></i> Gallery Customer Project
                        </button>
                    </h2>
                    <div id="panel-Gallery-product" class="accordion-collapse collapse show" aria-labelledby="panelstay-Gallery-product">
                        <div class="accordion-body py-5">
                            <div class="container">
                                <div class="row mb-1">
                                    <label for="input-pencarian" class="col-2 col-form-label">Foto Gallery Customer Project</label>
                                    <div class="col-10">
                                        <div class="dropzone" id="myDropZone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelstay-item-use">
                        <button class="accordion-button" style="height: 100px; color: #ffffff; font-size: 1em; padding-left: 5%; background-color: #5a5c69;" type="button" data-bs-toggle="collapse" data-bs-target="#panel-item-use" aria-expanded="true" aria-controls="panelstay-item-use">
                            <i class="fas fa-info-circle pe-2"></i> Item Digunakan
                        </button>
                    </h2>
                    <div id="panel-item-use" class="accordion-collapse collapse show" aria-labelledby="panelstay-item-use">
                        <div class="accordion-body py-5">
                            <div class="row mt-2">
                                <p class="col-2"></p>
                                <label for="" class="col-2 col-form-label">Pilh Item</label>
                                <div class="col-6">
                                    <select class="custom-select custom-select-sm form-select form-select-sm" id="AssetDetailId" name="AssetDetailId" style="width:100%" multiple="multiple" required>
                                        <?php
                                        $db = $this->db->get("TblMsItem")->result();
                                        foreach ($db as $key) {
                                            echo '<option value="' . $key->MsItemId . '">' . $key->MsItemCode . '-' . $key->MsItemName . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <p class="col-2"></p>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="input-CustomerProjectId" name="idRef">
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="modal-close" data-bs-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-success" id="btn-simpan">Simpan</button>
            </div>
        </div>
    </div>
</div> -->

<div class="modal fade" id="modal-edit" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(202deg, rgb(151 151 151) 15%, rgb(84 84 84) 100%); color: white; border: transparent;">
                <h5 class="modal-title">EDIT CUSTOMER PROJECT</h5>
                <button type="button" class="btn-close" id="closeToogle" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #7e7e7e; ">

                <div class="card border-dark mb-5" style="border: 1px solid #00000000 !important; box-shadow: 0px 0px 8px 2px #4c4c4cba; background-color: #6c757d; background: linear-gradient(309deg, rgb(122 122 122) 15%, rgb(90 90 90) 100%); color: #ffffff;">
                    <div class="card-header p-4 border-0 fw-bolder"><i class="fas fa-tasks"></i> Pengaturan Form</div>
                    <div class="card-body text-dark">
                        <div class="row mb-3 text-light">
                            <label for="input-pencarian" class="col-2 col-form-label">Title</label>
                            <div class="col-10">
                                <input type="text" class="form-control form-control" id="input-CustomerProjectTitle">
                            </div>
                        </div>

                        <div class="row mb-3 text-light">
                            <label for="input-pencarian" class="col-2 col-form-label">Address</label>
                            <div class="col-10">
                                <input type="text" class="form-control form-control" id="input-CustomerProjectAddress">
                            </div>
                        </div>

                        <div class="row mb-3 text-light">
                            <label for="input-pencarian" class="col-2 col-form-label">Deskripsi</label>
                            <div class="col-10">
                                <textarea class="form-control" placeholder="Leave a comment here" id="input-CustomerProjectDeskripsi" style="height: 200px"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3 text-light">
                            <label for="input-pencarian" class="col-2 col-form-label">Date</label>
                            <div class="col-10">
                                <input type="text" class="form-control form-control" id="input-CustomerProjectDate" name="input-CustomerProjectDate">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-dark mb-5" style="border: 1px solid #00000000 !important; box-shadow: 0px 0px 8px 2px #4c4c4cba; background-color: #6c757d; background: linear-gradient(309deg, rgb(122 122 122) 15%, rgb(90 90 90) 100%); color: #ffffff;">
                    <div class="card-header border-0 p-4 fw-bolder"><i class="fas fa-upload"></i> Pengaturan Gambar</div>
                    <div class="card-body text-dark">
                        <div class="row">
                            <div class="col-7">
                                <div class="dropzone" id="myDropZone">
                                </div>
                            </div>

                            <div class="col-5">
                                <div class="dropzone" id="myDropZone2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-dark mb-5" style="border: 1px solid #00000000 !important; box-shadow: 0px 0px 8px 2px #4c4c4cba; background-color: #6c757d; background: linear-gradient(309deg, rgb(122 122 122) 15%, rgb(90 90 90) 100%); color: #ffffff;">
                    <div class="card-header p-4 border-0 fw-bolder"><i class="fas fa-tasks"></i> Pengaturan Item Project</div>
                    <div class="card-body text-dark">
                        <div class="row">
                            <label for="" class="col-4 col-form-label">Pilh Item</label>
                            <div class="col-8">
                                <select class="custom-select custom-select-sm form-select form-select-sm" id="AssetDetailId" name="AssetDetailId" style="width:100%" multiple="multiple" required>
                                    <?php
                                    $db = $this->db->get("TblMsItem")->result();
                                    foreach ($db as $key) {
                                        echo '<option value="' . $key->MsItemId . '">' . $key->MsItemCode . '-' . $key->MsItemName . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <input type="hidden" id="input-CustomerProjectId" name="idRef">
                        </div>

                        <div class="row p-2 p-xl-5 mt-5">
                            <div class="row row-cols-1  row-cols-sm-2 row-cols-md-4 row-cols-xl-5 row-cols-xxl-6 m-auto" id="projectItem2">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer" style="background: linear-gradient(347deg, rgb(151 151 151) 15%, rgb(84 84 84) 100%); color: white; border: transparent;">
                    <a data-toggle="modal" href="#myModal" class="livePreview btn btn-sm"><i class="fas fa-eye fa-2x"></i></a>
                    <button type="button" class="btn btn-secondary" id="modal-close" data-bs-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-success" id="btn-simpan">Simpan</button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Live Preview</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="container"></div>
                    <div class="modal-body">
                        <div class="row row-cols-1 row-cols-lg-2 p-2 p-lg-5 mb-3">
                            <div class="row mb-5 col-lg" id="headerProject">

                            </div>
                            <div class="row col-lg justify-content-lg-evenly align-content-center">
                                <div class="row">
                                    <h2 class="mb-4" id="CustomerProjectTitle"></h2>
                                    <small class="mb-2" id="CustomerProjectDeskripsi"></small>
                                    <span id="CustomerProjectDate"></span>
                                    <span id="CustomerProjectAddress"></span>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row row-cols-2 p-2">
                            <div class="col-9">
                                <h4 class="p-lg-5 p-sm-4 mb-3">Gallery Project</h4>
                                <div class="row row-cols-1 p-sm-4 p-lg-5 text-center" id="galleryProject">

                                </div>
                            </div>
                            <div class="col-3">

                            </div>
                        </div>

                        <div class="row p-2 p-xl-5 p-5">
                            <div class="d-flex flex-row justify-content-between" style="align-items: baseline;">
                                <span class="mb-3 p-lg-5 p-sm-4 fw-bolder">Item yang digunakan</span>
                            </div>
                            <div class="row row-cols-2 row-cols-md-4 row-cols-xl-5 row-cols-xxl-6 m-auto" id="projectItem">

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var table = $('#tb_data').DataTable({
        "responsive": true,
        "searching": false,
        "lengthChange": false,
        "pageLength": 10,
        "processing": true,
        "language": {
            processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '
        },
        "serverSide": true,
        "ajax": {
            "url": "<?php echo site_url('function/Datatable_admin/get_data_project') ?>",
            "type": "POST",
            "data": function(data) {
                data.search['value'] = $('#input-pencarian').val();
                data.search['status'] = $('#input-status').val();
                data.search['colstatus'] = "CostumerProjectVisible";
            }
        },
        "order": [],
        "columnDefs": [{
                "orderable": false,
                targets: 0
            },

            {
                "orderable": false,
                "className": "text-center",
                "width": "50%",
                targets: 1
            },

            {
                "orderable": false,
                "className": "text-center",
                "width": "10%",
                targets: 2,
            },

            {
                "orderable": false,
                "className": "text-center",
                "width": "20%",
                targets: 3,
            },
            {
                "orderable": false,
                "width": "10%",
                targets: 4,
            },
            {
                "orderable": false,
                targets: 6,
                "width": "8%",
                className: 'action'
            },
            {
                "visible": false,
                targets: 7
            },
        ],

    });

    $("#modal-edit").on('show.bs.modal', '.modal', function() {
        const zIndex = 1040 + 10 * $('.modal1:visible').length;
        $(this).css('z-index', zIndex);
        setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
    });


    $("#AssetDetailId").select2({
        dropdownParent: $("#modal-edit .modal-dialog .modal-fullscreen")
    });

    $('#input-pencarian').keyup(function() {
        table.ajax.reload(null, false).responsive.recalc().columns.adjust();
    });
    $('#input-status').change(function() {
        table.ajax.reload(null, false).responsive.recalc().columns.adjust();
    });

    // var defaultImageLocation = "<?= base_url("asset/image/project/") ?>"
    $('#tb_data').on('click', 'td.action', function() {
        var row = table.row(this).data(); // returns undefined  

        var StartDateContent = moment(row[2]);
        var EndDateContent = moment();
        $("#input-CustomerProjectDate").daterangepicker({
            singleDatePicker: true,
            startDate: StartDateContent,
            ednDate: EndDateContent,
            showDropdowns: true,
            locale: {
                "format": "DD/MM/YYYY",
            }
        }, Date_content);
        Date_content(StartDateContent, EndDateContent);

        function Date_content(start, end) {
            StartDateContent = start;
        }

        $("#CustomerProjectTitle").text(row[1]);
        $("#CustomerProjectDate").text(row[2]);
        $("#CustomerProjectDeskripsi").text(row[10]);
        $("#CustomerProjectAddress").text(row[3]);

        $("#input-CustomerProjectTitle").val(row[1]);
        $("#input-CustomerProjectId").val(row[7]);
        $("#input-CustomerProjectDate").val(StartDateContent);
        $("#input-CustomerProjectDeskripsi").val(row[10]);
        $("#input-CustomerProjectAddress").val(row[3]);
        getProjectGallery(row[8], 'galleryProject');
        getProjectItem(row[9], 'projectItem');
        getProjectItem(row[9], 'projectItem2');
        getProjectHead(row[11], 'headerProject')
        // loadURLToInputFiled($(row[4]).prop('src'));
        gallery_upload.options.url = "<?= base_url("Uploaded/uploadGalleryProject/") ?>" + row[7];
        project_upload.options.url = "<?= base_url("Uploaded/uploadProjectImg/") ?>" + row[7];

        $("#modal-edit").modal("show");
    })

    $('#modal-close').on('click', function() {
        gallery_upload.removeAllFiles(true);
        project_upload.removeAllFiles(true);
        table.ajax.reload();
    })

    $('#closeToogle').on('click', function() {
        gallery_upload.removeAllFiles(true);
        project_upload.removeAllFiles(true);
        table.ajax.reload();
    })


    function load_data_table() {
        $("#modal-edit").modal("hide");
        table.ajax.reload();
    };


    // $('.selectitem').select2({
    //     tags: "true",
    //     placeholder: "Pilih Nama Item..",
    //     allowClear: true,
    // });
    // $('#selectitem').on("click", ".select2-results__group", function() {
    //     $('#selectitem').val(null).trigger('change');
    //     var options = $('#selectitem option');
    //     $.each(options, function(key, value) {
    //         if ($(value)[0].parentElement.label.indexOf(groupName) >= 0) {
    //             $(value).prop("selected", "selected");
    //         }
    //     });

    //     $("#selectitem").trigger("change");
    //     $("#selectitem").select2('close');

    // });

    function getProjectHead(item, elementId) {
        for (let i = 0; i < item.length; i++) {
            var file = {
                name: item[i]['CustomerProjectHeaderImg'],
                size: 200,
                status: Dropzone.ADDED,
                accepted: true
            };
            project_upload.emit("addedfile", file);
            project_upload.emit("thumbnail", file, "<?= base_url("headerGallery.php/") ?>?image=" + item[i]['CustomerProjectHeaderImg'] + "&width=120&height=120");
            project_upload.emit("complete", file);
            project_upload.files.push(file);
        }
        const list = document.getElementById(elementId);

        while (list.hasChildNodes()) {
            list.removeChild(list.firstChild);
        }

        for (let i = 0; i < item.length; i++) {

            let img = document.createElement('img');
            img.className = "img-fluid rounded-1"
            img.style = "height: 500px; background-size: cover; background-position: center; object-fit: cover;";
            img.src = "<?= base_url() ?>/asset/image/project/" + item[i]['CustomerProjectHeaderImg'];
            img.alt = "";

            list.appendChild(img);
        }
    }


    function getProjectGallery(item, elementId) {
        for (let i = 0; i < item.length; i++) {
            var file = {
                name: item[i]['CustomerProjectGalleryImage'],
                size: 200,
                status: Dropzone.ADDED,
                accepted: true
            };
            gallery_upload.emit("addedfile", file);
            gallery_upload.emit("thumbnail", file, "<?= base_url("galleryProjectImage.php/") ?>?image=" + item[i]['CustomerProjectGalleryImage'] + "&width=120&height=120");
            gallery_upload.emit("complete", file);
            gallery_upload.files.push(file);
        }
        const list = document.getElementById(elementId);

        while (list.hasChildNodes()) {
            list.removeChild(list.firstChild);
        }

        for (let i = 0; i < item.length; i++) {
            let div = document.createElement('div');
            div.className = "col mb-1 mb-lg-5";
            div.setAttribute("id", "project-gallery" + [i]);
            div.style = "position: relative;";

            let img = document.createElement('img');
            img.className = "img-fluid mb-4"
            // img.style = "height: 15vh; object-fit: cover;";
            img.src = "<?= base_url() ?>/asset/image/galleryProject/" + item[i]['CustomerProjectGalleryImage'];
            img.alt = "";

            let small = document.createElement('small');
            small.className = "mt-4";
            small.textContent = item[i]['CustomerProjectGalleryDesk'];

            let icon = document.createElement('i');
            icon.className = "fas fa-times subImgDelete";
            icon.onclick = function() {
                console.log(div);
                Swal.fire({
                    title: 'Anda yakin?',
                    text: "Ingin Menghapus Image ini Dari Daftar List!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus Image!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: "POST",
                            url: "<?= site_url("function/functionAdmin/customerProjectGalleryDelete/") ?>" + item[i]['CustomerProjectGalleryId'],
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'Item Berhasil Di Hapus Dari Daftar List.',
                                    'success'
                                )
                                $("#project-gallery" + [i]).remove();


                            }
                        })
                    }
                })
            };

            div.appendChild(img);
            div.appendChild(small);
            div.appendChild(icon);

            list.appendChild(div);
        }
    }


    function getProjectItem(item, elementId) {

        const list = document.getElementById(elementId);

        while (list.hasChildNodes()) {
            list.removeChild(list.firstChild);
        }

        for (let i = 0; i < item.length; i++) {
            let div = document.createElement('div');
            div.className = "col mb-3 shadow shadow-sm mb-4 p-2 justify-content-center";
            div.setAttribute("id", "project-item" + [i]);

            let subDiv = document.createElement('div');
            div.className = "d-flex flex-column justify-content-center text-center py-4 mx-2";
            div.style = "box-shadow: 0px 0px 8px #919191b0; position: relative;";

            let img = document.createElement('img');
            img.className = "img-fluid mb-4"
            img.src = "<?= base_url() ?>/asset/image/subProduct/" + item[i]['ItemSubImageFileName'];
            img.alt = "";

            let span = document.createElement('span');
            span.className = "fw-normal p-2 ";
            span.textContent = item[i]['MsItemName'];

            let icon = document.createElement('i');
            icon.className = "fas fa-times projectItemDelete";
            icon.onclick = function() {
                // alert(i.list);
                Swal.fire({
                    title: 'Anda yakin?',
                    text: "Ingin Menghapus Item Dari Daftar List!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus Item!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: "POST",
                            url: "<?= site_url("function/functionAdmin/projectItem_delete/") ?>" + item[i]['CustomerProjectItemId'],
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'Item Berhasil Di Hapus Dari Daftar List.',
                                    'success'
                                )
                                $("#project-item" + [i]).remove();
                            }
                        })
                    }
                })
            };

            div.appendChild(subDiv);
            subDiv.appendChild(img);
            subDiv.appendChild(span);
            subDiv.appendChild(icon);

            list.appendChild(div);
        }

    }



    // dropzone gallery
    Dropzone.autoDiscover = false;
    var gallery_upload = new Dropzone("#myDropZone", {
        dictDefaultMessage: "upload gallery project",
        url: "<?= base_url("Uploaded/uploadGalleryProject/") ?>",
        maxFilesize: 5.0,
        parallelUploads: 5,
        uploadMultiple: true,
        autoProcessQueue: false,
        acceptedFiles: "image/*",
        paramName: "userFile",
        dictInvalidFileType: "Type file not allowed",
        addRemoveLink: true,
        removeAllFile: true,
        method: "post",
    });

    Dropzone.autoDiscover = false;
    var project_upload = new Dropzone("#myDropZone2", {
        dictDefaultMessage: "upload header project",
        url: "<?= base_url("Uploaded/uploadProjectImg/") ?>",
        maxFilesize: 5.0,
        maxFiles: 1,
        parallelUploads: 1,
        uploadMultiple: true,
        autoProcessQueue: false,
        acceptedFiles: "image/*",
        paramName: "userFile",
        dictInvalidFileType: "Type file not allowed",
        addRemoveLink: true,
        removeAllFile: true,
        method: "post",
    });

    var object2 = {};
    var indexobject2 = 0;
    project_upload.on("addedfile", file => {
        $('.dz-preview').addClass('dz-complete');
        $('.dz-details').addClass('d-none');

        object2[indexobject2] = file;
        $(file.previewTemplate).append("<div class='dz-action'><a onclick='remove_dropzone_file2(" + indexobject2 + ")'><i class='fas fa-times p-2 fa-1x'></i></a></div>");
        $(file.previewTemplate).append("<div class='dz-crop'><a onclick='edit_dropzone_file2(" + indexobject2 + ")'><i class='far fa-edit p-2 fa-1x'></i></a></div>");
        indexobject2++;
    });

    var object = {};
    var indexobject = 0;
    gallery_upload.on("addedfile", file => {
        $('.dz-preview').addClass('dz-complete');
        $('.dz-details').addClass('d-none');

        object[indexobject] = file;
        $(file.previewTemplate).append("<div class='dz-action'><a onclick='remove_dropzone_file(" + indexobject + ")'><i class='fas fa-times p-2 fa-1x'></i></a></div>");
        $(file.previewTemplate).append("<div class='dz-crop'><a onclick='edit_dropzone_file(" + indexobject + ")'><i class='far fa-edit p-2 fa-1x'></i></a></div>");
        indexobject++;
    });
    remove_dropzone_file = function(file) {
        gallery_upload.removeFile(object[file]);
        delete object[file];
        // log
    }

    remove_dropzone_file2 = function(file) {
        project_upload.removeFile(object2[file]);
        delete object2[file];
        // log
    }

    Dropzone.options = {
        transformFile: edit_dropzone_file = function(index, done) {
            myDropZone = this;

            var editor = document.createElement('div');
            editor.style.position = 'fixed';
            editor.style.left = 0;
            editor.style.right = 0;
            editor.style.top = 0;
            editor.style.bottom = 0;
            editor.style.zIndex = 9999;
            editor.style.backgroundColor = '#000';
            document.body.appendChild(editor);

            var buttonConfirm = document.createElement('button');
            buttonConfirm.style.position = 'absolute';
            buttonConfirm.style.left = '10px';
            buttonConfirm.style.top = '10px';
            buttonConfirm.style.zIndex = 9999;
            buttonConfirm.textContent = 'Confirm';
            editor.appendChild(buttonConfirm);
            buttonConfirm.addEventListener('click', function() {
                var canvas = cropper.getCroppedCanvas({
                    width: 256,
                    height: 256
                });
                canvas.toBlob(function(blob) {
                    myDropZone.createThumbnail(
                        blob,
                        myDropZone.options.thumbnailWidth,
                        myDropZone.options.thumbnailHeight,
                        myDropZone.options.thumbnailMethod,
                        false,
                        function(dataURL) {

                            // Update the Dropzone file thumbnail
                            myDropZone.emit('thumbnail', index, dataURL);
                            // Return the file to Dropzone
                            done(blob);
                        });
                });
                document.body.removeChild(editor);
            });

            var image = new Image();
            image.src = object[index].dataURL;
            editor.appendChild(image);

            var cropper = new Cropper(image, {
                dragMode: 'move',
                aspectRatio: 2 / 3,
                autoCropArea: 0.65,
                restore: false,
                guides: false,
                center: false,
                highlight: false,
                cropBoxMovable: false,
                cropBoxResizable: false,
                toggleDragModeOnDblclick: false,
            });
        }
    };
    // dropzone-end

    $('#input-CustomerProjectTitle').keyup(function() {
        $("#CustomerProjectTitle").text($(this).val());
    });

    $('#input-CustomerProjectDate').keyup(function() {
        $("#CustomerProjectDate").text($(this).val());
    });

    $('#input-CustomerProjectDeskripsi').keyup(function() {
        $("#CustomerProjectDeskripsi").text($(this).val());
    });

    $('#input-CustomerProjectAddress').keyup(function() {
        $("#CustomerProjectAddress").text($(this).val());
    });

    function loadURLToInputFiled(url) {
        getImgURL(url, (imgBlob) => {
            // Load img blob to input
            // WIP: UTF8 character error 
            let fileName = url.replace(defaultImageLocation, "");
            let file = new File([imgBlob], fileName, {
                type: "image/jpg",
                lastModified: new Date().getTime()
            }, 'utf-8');
            let container = new DataTransfer();
            container.items.add(file);
            document.querySelector('#myDropZone-CustomerProjectHeaderImg').files = container.files;

            var reader = new window.FileReader();
            reader.readAsDataURL(imgBlob);
            reader.onloadend = function() {
                base64data = reader.result;
                $("#CustomerProjectHeaderImg").prop("src", base64data);
            }
        })
    }

    // xmlHTTP return blob respond
    function getImgURL(url, callback) {
        var xhr = new XMLHttpRequest();
        xhr.onload = function() {
            callback(xhr.response);
        };
        xhr.open('GET', url);
        xhr.responseType = 'blob';
        xhr.send();
    }

    //auto show from input file
    // var loadFile = function(event) {
    //     var reader = new FileReader();
    //     reader.onload = function() {
    //         var output = document.getElementById('CustomerProjectHeaderImg');
    //         output.src = reader.result;
    //     };
    //     reader.readAsDataURL(event.target.files[0]);
    // };

    var req_status_add = 0;
    $("#addCustomerProject").click(function() {
        var StartDateContent = moment();
        var EndDateContent = moment();
        $("#add-CustomerProjectDate").daterangepicker({
            singleDatePicker: true,
            startDate: StartDateContent,
            ednDate: EndDateContent,
            showDropdowns: true,
            locale: {
                "format": "DD/MM/YYYY",
            }
        }, Date_content);
        Date_content(StartDateContent, EndDateContent);

        function Date_content(start, end) {
            StartDateContent = start;
        }

        var title = $("#add-CustomerProjectTitle").val();
        var deskripsi = $("#add-CustomerProjectDeskripsi").val();
        var address = $("#add-CustomerProjectAddress").val();
        var visible = $("#add-CustomerProjectVisible").val();
        var date = StartDateContent.format('YYYY-MM-DD');
        if (!req_status_add) {
            $("#addCustomerProject").html('<i class="fas fa-circle-notch fa-spin"></i> Loading');

            $.ajax({
                type: 'POST',
                url: "<?= base_url("function/FunctionAdmin/projectAdd") ?>",
                data: {
                    title: title,
                    deskripsi: deskripsi,
                    address: address,
                    visible: visible,
                    date: date
                    // "CustomerProjectHeaderImg" : $("#add-CustomerProjectHeaderImg").val()

                },
                before: function() {
                    req_status_add = 1;
                },
                success: function(data) {
                    req_status_add = 0;
                    $("#addCustomerProject").html("Save Customer Project");
                    Swal.fire({
                        icon: 'success',
                        text: 'Edit data berhasil',
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

    // loadURLToInputFiled(url);
    $("#btn-simpan").click(function() {
        if (!req_status_add) {
            $("#btn-simpan").html('<i class="fas fa-circle-notch fa-spin"></i> Loading');
            gallery_upload.processQueue();
            project_upload.processQueue();

            $.ajax({
                type: 'POST',
                url: "<?= site_url("function/FunctionAdmin/project_edit/") ?>" + $("#input-CustomerProjectId").val(),
                data: {
                    "CustomerProjectTitle": $("#input-CustomerProjectTitle").val(),
                    "CustomerProjectDeskripsi": $("#input-CustomerProjectDeskripsi").val(),
                    "CustomerProjectAddress": $("#input-CustomerProjectAddress").val(),
                    // "CustomerProjectHeaderImg" : $("#input-CustomerProjectHeaderImg").val()

                },
                before: function() {
                    req_status_add = 1;
                },
                success: function(data) {
                    req_status_add = 0;
                    $("#btn-simpan").html("Simpan");
                    Swal.fire({
                        icon: 'success',
                        text: 'Edit data berhasil',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        timer: 1500,
                    })
                    gallery_upload.removeAllFiles(true);
                    project_upload.removeAllFiles(true);
                    load_data_table();
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