<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= base_url('asset/ogani-master/') ?>img/little.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Pesanan Saya</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Pesanan Saya</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Id Transaksi</th>
                                <th>Atas Nama</th>
                                <th>Tanggal Order</th>
                                <th>Total Order</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($transaksi as $key => $value) {
                            ?>
                                <tr>
                                    <td><?= $value->id_transaksi ?></td>
                                    <td><?= $value->nama_lengkap ?></td>
                                    <td><?= $value->tanggal_order ?></td>
                                    <td>Rp. <?= number_format($value->total_order)  ?></td>
                                    <td> <a href="<?= base_url('pelanggan/cStatusOrder/detail_pesanan/' . $value->id_transaksi) ?>" class="site-btn">...</a></td>
                                </tr>
                            <?php
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->