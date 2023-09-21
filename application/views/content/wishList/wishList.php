<div style="padding-top: 8%; padding-bottom: 8%; border: 0;">
    <div class="container">
        <div class="row flex-column text-center justify-content-end mb-5" style="height: 100px;">
            <span style="font-size: 2rem; font-weight: 100;">WISH <span style="font-weight: 700;">LIST</span></span>
        </div>

        <div class="wishlist-wrapp">

            <div class="wishlist-nav">
                <a style="text-decoration: none;" href="#">
                    <div class="wishlist-nav-a"><span style="position: relative; padding-right: 1rem;">BATA TEMPEL<span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                99+</span></span></div>
                </a>
                <a style="text-decoration: none;" href="#">
                    <div class="wishlist-nav-a"><span style="position: relative; padding-right: 1rem;">BATA EXPOSE<span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                4</span></span></div>
                </a>
                <a style="text-decoration: none;" href="#">
                    <div class="wishlist-nav-a"><span style="position: relative; padding-right: 1rem;">ROSTER<span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                1</span></span></div>
                </a>
                <a style="text-decoration: none;" href="#">
                    <div class="wishlist-nav-a"><span style="position: relative; padding-right: 1rem;">ROBLOCK<span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                0<span class="visually-hidden">unread messages</span></span></span></div>
                </a>
            </div>

            <div class="wishlist-content row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php foreach ($data as $row) : ?>
                <div class="produknew-contain d-flex flex-column p-2">
                    <img src="<?= base_url() ?>asset/image/product/BTL0002.png" class="produknew-img"
                        alt="">

                    <div class="produknew-detail d-flex flex-column">
                        <span style="margin-top: 2.2rem; padding: 0 1rem; font-size: 1.1rem; font-weight: 700;"><?= $row->MsItemName ?></span>
                        <span style="padding: 0 1rem; font-size: 0.8rem; font-weight: 300;"><?= $row->MsItemSize ?></span>
                        <span style="padding: 1rem 1rem; font-size: 1rem;"><i class="fas fa-tag text-light"></i> Rp. <?= number_format($row->MsItemPrice) ?> / <?= $row->MsItemUoM ?></span>


                        <div id="btnCart" class="produknew-marker swalWishList">
                            <i class="fas fa-heart"></i>
                        </div>
                        <input type="hidden" id="qtycart" value="1">

                        <div class="produknew-detail-button">
                            <i class="add_cart btn-produknew-cart fas fs-4 fa-shopping-cart swalCart"></i>
                            <a href="<?= base_url() ?>product/detailItem/<?= $row->MsItemId ?>"><i class="btn-produknew-buy fs-4 fas fa-dollar-sign"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>