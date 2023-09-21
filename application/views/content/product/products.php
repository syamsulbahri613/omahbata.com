 <div class="container">
     <div class="header-page  row">
         <div class="header col-lg-auto col-12">
             <span class="span-head-produk">PRODUK OMAHBATA</span>
         </div>
         <div class="categori col-md-auto col-12">
             <div class="d-inline-block dropdown-select user-select-none mt-md-2 ms-lg-1" style="z-index: 99;">
                 <div class="dropdown-top"></div>
                 <div class="d-flex flex-row">
                     <div class="d-flex flex-column ps-4" style="width:12rem">
                         <span class="dropdown-label">Kategori</span>
                         <span class="dropdown-selected fw-bold">SEMUA KATEGORI</span>
                     </div>
                     <div class="d-inline-block" style="width:2rem">
                         <i class="pt-4 fas fa-chevron-down pe-2"></i>
                     </div>
                 </div>
                 <ul class="dropdown-list">
                     <li class="dropdown-selected-item select" data-id="0">SEMUA KATEGORI</li>
                    <?php foreach($productKategori as $row) : ?>
                        <li class="dropdown-selected-item" data-id="<?= $row["MsItemCatId"] ?>"><?= $row["MsItemCatName"] ?></li>
                    <?php endforeach;?>
                 </ul>
             </div>
         </div>
         <div class="filter col-md-auto ms-auto">
             <div class="d-flex flex-column filter-data justify-content-end ms-auto ps-2 mt-md-2">
                 <span class="dropdown-label">Cari</span>
                 <div class="d-flex justify-content-between " style="font-size:0.9rem">
                     <div class="flex-grow-1">
                         <div id="input-search" class="input-search align-self-center">
                             <input class="flex-grow-1" type="text" name="search-data" id="search" data-search="">
                             <i class="fas fa-search"></i>
                         </div>
                     </div>
                     <div class="input-filter align-self-center" data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="fas fa-filter"></i>
                         <ul class="dropdown-menu dropdown-menu-end" style="background:#282828;">
                             <li class="dropdown-item select"><i class="fas fa-sort-amount-up-alt"></i>Default</li>
                             <li class="dropdown-item"><i class="fas fa-sort-amount-up-alt"></i>Harga Tertinggi</li>
                             <li class="dropdown-item"><i class="fas fa-sort-amount-down-alt"></i>Harga Terendah</li>
                             <li class="dropdown-item"><i class="fas fa-star"></i>Favorit</li>
                         </ul>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </div>

 <div class="container mt-2 pb-2">
     <hr class="pb-5">

     <div class="produknew-content row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-5" id="data-item" data-index="0">

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
     var id = 0;
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
             url: `<?= base_url("product/getitem/") ?>${id}/${$(".input-search input").val()}` + $("#data-item").data("index"),
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
     //load_data(); 
     $(".dropdown-selected-item").click(function() {
         $(".dropdown-selected-item").removeClass("select");
         id = $(this).data("id");
         $(".dropdown-selected-item").each(function(index) {
             if ($(this).data("id") == id) {
                 $(this).addClass("select");
                 $(".dropdown-selected").html($(this).html());
             }
         });
         $("#data-item").html("");
         $("#data-item").data("index", 0);
         load_data(id);
     });
     load_data(id);
     console.log($.urlParam('search'));


     $("#input-search").hover(
         function() {
             console.log($(".input-search input").val());
             $(this).addClass("active");
         },
         function() {
             console.log($(".input-search input").val());
             if ($(".input-search input").val() == "") {
                 $(".input-search").removeClass("active");
             }
         }
     );

     
         $('.add_cart').click(function(){
             var MsItemRef = $(this).data("MsItemRef");
             var Qty = $(this).data("Qty");
             // var MsItemPrice = $('#' + produk_id).val;
             $.ajax({
                 url : "<?= base_url() ?>cart/add_to_cart",
                 method : "POST",
                 data : {
                     MsItemRef : MsItemRef,
                     Qty : Qty
                 },
                 success: function(data){
                     $('#detail_cart').html(data);
                 }
             });
         });

         // $('#detail_cart').load("<?= base_url(); ?>cart/load_cart");

         // //Hapus Item Cart
         // $(document).on('click','.hapus_cart',function(){
         //     var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
         //     $.ajax({
         //         url : "<?= base_url(); ?>cart/hapus_cart",
         //         method : "POST",
         //         data : {row_id : row_id},
         //         success :function(data){
         //             // $('#detail_cart').html(data);
         //             alert(data);
         //         }
         //     });
         // });

     

     //  $(function() {
     //      const Toast = Swal.mixin({
     //          toast: true,
     //          position: 'top-end',
     //          showConfirmButton: false,
     //          timer: 3000
     //      });

     //      $('.swalWishList').click(function() {
     //          Toast.fire({
     //              icon: 'success',
     //              title: 'Produk Berhasil Di Tambah ke  Wishlist'
     //          })
     //      });

     //      $('.swalCart').click(function() {
     //          Toast.fire({
     //              icon: 'success',
     //              title: 'Produk Berhasil Di Tambah Ke Keranjang'
     //          })
     //      });
     //  });
 </script>