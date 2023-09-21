<div style="padding-top: 8%; border: 0; background-size: cover;">
    <div class="container">
        <div class="row flex-column text-center justify-content-end" style="height: 100px;">
            <span style="font-size: 2rem; font-weight: 100;">OUR <span style="font-weight: 700;">LOCATIONS</span></span>
        </div>

        <div class="d-flex flex-column justify-content-center p-4 mt-4 align-items-center">

            <div class="contact row row-cols-1 justify-content-center row-cols-md-2 py-4 p-1 mb-5">
                <div class="row col-md-5 mb-2">
                    <img class="img-fluid" style="object-fit: cover;" src="<?= base_url('asset/image/stor.png') ?>" alt="image">

                </div>
                <div class="row col-md-7 p-2">
                    <div class="d-flex flex-column">
                        <span style="font-size: 1.5rem; font-weight: 600; line-height: 3rem; color: #a7a7a7; margin-bottom: 2rem;">Omahbata Pondok Pinang</span>
                        <span style="font-size: 1rem; margin-bottom: 1rem; font-weight: 300; color: #a7a7a7;">Jl. Ciputat Raya No.59, RT.5/RW.2, Pondok Pinang, Kebayoran Lama, South Jakarta City, Jakarta 12310</span>
                        <div class="">
                            <?php
                            if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=628128201414&text=' . urlencode('Halo omahbata');
                            // tapi kalau desktop pakai web.whatsapp.com
                            else $linkWA = 'https://web.whatsapp.com/send?phone=628128201414&text=' . urlencode('Halo omahbata');
                            ?>
                            <a style="text-decoration: none; color: white;" target="_blank" href="<?= $linkWA ?>">
                                <span style="font-size: 1.1rem; font-weight: 500; color: #a7a7a7;"><i class="fab fa-whatsapp fa-lg mb-5" style="color: #a7a7a7;"></i> 0812-8201-414</span>
                            </a>
                        </div>

                        <div class="p-0 d-flex justify-content-end">
                            <a class="tombol-contact d-flex btn btn-lg rounded-0 px-3 py-3" href="http://maps.google.com/?q=1200 Omahbata - Toko Bata Expose , Toko Bata Tempel"><i class="fas fa-map-marker-alt fs-4" style="color: #a7a7a7;"></i></a>

                            <?php
                            if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=628128201414&text=' . urlencode('Halo omahbata');
                            // tapi kalau desktop pakai web.whatsapp.com
                            else $linkWA = 'https://web.whatsapp.com/send?phone=628128201414&text=' . urlencode('Halo omahbata');
                            ?>

                            <a class="tombol-contact d-flex btn btn-lg rounded-0 px-3 py-3" target="_blank" href="<?= $linkWA ?>"><i class="fab fa-whatsapp fs-4" style="color: #a7a7a7;"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact row row-cols-1 justify-content-center row-cols-md-2 py-4 p-1 mb-5">
                <div class="row col-md-5 mb-2">
                    <img class="img-fluid" style="object-fit: cover;" src="<?= base_url('asset/image/stor.png') ?>" alt="image">

                </div>
                <div class="row col-md-7 p-2">
                    <div class="d-flex flex-column">
                        <span style="font-size: 1.5rem; font-weight: 600; line-height: 3rem; margin-bottom: 2rem; color: #a7a7a7;">Toko Roster BSD</span>
                        <span style="font-size: 1rem; margin-bottom: 1rem; font-weight: 300; color: #a7a7a7;">Jl. Raya Ciater No.185 E Kampung Maruga Rt 004/09 Kelurahan Ciater, Kecamatan Serpong, Tangerang Selatan</span>
                        <div class="">
                            <?php
                            if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=6281213481313&text=' . urlencode('Halo omahbata');
                            // tapi kalau desktop pakai web.whatsapp.com
                            else $linkWA = 'https://web.whatsapp.com/send?phone=6281213481313&text=' . urlencode('Halo omahbata');
                            ?>
                            <a style="text-decoration: none; color: white;" target="_blank" href="<?= $linkWA ?>">
                                <span style="font-size: 1.1rem; font-weight: 500; color: #a7a7a7;"><i class="fab fa-whatsapp fa-lg mb-5" style="color: #a7a7a7;"></i> 0812-1348-1313</span>
                            </a>
                        </div>

                        <div class="p-0 d-flex justify-content-end">
                            <a class="tombol-contact d-flex btn tombol-contact btn-lg rounded-0 px-3 py-3" href="http://maps.google.com/?q=1200 Toko Roster BSD - Jual Lubang Angin - Jual Roster Custom - Pabrik Roster - Toko Roster Serpong"><i class="fas fa-map-marker-alt fs-4" style="color: #a7a7a7;"></i></a>

                            <?php
                            if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=6281213481313&text=' . urlencode('Halo omahbata');
                            // tapi kalau desktop pakai web.whatsapp.com
                            else $linkWA = 'https://web.whatsapp.com/send?phone=6281213481313&text=' . urlencode('Halo omahbata');
                            ?>

                            <a class="tombol-contact d-flex btn tombol-contact btn-lg rounded-0 px-3 py-3" target="_blank" href="<?= $linkWA ?>"><i class="fab fa-whatsapp fs-4" style="color: #a7a7a7;"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact row row-cols-1 justify-content-center row-cols-md-2 py-4 p-1 mb-5">
                <div class="row col-md-5 mb-2">
                    <img class="img-fluid" style="object-fit: cover;" src="<?= base_url('asset/image/stor.png') ?>" alt="image">

                </div>
                <div class="row col-md-7 p-2">
                    <div class="d-flex flex-column">
                        <span style="font-size: 1.5rem; font-weight: 600; line-height: 3rem; margin-bottom: 2rem; color: #a7a7a7;">Pabrik Roster Bogor</span>
                        <span style="font-size: 1rem; margin-bottom: 1rem; font-weight: 300; color: #a7a7a7;">Jl. Raya Jakarta-Bogor No.KM.28, RT. 001/RW.No.5, Pekayon, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Inukota Jakarta 13710</span>
                        <div class="">
                            <?php
                            if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=6281312348313&text=' . urlencode('Halo omahbata');
                            // tapi kalau desktop pakai web.whatsapp.com
                            else $linkWA = 'https://web.whatsapp.com/send?phone=6281312348313&text=' . urlencode('Halo omahbata');
                            ?>
                            <a style="text-decoration: none; color: white;" target="_blank" href="<?= $linkWA ?>">
                                <span style="font-size: 1.1rem; font-weight: 500; color: #a7a7a7;"><i class="fab fa-whatsapp fa-lg mb-5" style="color: #a7a7a7;"></i> 0813-1234-8313</span>
                            </a>
                        </div>

                        <div class="p-0 d-flex justify-content-end">
                            <a class="tombol-contact d-flex btn tombol-contact btn-lg rounded-0 px-3 py-3" href="http://maps.google.com/?q=1200 PABRIK ROSTER - Pabrik Roster, Lubang Angin, Toko Roster, Jual Bata Tempel, Jual Bata Expose"><i class="fas fa-map-marker-alt fs-4" style="color: #a7a7a7;"></i></a>

                            <?php
                            if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=6281312348313&text=' . urlencode('Halo omahbata');
                            // tapi kalau desktop pakai web.whatsapp.com
                            else $linkWA = 'https://web.whatsapp.com/send?phone=6281312348313&text=' . urlencode('Halo omahbata');
                            ?>

                            <a class="tombol-contact d-flex btn tombol-contact btn-lg rounded-0 px-3 py-3" target="_blank" href="<?= $linkWA ?>"><i class="fab fa-whatsapp fs-4" style="color: #a7a7a7;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>