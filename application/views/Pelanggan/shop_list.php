<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= base_url('asset/ogani-master/') ?>img/little.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>KDONUTS</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shop List</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Department</h4>
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
                    <div class="sidebar__item">
                        <h4>Price</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="540">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__item sidebar__item__color--option">
                        <h4>Colors</h4>
                        <div class="sidebar__item__color sidebar__item__color--white">
                            <label for="white">
                                White
                                <input type="radio" id="white">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--gray">
                            <label for="gray">
                                Gray
                                <input type="radio" id="gray">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--red">
                            <label for="red">
                                Red
                                <input type="radio" id="red">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--black">
                            <label for="black">
                                Black
                                <input type="radio" id="black">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--blue">
                            <label for="blue">
                                Blue
                                <input type="radio" id="blue">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--green">
                            <label for="green">
                                Green
                                <input type="radio" id="green">
                            </label>
                        </div>
                    </div>
                    <div class="sidebar__item">
                        <h4>Popular Size</h4>
                        <div class="sidebar__item__size">
                            <label for="large">
                                Large
                                <input type="radio" id="large">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="medium">
                                Medium
                                <input type="radio" id="medium">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="small">
                                Small
                                <input type="radio" id="small">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="tiny">
                                Tiny
                                <input type="radio" id="tiny">
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        <h2>Sale Off</h2>
                    </div>
                    <div class="row">
                        <div class="product__discount__slider owl-carousel">
                            <?php
                            foreach ($produk as $key => $value) {
                                if ($value->diskon != 0) {
                            ?>
                                    <div class="col-lg-4">
                                        <form action="<?= base_url('pelanggan/ccart/add') ?>" method="POST">
                                            <input type="hidden" name="id" value="<?= $value->id_barang ?>">
                                            <input type="hidden" name="name" value="<?= $value->nama_barang ?>">
                                            <input type="hidden" name="price" value="<?= $value->harga_barang - ($value->diskon / 100 * $value->harga_barang) ?>">
                                            <input type="hidden" name="qty" value="1">
                                            <input type="hidden" name="picture" value="<?= $value->gambar ?>">
                                            <input type="hidden" name="stok" value="<?= $value->qty_barang ?>">
                                            <div class="product__discount__item">
                                                <div class="product__discount__item__pic set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">
                                                    <div class="product__discount__percent">-<?= $value->diskon ?>%</div>
                                                    <ul class="product__item__pic__hover">
                                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                        <li><button type="submit"><i class="fa fa-shopping-cart"></i></button></li>
                                                    </ul>
                                                </div>
                                                <div class="product__discount__item__text">
                                                    <span>Dried Fruit</span>
                                                    <h5><a href="#"><?= $value->nama_barang ?></a></h5>
                                                    <div class="product__item__price">Rp. <?= number_format($value->harga_barang - ($value->diskon / 100 * $value->harga_barang)) ?> <span>Rp. <?= number_format($value->harga_barang) ?></span></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sort By</span>
                                <select>
                                    <option value="0">Default</option>
                                    <option value="0">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>16</span> Products found</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <?php
                    foreach ($produk as $key => $value) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <form action="<?= base_url('pelanggan/ccart/add') ?>" method="POST">
                                <input type="hidden" name="id" value="<?= $value->id_barang ?>">
                                <input type="hidden" name="name" value="<?= $value->nama_barang ?>">
                                <input type="hidden" name="price" value="<?= $value->harga_barang - ($value->diskon / 100 * $value->harga_barang) ?>">
                                <input type="hidden" name="qty" value="1">
                                <input type="hidden" name="picture" value="<?= $value->gambar ?>">
                                <input type="hidden" name="stok" value="<?= $value->qty_barang ?>">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><button type="submit"><i class="fa fa-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
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
                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->