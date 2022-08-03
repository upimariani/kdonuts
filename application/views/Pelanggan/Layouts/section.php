<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Produk</span>
                    </div>
                    <ul>
                        <?php
                        foreach ($produk as $key => $value) {
                        ?>
                            <li><a href="<?= base_url('pelanggan/cKatalog/detail_produk/' . $value->id_barang) ?>"><?= $value->nama_barang ?></a></li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Hero Section End -->