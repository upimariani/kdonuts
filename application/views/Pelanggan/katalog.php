<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        <?php
                        foreach ($produk as $key => $value) {
                        ?>
                            <li><a href="#"><?= $value->nama_barang ?></a></li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="<?= base_url('asset/ogani-master/img/kdonuts.png') ?>">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php
                foreach ($produk as $key => $value) {
                ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">
                            <h5><a href="#"><?= $value->nama_barang ?></a></h5>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter=".terlaris">Produk Terlaris</li>
                        <li data-filter=".terbaik">Produk Terbaik</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php
            foreach ($terlaris as $key => $value) {
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix terlaris">
                    <form action="<?= base_url('pelanggan/ccart/add') ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $value->id_barang ?>">
                        <input type="hidden" name="name" value="<?= $value->nama_barang ?>">
                        <input type="hidden" name="price" value="<?= $value->harga_barang - ($value->diskon / 100 * $value->harga_barang) ?>">
                        <input type="hidden" name="qty" value="1">
                        <input type="hidden" name="picture" value="<?= $value->gambar ?>">
                        <input type="hidden" name="stok" value="<?= $value->qty_barang ?>">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><button type="submit"><i class="fa fa-shopping-cart"></i></button></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#"><?= $value->nama_barang ?></a></h6>
                                <h5>Rp. <?= number_format($value->harga_barang - ($value->diskon / 100 * $value->harga_barang)) ?></h5>
                            </div>
                        </div>
                    </form>
                </div>
            <?php
            }
            ?>
            <?php
            foreach ($rating as $key => $value) {
            ?>

                <div class="col-lg-3 col-md-4 col-sm-6 mix terbaik">
                    <form action="<?= base_url('pelanggan/ccart/add') ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $value->id_barang ?>">
                        <input type="hidden" name="name" value="<?= $value->nama_barang ?>">
                        <input type="hidden" name="price" value="<?= $value->harga_barang - ($value->diskon / 100 * $value->harga_barang) ?>">
                        <input type="hidden" name="qty" value="1">
                        <input type="hidden" name="picture" value="<?= $value->gambar ?>">
                        <input type="hidden" name="stok" value="<?= $value->qty_barang ?>">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><button type="submit"><i class="fa fa-shopping-cart"></i></button></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#"><?= $value->nama_barang ?></a></h6>
                                <h5>Rp. <?= number_format($value->harga_barang - ($value->diskon / 100 * $value->harga_barang)) ?></h5>
                            </div>
                        </div>
                    </form>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Blog Section End -->