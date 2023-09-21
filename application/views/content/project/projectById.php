<div class="container-fluid" style="padding-top: 8%;">
    <?php foreach ($projectById as $item) : ?>
    <div class="row row-cols-1 row-cols-lg-2 mb-3 py-5 align-items-center">
        <div class="mb-5 col-lg">
            <div class="img-fluid p-4 rounded-1 img-project"
                style="background-image: url(<?= base_url('asset/image/project/' . $item["CustomerProjectHeaderImg"] . '') ?>); background-size: cover; object-fit: cover; background-position: center;">
            </div>
        </div>
        <div class="col-lg justify-content-lg-evenly align-content-center">
            <div class="row p-1 p-lg-3">
                <span class="span-project-addres"><?= date('d F Y', strtotime($item["CustomerProjectDate"])); ?> |
                    <?= $item["CustomerProjectAddress"] ?></span>
                <span class="span-project-title"><?= $item["CustomerProjectTitle"] ?></span>
                <span class="span-project-desk"><?= $item["CustomerProjectDeskripsi"] ?></span>
            </div>
        </div>
    </div>
    <hr>
    <?php endforeach; ?>


    <div class="row row-cols-1 row-cols-lg-2 flex-column-reverse flex-lg-row">
        <div class="col col-lg-8">
            <span class="headgalleryproject p-sm-4 p-lg-5">Gallery <span
                    style="font-weight: 700;">Project</span></span>
            <div class="row row-cols-1 mt-4 text-center">
                <?php foreach ($projectGallery as $row) : ?>
                <div class="col mb-1 mb-lg-5 p-sm-4 p-lg-5">
                    <img class="img-fluid mb-4"
                        src="<?= base_url() ?>/asset/image/galleryProject/<?= $row["CustomerProjectGalleryImage"] ?>"
                        alt="">
                    <small><?= $row["CustomerProjectGalleryDesk"] ?></small>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col col-lg-4">
            <div class="project-kategori">
                <div class="input-group mb-2 mt-2" style="max-width: 80%;">
                    <input type="text" class="form-control"
                        style="border-radius: 0.2rem; background: none; color: white;">
                    <span class="input-group-text bg-transparent" style="border-radius: 0.2rem;"><i
                            class="fas fa-search"></i></span>
                </div>

                <div style="padding-top : 2.5rem; margin-bottom: 0.5rem;">
                    <span style="font-weight: 700; font-size: 1.3rem;">KATEGORI</span>
                </div>

                <ul style="text-decoration: none; list-style: none; padding: 0.5rem 0;">
                    <?php foreach($productKategori as $row) : ?>
                    <li class="li-tags" data-id="<?= $row["MsItemCatId"] ?>"><span><?= $row["MsItemCatName"] ?></span>
                    </li>
                    <?php endforeach;?>
                </ul>

            </div>
        </div>
    </div>

    <div class="row py-3 p-xl-5">
        <span class="headgalleryproject p-sm-4 p-lg-5">Item yang <span
                style="font-weight: 700;">digunakan</span></span>
        <div class="row row-cols-2 mt-4 row-cols-md-4 row-cols-xl-5 row-cols-xxl-6  m-auto p-sm-4 p-lg-5">
            <?php foreach ($projectItem as $item) : ?>
            <div class="col mb-3 shadow shadow-sm mb-4 p-2 justify-content-center">
                <div class="d-flex flex-column justify-content-center text-center">
                    <img class="img-fluid"
                        src="<?= base_url() ?>asset/image/subProduct/<?= $item["ItemSubImageFileName"] ?>" alt="img">
                    <span class="fw-normal mt-2 p-2"><?= $item["MsItemName"]; ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>