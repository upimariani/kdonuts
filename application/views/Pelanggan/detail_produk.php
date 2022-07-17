<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" style="height: 550px;" src="<?= base_url('asset/foto-produk/' . $detail['produk']->gambar) ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <form action="<?= base_url('pelanggan/ccart/add') ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $detail['produk']->id_barang ?>">
                    <input type="hidden" name="name" value="<?= $detail['produk']->nama_barang ?>">
                    <input type="hidden" name="price" value="<?= $detail['produk']->harga_barang - ($detail['produk']->diskon / 100 * $detail['produk']->harga_barang) ?>">

                    <input type="hidden" name="picture" value="<?= $detail['produk']->gambar ?>">
                    <input type="hidden" name="stok" value="<?= $detail['produk']->qty_barang ?>">
                    <div class="product__details__text">
                        <h3><?= $detail['produk']->nama_barang ?></h3>

                        <div class="product__details__price">Rp. <?= number_format($detail['produk']->harga_barang - ($detail['produk']->diskon / 100 * $detail['produk']->harga_barang)) ?></div>
                        <p><?= $detail['produk']->deskripsi ?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" name="qty" value="1">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="primary-btn">ADD TO CARD</button>
                        <ul>
                            <li><b>Availability</b> <span>In Stock (<?= $detail['produk']->qty_barang ?>)</span></li>

                        </ul>
                    </div>
                </form>
            </div>

            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">

                        <li class="nav-item">
                            <h3 class="nav-link" aria-selected="false">Reviews</h3>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="product__details__tab__desc">
                            <?php
                            foreach ($detail['review'] as $key => $value) {
                            ?>
                                <h6><?= $value->nama_lengkap ?></h6>

                                <div> <?php
                                        if ($value->info_penilaian == 5) {
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                        } else if ($value->info_penilaian == 4) {
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        } else if ($value->info_penilaian == 3) {
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        } else if ($value->info_penilaian == 2) {
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        } else if ($value->info_penilaian == 1) {
                                            echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                            echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
                                        }
                                        ?></div>
                                <span class="badge badge-warning"><?= $value->tanggal ?></span>
                                <p><?= $value->review ?></p>
                                <hr>
                            <?php
                            }
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->