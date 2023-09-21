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
                        <a class="link-dashboard" href="<?= base_url() ?>user/kelolaAkun" style="text-decoration: none; transition: 0.2s;">
                            <div class="p-3">
                                <i class="fas px-2 fa-user"></i> <span
                                    style="font-size: 1rem; letter-spacing: 4px;">Akun</span>
                            </div>
                        </a>

                        <a class="link-dashboard" href="<?= base_url() ?>user/order"
                            style="background: #dc3545; text-decoration: none; transition: 0.2s;">
                            <div class="p-3">
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
                <div class="d-flex justify-content-left overflow-auto" style="background: #2e3236;">
                    <div class="nav-order selectnav py-3 px-4" data-id="1">
                        <span>Belum Dibayar</span>
                    </div>
                    <div class="nav-order py-3 px-4" data-id="2">
                        <span>Dikemas</span>
                    </div>
                    <div class="nav-order py-3 px-4" data-id="3">
                        <span>Dikirim</span>
                    </div>
                    <div class="nav-order py-3 px-4" data-id="4">
                        <span>Selesai</span>
                    </div>
                    <div class="nav-order py-3 px-4" data-id="5">
                        <span>Dibatalkan</span>
                    </div>
                    <input name="sesid" type="hidden" value="<?= $this->session->userdata('MsCustomerId') ?>">
                </div>

                <div class="input-group flex-nowrap p-2 mt-2" style="background-color: #383c40;">
                    <span class="input-group-text rounded-0 border-0" style="background-color: #1a1c1e;"
                        id="addon-wrapping"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control rounded-0 border-0 shadow-none"
                        style="color: white; background-color: #1a1c1e;"
                        placeholder="Kamu bisa cari berdasarkan Nama Produk" aria-label="Username"
                        aria-describedby="addon-wrapping">
                </div>

                <div class="p-2" style=" background-color: #383c40;" id="data-item" data-index="0">

                </div>
            </div>
        </div>
    </div>
</div>

<script>
     $.urlParam = function(name) {
         var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
         if (results == null) {
             return null;
         }
         return decodeURI(results[1]) || 0;
     }

     var id = 1;
     var loaddata = true;
     var request; // Stores the XMLHTTPRequest object
     var timeout; // Stores time
     $(window).scroll(function() {
         if ($(window).scrollTop() == $(document).height() - $(window).height()) {
             if (loaddata) {
                 load_data(id);
             }
         }
     });
     load_data = function(id) {
         // return;
         $(".loading").css("display", "block");
         request = $.ajax({
             url: `<?= base_url("user/getCheckout/") ?>${id}/` + $("#data-item").data("index")+'/' + $("input[name=sesid]").val(),
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

     $(".nav-order").click(function() {
         $(".nav-order").removeClass("selectnav");
         id = $(this).data("id");
         $(".nav-order").each(function(index) {
             if ($(this).data("id") == id) {
                 $(this).addClass("selectnav");
             }
         });
         $("#data-item").html("");
         $("#data-item").data("index", 0);
         load_data(id);
     });
     load_data(id);
     console.log($.urlParam('search'));
</script>