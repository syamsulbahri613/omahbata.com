<div style="padding-top: 8%; border: 0; background-size: cover;">
    <div class="container">
        <div class="row flex-column text-center justify-content-end" style="height: 100px;">
            <span style="font-size: 2rem; font-weight: 100;">SHOPING <span style="font-weight: 700;">CART</span></span>
        </div>

        <div
            style="margin-top: 3rem; height: auto; padding: 1.5rem 0.3rem; border-radius: 0.5rem; margin-bottom: 5rem; background: #252525; position: relative;">

            <div class="cart-head">
                <input type="checkbox" id="selectAll"> <span class="px-2 px-lg-3">Select All</span>
                <span style="float: right; font-weight: 300;">ITEM (<span style="font-weight: 700;">9</span>)</span>
            </div>

            <div class="re">
                <?php foreach ($data as $index => $row) : ?>
                <div class="cart-detail-content">
                    <div class="cart-detail-content-item">
                        <div class="d-flex gap-2 gap-lg-4">
                            <input style="padding: 1rem;" type="checkbox" class="checkbox"
                                data-id="<?= $row->MsProdukId ?>" data-qty="<?= $row->Qty ?>" id="flexCheckDefault">

                            <?php
                                $url = base_url()."asset/image/produk/".$row->MsProdukId."/".$row->MsProdukCode."";

                                // Menambahkan "_1" pada akhir URL
                                $url_baru = str_replace($row->MsProdukCode, "".$row->MsProdukCode."_1.png", $url);
                             ?>

                            <div style="width: 100px;" class="my-auto mx-sm-3">
                                <img class="img-fluid" src="<?= $url_baru ?>"></img>
                            </div>

                            <div class="d-flex flex-column gap-1 align-self-center">
                                <span class="cartfont-name"> <span
                                        class="cartfont-category"><?= $row->MsItemCatName ?></span>
                                    <?= $row->MsProdukName ?></span>
                                <span class="cartfont-size">
                                    <?php
                                    $varianParts = explode("|", $row->MsProdukDetailVarian);

                                    // Iterasi melalui setiap bagian varian
                                    foreach ($varianParts as $varianPart) {
                                        // Memecah bagian varian menjadi key dan value berdasarkan pemisah ":"
                                        $varian = explode(":", $varianPart);

                                        // Mengambil key dan value varian
                                        $key = $varian[0];
                                        $value = $varian[1];

                                        if ($key !== "Vendor") {
                                            // Menampilkan key dan value varian
                                            echo $key . ": " . $value . "<br>";
                                        }
                                    }
                                ?>
                                </span>

                                <div style=" position: relative; width: 100%;">
                                    <span id="ubah-varian" class="ubah-varian"
                                        data-changeUpdate="<?= $row->MsProdukId ?>">Ubah
                                        varian <i class="fas fa-caret-down"></i></span>

                                    <div id="varian-dropdown" class="varian-dropdown">

                                        <?php
                                            $varian = (explode(";",$row->MsProdukVarian));
                                            foreach($varian as $rows){
                                                $varheader = (explode(":",$rows));
                                                if($varheader[0] != "Vendor"){
                                                    echo '<span style="list-style: none; padding: 0.5rem;">'.$varheader[0].'</span>
                                                    <div class="d-flex flex-wrap gap-1 p-2 w-100">';
                        
                                                $vardetail = (explode("|",$varheader[1]));
                                                $k = 0;
                                                foreach($vardetail as $rows){
                                                    echo '<span class="varian-btn" id="'.$varheader[0].'" data-var="'.$rows.'">'.$rows.'</span>';
                                                }
                                                echo '</div>';
                                                }
                                                
                                            }
                                        ?>

                                        <div class="d-flex justify-content-end py-3 px-2 gap-1">
                                            <button style="font-size: 0.7rem;"
                                                class="btn btn-sm btn-light">Nanti</button>
                                            <button style="font-size: 0.7rem;" class="btn btn-sm btn-success"
                                                id="btn-changeVarian"
                                                data-productRef="<?= $row->MsProdukId ?> data-changeVarian="
                                                <?= $row->CartDetailId ?>">Konfirmasi</button>
                                        </div>
                                        <div class="triangles"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="d-flex justify-content-center align-items-center">
                                <span class="cartfont-price">Rp . 15000 /
                                    Pcs</span>
                            </div> -->

                        <div class="cart-detail-content-item-qty">
                            <div class="cart-input-box">
                                <div class="dec btn-chart-nav">-</div>
                                <input type="number" name="french-hens" class="input-text-keranjang" id="french-hens"
                                    value="<?= $row->Qty ?>">
                                <div class="inc btn-chart-nav">+</div>
                            </div>

                            <div class="d-flex justify-content-center align-items-center">
                                <p class="cartfont-price" id="price">Rp .
                                    <?= number_format($row->MsProdukDetailPrice) ?> /
                                    <?= $row->SatuanName ?></p>
                            </div>
                        </div>
                    </div>
                    <i class="fas fa-times delete-cart" data-id_produk="<?= $row->MsItemCartId ?>"></i>
                </div>
                <?php endforeach; ?>
            </div>


            <div class="cart-detail-count d-flex flex-column">
                <div>
                    <i class="fas fa-shopping-cart fs-4 px-2 text-dark"></i> <span
                        style="color: black; font-size: 1.5rem; font-weight: 400; letter-spacing: 2px;">Keranjang
                        Saya</span>
                </div>

                <div class="py-4">
                    <div style="display: flex; justify-content:space-between; align-items: center;">
                        <span style="color: black; font-weight: 300; letter-spacing: 3px;">Produk Dipilih</span>
                        <span id="jmlItm"
                            style="color: black; font-size: 1.2rem; font-weight: 400; letter-spacing: 2px;">0</span>
                    </div>

                    <div style="display: flex; justify-content:space-between; align-items: center;">
                        <span style="color: black; font-weight: 300; letter-spacing: 3px;">Total</span>
                        <span
                            style="color: black; font-size: 1.2rem; font-weight: 400; letter-spacing: 2px;">Rp.120.000</span>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <button class="cart-detail-chckout">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
         // Mendapatkan elemen checkbox "Select All"
var selectAllCheckbox = document.getElementById('selectAll');

// Mendapatkan elemen-elemen checkbox lainnya dengan class "checkbox"
var checkboxes = document.getElementsByClassName('checkbox');

// Array untuk menyimpan data item yang dicentang
var selectedItems = [];

var selectedCountElement = document.getElementById('jmlItm');

// Menambahkan event listener pada checkbox "Select All"
selectAllCheckbox.addEventListener('change', function() {
    // Iterasi melalui semua checkbox lainnya
    for (var i = 0; i < checkboxes.length; i++) {
        // Setiap checkbox lainnya diubah berdasarkan status checkbox "Select All"
        checkboxes[i].checked = selectAllCheckbox.checked;

        // Mengambil data ID dan Qty item ketika checkbox dicentang
        if (selectAllCheckbox.checked) {
            var itemId = checkboxes[i].getAttribute('data-id');
            var itemQty = checkboxes[i].getAttribute('data-qty');
            console.log("Item ID: " + itemId + ", Qty: " + itemQty);
            // Menambahkan data item ke dalam array jika belum ada
            if (!isItemInArray(itemId)) {
                selectedItems.push({
                    MsItemRef: itemId,
                    Qty: itemQty
                });
            }
        } else {
            // Menghapus data item dari array jika checkbox di-uncheck
            var itemId = checkboxes[i].getAttribute('data-id');
            removeItemFromArray(itemId);
        }
    }

    // Merefresh data yang telah diseleksi ke dalam array
    refreshSelectedData();
    updateSelectedCount();
});

// Menambahkan event listener pada setiap checkbox lainnya
for (var i = 0; i < checkboxes.length; i++) {
    checkboxes[i].addEventListener('change', function() {
        // Periksa apakah semua checkbox lainnya telah dicentang
        var allChecked = true;
        for (var j = 0; j < checkboxes.length; j++) {
            if (!checkboxes[j].checked) {
                allChecked = false;
                break;
            }
        }

        // Checkbox "Select All" diubah berdasarkan status checkbox lainnya
        selectAllCheckbox.checked = allChecked;

        // Mengambil data ID dan Qty item ketika checkbox dicentang atau di-uncheck
        var itemId = this.getAttribute('data-id');
        var itemQty = this.getAttribute('data-qty');
        if (this.checked) {
            console.log("Item ID: " + itemId + ", Qty: " + itemQty);
            // Menambahkan data item ke dalam array jika belum ada
            if (!isItemInArray(itemId)) {
                selectedItems.push({
                    MsItemRef: itemId,
                    Qty: itemQty
                });
            }
        } else {
            console.log("Item ID unchecked: " + itemId);
            // Menghapus data item dari array jika checkbox di-uncheck
            removeItemFromArray(itemId);
        }

        // Merefresh data yang telah diseleksi ke dalam array
        refreshSelectedData();
        updateSelectedCount();
    });
}

// Fungsi untuk memeriksa apakah item sudah ada dalam array
function isItemInArray(itemId) {
    for (var i = 0; i < selectedItems.length; i++) {
        if (selectedItems[i].MsItemRef === itemId) {
            return true;
        }
    }
    return false;
}

// Fungsi untuk menghapus item dari array
function removeItemFromArray(itemId) {
    for (var i = 0; i < selectedItems.length; i++) {
        if (selectedItems[i].MsItemRef === itemId) {
            selectedItems.splice(i, 1);
            break;
        }
    }
}

// Fungsi untuk merefresh data yang telah diseleksi ke dalam array
function refreshSelectedData() {
    // Lakukan tindakan refresh data yang diinginkan dengan menggunakan array selectedItems
    console.log("Refreshing selected data...");
    console.log("Selected Items: ", selectedItems);
}

function updateSelectedCount() {
    selectedCountElement.innerText = selectedItems.length;
}

const ubahVarianSpanList = document.querySelectorAll('.ubah-varian');

ubahVarianSpanList.forEach(function(ubahVarianSpan) {
    ubahVarianSpan.addEventListener('click', function(e) {
        const varianDropdown = e.target.nextElementSibling;

        // Mengubah kelas "aktif" pada span varian yang diklik
        ubahVarianSpanList.forEach(function(span) {
            span.classList.remove('aktif');
        });
        ubahVarianSpan.classList.add('active');

        if (!varianDropdown.classList.contains('show')) {
            varianDropdown.classList.add('show');
        } else {
            varianDropdown.classList.remove('show');
        }
    });
});

document.addEventListener('click', function(event) {
    const targetElement = event.target;

    ubahVarianSpanList.forEach(function(ubahVarianSpan) {
        const varianDropdown = ubahVarianSpan.nextElementSibling;

        if (!varianDropdown.contains(targetElement) && targetElement !== ubahVarianSpan) {
            varianDropdown.classList.remove('show');
            ubahVarianSpan.classList.remove('active');
        }
    });
});


    var size = "";
    var color = "";
    var sizeSelected = false;
    var colorSelected = false;
    // var hargatotal = "";
    // var idDetail = "";

    $('#btn-changeVarian').prop('disabled', true);

    $('.varian-btn#Ukuran').click(function() {
        sizevar = $(this).data("var");
        size = sizevar;

        $('.varian-btn#Ukuran').removeClass('ukuran active');
        $(this).addClass('ukuran active');
        colorSelected = true;
        validateSelected();

    });

    $('.varian-btn#Warna').click(function() {
        colorvar = $(this).data("var");
        color = colorvar;

        $('.varian-btn#Warna').removeClass('warna active');
        $(this).addClass('warna active');
        sizeSelected = true;
        validateSelected();
    });

    function validateSelected() {
        var totalVarian = $('.ukuran').length + $('.warna').length;
        var selectedVarian = $('.ukuran.active').length + $('.warna.active').length;

        if (selectedVarian === totalVarian) {
            $('#btn-changeVarian').prop('disabled', false);
            detailProduk();
        } else {
            $('#btn-changeVarian').prop('disabled', true);
        }
    }

    function detailProduk() {
        var data = {};
        var produkId = <?= $row->MsProdukId ?>;

        $('.ukuran.active').each(function() {
            var ukuran = $(this).data("var");
            data['varsize'] = ukuran;
        });

        $('.warna.active').each(function() {
            var warna = $(this).data("var");
            data['varcolor'] = warna;
        });

        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>function/FunctionUser/getItemVarianSelected/" + produkId,
            data: data,
            dataType: 'json',
            success: function(response) {
                var produkdetail = response.produkdetail;
                $('#price').text(produkdetail);
            }
        });
    }

function createClickHandler(idProdukCart) {
    return function() {
      // Tampilkan pop-up konfirmasi Swal
      Swal.fire({
        title: 'Konfirmasi',
        text: 'Anda yakin ingin menghapus produk ini dari keranjang?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
      }).then((result) => {
        // Jika pengguna mengklik tombol "Yes" pada pop-up konfirmasi
        if (result.isConfirmed) {
          // Panggil fungsi untuk menghapus data dari database dengan menyertakan idProduk
          hapusDataDariDatabase(idProdukCart);
        }
      });
    };
  }

  // Loop untuk menambahkan event handler ke setiap ikon tombol hapus
  $(".delete-cart").each(function() {
    var idProdukCart = $(this).data('id_produk');
    $(this).on("click", createClickHandler(idProdukCart));
  });

  // Buat fungsi untuk menghapus data dari database dengan menerima idProduk sebagai parameter
  function hapusDataDariDatabase(idProdukCart) {
    $.ajax({
      type: "POST",
      url: "<?= base_url() ?>function/FunctionUser/deleteProdukCart/",
      data: {
        idProdukCart: idProdukCart
      },
      success: function(response) {
        Swal.fire({
          title: 'Sukses',
          text: response.message,
          icon: 'success'
        });

        setTimeout(function() {
          location.reload();
        }, 1000);
      },
      error: function(xhr, status, error) {
        Swal.fire({
          title: 'Error',
          text: 'Gagal menghapus produk dari database.',
          icon: 'error'
        });
      }
    });
  }

});
</script>