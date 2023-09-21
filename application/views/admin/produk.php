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
    <h3 class="fw-bold mb-4 text-gray-800 text-uppercase">Produk</h3>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="row mb-1">
                        <label for="input-pencarian" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-select form-select-sm" id="input-status">
                                <option value="-">Semua Status</option>
                                <option value="1" selected>aktif</option>
                                <option value="0">tidak aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input-pencarian" class="col-sm-2 col-form-label">Pencarian</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="input-pencarian">
                        </div>
                    </div>
                </div>
            </div>
            <table id="tb_data" class="table table-hover table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kategory</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="modal-edit" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT PRODUK</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid" style="background-color: #fefdf9;">
                    <div class="row row-cols-1 row-cols-lg-2 p-lg-5 shadow-sm pb-5">
                        <div class="col mb-5 mb-lg-0 text-center d-flex justify-content-center" id="MsItemImage" style="height: 600px; position: relative; background: #efefef;">

                            <div class="ulThumb" id="MsItemGallery">

                            </div>
                        </div>
                        <div class="col d-flex px-4 px-lg-5 flex-column justify-content-lg-center">
                            <div class="row">
                                <h2 class="mb-2" id="MsItemName"></h2>
                                <h6 class="mb-2" id="MsItemCode"></h6>
                                <span class="mb-4" id="MsItemSize"></span>
                                <h4 class="mb-4 fw-normal" id="MsItemPrice"></h4><small class="fw-light" id="MsItemUoM">/</small>

                                <div class="col col-sm-6 col-lg-8 col-xl-6">
                                    <a class="btn d-flex justify-content-center align-items-center" style="background-color: #26a69a; color: white;">
                                        <i class="fab fa-whatsapp fs-2" style="margin-right: 1rem;"></i>
                                        <span>Order Via Whatsapp</span>
                                    </a>
                                </div>

                            </div>
                            <hr class="mb-4">
                            <div class="p-0" id="list-tab" role="tablist">
                                <a class="px-4 py-1 active border border-1 border-dark text-dark" style="text-decoration: none;" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Deskripsi</a>
                                <a class="px-4 py-1 border border-1 border-dark text-dark" style="text-decoration: none;" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Lainnya</a>
                            </div>
                            <div class="tab-content mt-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                    <blockquote class="mb-3" style="white-space: pre-wrap; " id="MsItemDeskripsiText"></blockquote>
                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                    <table>
                                        <tr>
                                            <td><small class="fw-bold">Warna</small></td>
                                            <td style="width: 1rem;"> : </td>
                                            <td id="MsItemColor"></td>
                                        </tr>
                                        <tr>
                                            <td><small class="fw-bold">Material</small> </td>
                                            <td style="width: 1rem;"> : </td>
                                            <td id="MsItemMaterial"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid p-lg-5" style="background-color: #fefdf9;">
                    <h4 class="text-center mb-5">Customer Project Gallery </h4>
                    <div class="row row-cols-2 row-cols-lg-4 row-cols-sm-3 row-cols-xxl-5 text-center" id="MsProject">
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" style="background-color: #d77777;" id="panelstay-detail-item">
                        <button class="accordion-button" style="height: 100px; color: #ffffff; font-size: 1em; padding-left: 5%; background-color: #5a5c69;" type="button" data-bs-toggle="collapse" data-bs-target="#panel-detail-item" aria-expanded="true" aria-controls="panelstay-detail-item">
                            <i class="fas fa-info-circle pe-2"></i> Detail Item
                        </button>
                    </h2>
                    <div id="panel-detail-item" class="accordion-collapse collapse show" aria-labelledby="panelstay-detail-item">
                        <div class="accordion-body py-5">
                            <div class="container">
                                <div class="row mb-1">
                                    <label for="input-pencarian" class="col-2 col-form-label">Deskripsi</label>
                                    <div class="col-10">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="input-MsItemDeskripsiText" style="height: 200px"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="input-pencarian" class="col-2 col-form-label">Warna</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control form-control" id="input-MsItemColor">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label for="input-pencarian" class="col-2 col-form-label">Material</label>
                                    <div class="col-10">
                                        <input type="text" class="form-control form-control" id="input-MsItemMaterial">
                                    </div>
                                </div>
                                
                                <input type="hidden" name="idRef" id="input-MsItemDeskripsiRef">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" style="background-color: #d77777;" id="panelstay-gallery-product">
                        <button class="accordion-button" style="height: 100px; color: #ffffff; font-size: 1em; padding-left: 5%; background-color: #5a5c69;" type="button" data-bs-toggle="collapse" data-bs-target="#panel-gallery-product" aria-expanded="true" aria-controls="panelstay-gallery-product">
                            <i class="fas fa-info-circle pe-2"></i>Foto Product
                        </button>
                    </h2>
                    <div id="panel-gallery-product" class="accordion-collapse collapse show" aria-labelledby="panelstay-gallery-product">
                        <div class="accordion-body py-5">
                            <div class="container">
                                <div class="row mt-2">
                                    <label for="input-pencarian" class="col-2 col-form-label">Foto Product</label>
                                    <div class="col-10">
                                        <div class="dropzone" id="myDropZone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="modal-close" data-bs-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-success" id="btn-simpan" data-id=0>Simpan</button>
            </div>
        </div>
    </div>
</div> -->

<div class="modal fade" id="modal-edit" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(202deg, rgb(151 151 151) 15%, rgb(84 84 84) 100%); color: white; border: transparent;">
                <h5 class="modal-title">EDIT PRODUK</h5>
                <button type="button" class="btn-close" id="closeToogle" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #7e7e7e; ">
                <div class="card border-dark mb-5" style="border: 1px solid #00000000 !important; box-shadow: 0px 0px 8px 2px #4c4c4cba; background-color: #6c757d; background: linear-gradient(309deg, rgb(122 122 122) 15%, rgb(90 90 90) 100%); color: #ffffff;">
                    <div class="card-header p-4 border-0 fw-bolder"><i class="fas fa-tasks"></i> Pengaturan Form</div>
                    <div class="card-body text-dark">
                        <div class="row mb-3 text-light">
                            <label for="input-pencarian" class="col-2 col-form-label">Deskripsi</label>
                            <div class="col-10">
                                <textarea class="form-control" placeholder="Leave a comment here" id="input-MsItemDeskripsiText" style="height: 200px"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3 text-light">
                            <label for="input-pencarian" class="col-2 col-form-label">Warna</label>
                            <div class="col-10">
                                <input type="text" class="form-control form-control" id="input-MsItemColor">
                            </div>
                        </div>

                        <div class="row mb-3 text-light">
                            <label for="input-pencarian" class="col-2 col-form-label">Material</label>
                            <div class="col-10">
                                <input type="text" class="form-control form-control" id="input-MsItemMaterial">
                            </div>
                        </div>
                        <input type="hidden" name="idRef" id="input-MsItemDeskripsiRef">
                    </div>
                </div>

                <div class="card border-dark mb-5" style="border: 1px solid #00000000 !important; box-shadow: 0px 0px 8px 2px #4c4c4cba; background-color: #6c757d; background: linear-gradient(309deg, rgb(122 122 122) 15%, rgb(90 90 90) 100%); color: #ffffff;">
                    <div class="card-header p-4 border-0 fw-bolder"><i class="fas fa-upload"></i> Pengaturan Gambar</div>
                    <div class="card-body text-dark">
                        <div class="col-12">
                            <div class="dropzone" id="myDropZone">
                            </div>
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

        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Live Preview</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="container"></div>
                    <div class="modal-body">
                        <div class="container-fluid" style="background-color: #fefdf9;">
                            <div class="row row-cols-1 row-cols-lg-2 p-lg-5 shadow-sm pb-5">
                                <div class="col mb-5 mb-lg-0 text-center d-flex justify-content-center" id="MsItemImage" style="height: 600px; position: relative; background: #efefef;">
                                    <div class="ulThumb" id="MsItemGallery">

                                    </div>
                                </div>
                                <div class="col d-flex px-4 px-lg-5 flex-column justify-content-lg-center">
                                    <div class="row">
                                        <h2 class="mb-2" id="MsItemName"></h2>
                                        <h6 class="mb-2" id="MsItemCode"></h6>
                                        <span class="mb-4" id="MsItemSize"></span>
                                        <h4 class="mb-4 fw-normal" id="MsItemPrice"></h4><small class="fw-light" id="MsItemUoM">/</small>

                                        <div class="col col-sm-6 col-lg-8 col-xl-6">
                                            <a class="btn d-flex justify-content-center align-items-center" style="background-color: #26a69a; color: white;">
                                                <i class="fab fa-whatsapp fs-2" style="margin-right: 1rem;"></i>
                                                <span>Order Via Whatsapp</span>
                                            </a>
                                        </div>

                                    </div>
                                    <hr class="mb-4">
                                    <div class="p-0" id="list-tab" role="tablist">
                                        <a class="px-4 py-1 active border border-1 border-dark text-dark" style="text-decoration: none;" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Deskripsi</a>
                                        <a class="px-4 py-1 border border-1 border-dark text-dark" style="text-decoration: none;" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Lainnya</a>
                                    </div>
                                    <div class="tab-content mt-3" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                            <blockquote class="mb-3" style="white-space: pre-wrap; " id="MsItemDeskripsiText"></blockquote>
                                        </div>
                                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                            <table>
                                                <tr>
                                                    <td><small class="fw-bold">Warna</small></td>
                                                    <td style="width: 1rem;"> : </td>
                                                    <td id="MsItemColor"></td>
                                                </tr>
                                                <tr>
                                                    <td><small class="fw-bold">Material</small> </td>
                                                    <td style="width: 1rem;"> : </td>
                                                    <td id="MsItemMaterial"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid p-lg-5" style="background-color: #fefdf9;">
                            <h4 class="text-center mb-5">Customer Project Gallery </h4>
                            <div class="row row-cols-2 row-cols-lg-4 row-cols-sm-3 row-cols-xxl-5 text-center" id="MsProject">
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
    Dropzone.autoDiscover = false;
    var foto_upload = new Dropzone(".dropzone", {
        url: "<?= base_url("Uploaded/uploadProductImage/") ?>",
        dictDefaultMessage: "upload gambar produk",
        maxFilesize: 5.0,
        parallelUploads: 5,
        uploadMultiple: true,
        autoProcessQueue: false,
        acceptedFiles: "image/*",
        paramName: "userFile",
        dictInvalidFileType: "Type file not allowed",
        addRemoveLink: true,
        method: "post",
    });

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
            "url": "<?php echo site_url('function/Datatable_admin/get_data_produk') ?>",
            "type": "POST",
            "data": function(data) {
                data.search['value'] = $('#input-pencarian').val();
                data.search['status'] = $('#input-status').val();
                data.search['colstatus'] = "MsItemDeskripsiVisible";
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
                targets: 6
            },
            {
                "orderable": false,
                targets: 7,
                className: 'action'
            },
            {
                "visible": false,
                targets: 8
            },
        ],

    });

    $('#input-pencarian').keyup(function() {
        table.ajax.reload(null, false).responsive.recalc().columns.adjust();
    });
    $('#input-status').change(function() {
        table.ajax.reload(null, false).responsive.recalc().columns.adjust();
    });

    var defaultImageLocation = "<?= base_url("upload.php?kode=") ?>"
    $('#tb_data').on('click', 'td.action', function() {
        var row = table.row(this).data(); // returns undefined  

        $("#MsItemCode").text(row[1]);
        $("#MsItemName").text(row[2]);
        $("#MsItemPrice").text(new Intl.NumberFormat().format(row[3]));
        $("#MsItemUoM").text(row[4]);
        $("#MsItemDeskripsiText").text(row[9]);
        $("#MsItemColor").text(row[10]);
        $("#MsItemMaterial").text(row[11]);

        $("#input-MsItemDeskripsiRef").val(row[8]);
        $("#input-MsItemDeskripsiText").val(row[9]);
        $("#input-MsItemColor").val(row[10]);
        $("#input-MsItemMaterial").val(row[11]);
        getProjectGallery(row[13], 'MsProject');
        getItemGallery(row[14], 'MsItemGallery');
        getMsItemSubImgFirst(row[15], 'MsItemImage');
        //loadURLToInputFiled($(row[5]).prop('src'));
        foto_upload.options.url = "<?= base_url("Uploaded/uploadProductImage/") ?>" + row[8];

        $("#modal-edit").modal("show");
    })

    function show(imgs) {
        var expandImg = document.getElementById("itemGallery");
        expandImg.src = imgs.src;
    }

    function getMsItemSubImgFirst(item, elementId) {
        const list = document.getElementById(elementId);

        while (list.hasChildNodes()) {
            list.removeChild(list.firstChild);
        }

        let img = document.createElement('img');
        img.className = "img-fluid";
        img.style = "object-fit: contain;";
        if (item == null) {
            img.src = "<?= base_url() ?>/asset/image/subProduct/ntf.png";
        } else {
            img.src = "<?= base_url() ?>/asset/image/subProduct/" + item['ItemSubImageFileName'];
        }
        img.alt = "image";

        list.appendChild(img);
    }

    function getItemGallery(item, elementId) {

        // const list = document.getElementById(elementId);

        // while (list.hasChildNodes()) {
        //     list.removeChild(list.firstChild);
        // }

        for (let i = 0; i < item.length; i++) {
            var file = {
                name: item[i]['ItemSubImageFileName'],
                size: 200,
                status: Dropzone.ADDED,
                accepted: true
            };
            foto_upload.emit("addedfile", file);
            foto_upload.emit("thumbnail", file, "<?= base_url("image.php/") ?>?image=" + item[i]['ItemSubImageFileName'] + "&width=120&height=120");
            foto_upload.emit("complete", file);
            foto_upload.files.push(file);




            // let div = document.createElement('div');
            // div.style = "position: relative; padding-right: 5px;";
            // div.setAttribute("id", "gallery-item" + [i]);

            // let img = document.createElement('img');
            // img.className = "img-fluid liThumb";
            // img.src = "<?= base_url() ?>/asset/image/subProduct/" + item[i]['ItemSubImageFileName'];
            // img.alt = "image";

            // let icon = document.createElement('i');
            // icon.className = "fas fa-times subImgDelete";
            // icon.style = "position: absolute; right: -5px; top: -5px;";
            // icon.onclick = function() {
            //     // alert();
            //     Swal.fire({
            //         title: 'Anda yakin?',
            //         text: "Ingin Menghapus Image ini Dari Daftar List!",
            //         icon: 'warning',
            //         showCancelButton: true,
            //         confirmButtonColor: '#3085d6',
            //         cancelButtonColor: '#d33',
            //         confirmButtonText: 'Hapus Image!'
            //     }).then((result) => {
            //         if (result.isConfirmed) {
            //             $.ajax({
            //                 method: "POST",
            //                 url: "<?= site_url("function/functionAdmin/productSubImage_delete/") ?>" + item[i]['ItemSubImageId'],
            //                 success: function(response) {
            //                     Swal.fire(
            //                         'Deleted!',
            //                         'Item Berhasil Di Hapus Dari Daftar List.',
            //                         'success'
            //                     )
            //                     $("#gallery-item" + [i]).remove();

            //                 }
            //             })
            //         }
            //     })
            // };

            // div.appendChild(img);
            // div.appendChild(icon);
            // list.appendChild(div);
        }
    }



    function getProjectGallery(item, elementId) {
        const list = document.getElementById(elementId);

        while (list.hasChildNodes()) {
            list.removeChild(list.firstChild);
        }

        for (let i = 0; i < item.length; i++) {
            let a = document.createElement('a');
            a.className = "itemProject col mb-5 d-flex flex-column";

            let img = document.createElement('img');
            img.className = "img-fluid"
            img.style = "height: 15vh; object-fit: cover;";
            img.src = "<?= base_url() ?>/asset/image/project/" + item[i]['CustomerProjectHeaderImg'];
            img.alt = "";

            let span = document.createElement('span');
            span.className = "mt-4";
            span.textContent = item[i]['CustomerProjectTitle'];

            a.appendChild(img);
            a.appendChild(span);

            list.appendChild(a);
        }
    }

    $('#input-MsItemDeskripsiText').keyup(function() {
        $("#MsItemDeskripsiText").text($(this).val());
    });

    $('#input-MsItemColor').keyup(function() {
        $("#MsItemColor").text($(this).val());
    });

    $('#input-MsItemMaterial').keyup(function() {
        $("#MsItemMaterial").text($(this).val());
    });


    var object = {};
    var indexobject = 0;
    foto_upload.on("addedfile", file => {
        $('.dz-preview').addClass('dz-complete');
        $('.dz-details').addClass('d-none');

        object[indexobject] = file;
        $(file.previewTemplate).append("<div class='dz-action'><a onclick='remove_dropzone_file(" + indexobject + ")'><i class='fas fa-times p-2 fa-1x'></i></a></div>");
        $(file.previewTemplate).append("<div class='dz-crop'><a onclick='edit_dropzone_file(" + indexobject + ")'><i class='far fa-edit p-2 fa-1x'></i></a></div>");
        indexobject++;
    });
    remove_dropzone_file = function(file) {
        foto_upload.removeFile(object[file]);
        delete object[file];
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
    $("#modal-close").on('click', function() {
        foto_upload.removeAllFiles(true);
        table.ajax.reload();
    });

    $('#closeToogle').on('click', function() {
        foto_upload.removeAllFiles(true);
        table.ajax.reload();
    })

    function load_data_table() {
        $("#modal-edit").modal("hide");
        table.ajax.reload();
    };


    // function loadURLToInputFiled(url) {
    //     getImgURL(url, (imgBlob) => {
    //         // Load img blob to input
    //         // WIP: UTF8 character error 
    //         let fileName = url.replace(defaultImageLocation, "");
    //         let file = new File([imgBlob], fileName, {
    //             type: "image/jpg",
    //             lastModified: new Date().getTime()
    //         }, 'utf-8');
    //         let container = new DataTransfer();
    //         container.items.add(file);
    //         document.querySelector('#input-MsItemImage').files = container.files;

    //         var reader = new window.FileReader();
    //         reader.readAsDataURL(imgBlob);
    //         reader.onloadend = function() {
    //             base64data = reader.result;
    //             $("#MsItemImage").prop("src", base64data);
    //         }
    //     })
    // }

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
    //         var output = document.getElementById('MsItemImage');
    //         output.src = reader.result;
    //     };
    //     reader.readAsDataURL(event.target.files[0]);
    // };

    // var arr_foto = console.log(foto_upload.files);
    //     for (var i = 0; i < foto_upload.files.length; i++) {
    //         $("#image-temp").append("<image src='" + foto_upload.files[i]["dataURL"] + "'/>");

    //     }

    // $("#test-drop").click(function() {
    //     $("#liveThumb").html("");
    //     var arr_foto = console.log(foto_upload.files);
    //     var data_foto = [];
    //     $.each(arr_foto, function(index,files) {
    //         data_foto.push({
    //             "filename": arr_foto.prop('files')[index].name,
    //             "index": index,
    //         });
    //     });
    // })
    var arr_foto_produk = [];
    $("#test-drop").click(function() {
        $("#liveThumb").html("");
        console.log(foto_upload.files);
        for (var i = 0; i < foto_upload.files.length; i++) {
            $("#liveThumb").append("<image class=\"\img-fluid liThumb\"\ src='" + foto_upload.files[i]["dataURL"] + "'/>");

        }

    })

    var req_status_add = 0;
    $("#btn-simpan").click(function() {
        if (!req_status_add) {
            $("#btn-simpan").html('<i class="fas fa-circle-notch fa-spin"></i> Loading');
            foto_upload.processQueue();
            $.ajax({
                type: 'POST',
                url: "<?= site_url("function/FunctionAdmin/product_edit/") ?>" + $("#input-MsItemDeskripsiRef").val(),
                data: {
                    "MsItemDeskripsiText": $("#input-MsItemDeskripsiText").val(),
                    "MsItemColor": $("#input-MsItemColor").val(),
                    "MsItemMaterial": $("#input-MsItemMaterial").val(),
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
                    foto_upload.removeAllFiles(true);
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