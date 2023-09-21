<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h3 class="fw-bold mb-4 text-gray-800 text-uppercase">Kategori</h3>
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
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Background</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modal-edit" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">EDIT COVER KATEGORI</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="py-5 jumbotron" style="position: relative; overflow: hidden;height: 400px;">
                        <img class="img-display" src="<?= base_url("asset/image/test.jpg") ?>" id="CategoryDetailImg">
                        <div class="img-background"></div>
                        <div class="img-text">
                            <h1 class="fw-bolder" id="CategoryDetailHeader">https://Omahbata.com</h1>
                            <small class="fw-normal fs-3" id="CategoryDetailText">Omahbata penyedia berbagai macam Bata Expose, Bata Tempel Roster Dan Paving</small>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-1">
                        <label for="input-pencarian" class="col-sm-2 col-form-label">Header</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="input-CategoryDetailHeader">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="input-pencarian" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="input-CategoryDetailText">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label for="input-pencarian" class="col-sm-2 col-form-label">Background</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control form-control-sm" id="input-CategoryDetailImg" accept="image/*" onchange="loadFile(event)">
                            <small class="text-secondary">Optimal ukuran file gambar 1200 x 400 px </small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                    <button type="button" class="btn btn-success" id="btn-simpan" data-id=0>Simpan</button>
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
        "pageLength": 25,
        "processing": true,
        "language": {
            processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
        },
        "serverSide": true,
        "ajax": {
            "url": "<?php echo site_url('function/Datatable_admin/get_data_kategory') ?>",
            "type": "POST",
            "data": function(data) {
                data.search['value'] = $('#input-pencarian').val();
                data.search['status'] = $('#input-status').val();
                data.search['colstatus'] = "CategoryDetailVisible";
            }
        },
        "order": [],
        "columnDefs": [{
                "orderable": false,
                targets: 0
            },
            {
                "orderable": false,
                targets: 3
            },
            {
                "orderable": false,
                targets: 5,
                className: 'action'
            },
            {
                "visible": false,
                targets: 6,
            },
        ],

    });
    $('#input-pencarian').keyup(function() {
        table.ajax.reload(null, false).responsive.recalc().columns.adjust();
    });
    $('#input-status').change(function() {
        table.ajax.reload(null, false).responsive.recalc().columns.adjust();
    });
    var defaultImageLocation = "<?= base_url("asset/image/headerProduct/") ?>"
    $('#tb_data').on('click', 'td.action', function() {
        var row = table.row(this).data(); // returns undefined  
        $("#CategoryDetailHeader").text(row[1]);
        $("#CategoryDetailText").text(row[2]);
        $("#btn-simpan").data("id", row[6]);

        $("#input-CategoryDetailHeader").val(row[1]);
        $("#input-CategoryDetailText").val(row[2]);
        loadURLToInputFiled($(row[4]).prop('src'));
        $("#modal-edit").modal("show");
    })

    $('#input-CategoryDetailHeader').keyup(function() {
        $("#CategoryDetailHeader").text($(this).val());
    });
    $('#input-CategoryDetailText').keyup(function() {
        $("#CategoryDetailText").text($(this).val());
    });

    function loadURLToInputFiled(url) {
        getImgURL(url, (imgBlob) => {
            // Load img blob to input
            // WIP: UTF8 character error 
            let fileName = url.replace(defaultImageLocation, "");
            let file = new File([imgBlob], fileName, {
                type: "image/jpeg",
                lastModified: new Date().getTime()
            }, 'utf-8');
            let container = new DataTransfer();
            container.items.add(file);
            document.querySelector('#input-CategoryDetailImg').files = container.files;

            var reader = new window.FileReader();
            reader.readAsDataURL(imgBlob);
            reader.onloadend = function() {
                base64data = reader.result;
                $("#CategoryDetailImg").prop("src", base64data);
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
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('CategoryDetailImg');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
<!-- /.container-fluid -->