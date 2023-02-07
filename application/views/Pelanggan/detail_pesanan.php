<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <?php
        if ($this->session->userdata('success')) {
        ?>
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> <?= $this->session->userdata('success') ?>
                    </h6>
                </div>
            </div>
        <?php
        }
        ?>

        <div class="checkout__form">
            <h4>Detail Pesanan</h4>
            <div class="row">
                <div class="col-lg-6">
                    <p>Pesanan <strong><?= $detail['transaksi']->id_transaksi ?></strong></p>
                    <p>Tanggal Order. <strong><?= $detail['transaksi']->tanggal_order ?></strong></p>
                    <?php
                    if ($detail['transaksi']->status_pengiriman == '0') {
                        echo '<p>Status Order: <span class="badge badge-danger">Belum Bayar</span></p>';
                    } else if ($detail['transaksi']->status_pengiriman == '1') {
                        echo '<p>Status Order: <span class="badge badge-warning">Menunggu Konfirmasi</span></p>';
                    } else if ($detail['transaksi']->status_pengiriman == '2') {
                        echo '<p>Status Order: <span class="badge badge-info">Pesanan Diproses</span></p>';
                    } else if ($detail['transaksi']->status_pengiriman == '3') {
                        echo '<p>Status Order: <span class="badge badge-primary">Pesanan Dikirim</span></p>';
                    } else if ($detail['transaksi']->status_pengiriman == '4') {
                        echo '<p>Status Order: <span class="badge badge-success">Pesanan Diterima</span></p>';
                    }

                    if ($detail['transaksi']->status_pengiriman == '3') {
                    ?>
                        <p>Silahkan konfirmasi pesanan jika pesanan telah diterima!</p>
                        <a href="<?= base_url('pelanggan/cstatusorder/diterima/' . $detail['transaksi']->id_transaksi) ?>" class="site-btn mt-3 mb-3">Pesanan Diterima</a>
                    <?php
                    }
                    ?>


                </div>

                <div class="col-lg-6">
                    <?php
                    if ($detail['transaksi']->status_pengiriman == '0') {
                    ?>
                        <h3>Pembayaran</h3>
                        <p class="text-danger">Bank BRI. 0123-343-1233-02-1</p>
                        <?php echo form_open_multipart('pelanggan/cstatusorder/bayar/' . $detail['transaksi']->id_transaksi); ?>
                        <label>Upload Bukti Pembayaran</label>
                        <input type="file" name="gambar" class="form-control">
                        <button type="submit" class="site-btn mt-3 mb-3">Kirim</button>
                        </form>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <?php
            if ($detail['transaksi']->status_pengiriman == '4') {
            ?>
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="checkout__order">
                            <h4>Penilaian Rating Produk</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul>
                                <?php
                                foreach ($detail['pesanan'] as $key => $value) {
                                    if ($value->info_penilaian == '0') {
                                ?>
                                        <form action="<?= base_url('pelanggan/cstatusorder/rating/' . $value->id_transaksi) ?>" method="POST">
                                            <li><?= $value->nama_barang ?><span>Rp. <?= number_format(($value->harga_barang - ($value->diskon / 100 * $value->harga_barang)) * $value->quantity) ?></span>
                                                <input type="hidden" name="id" value="<?= $value->id_penilaian ?>">

                                                <input class="rating-input" type="text" name="rating" title="" />
                                                <h4>Kualitas Produk</h4>
                                            </li>
                                            <li>
                                                <input class="rating-input" type="text" name="rating_harga" title="" />
                                                <h4>Harga Produk</h4>
                                            </li>
                                            <li>
                                                <input class="rating-input" type="text" name="rating_pengiriman" title="" />
                                                <h4>Kecepatan Pengiriman</h4>
                                            </li>
                                            <li>
                                                <input class="rating-input" type="text" name="rating_pelayanan" title="" />
                                                <h4>Kualitas Pelayanan</h4>
                                            </li>
                                            <textarea class="form-control" name="review" rows="5" placeholder="Tuliskan review anda*)" required></textarea>
                                            <button class="site-btn" type="submit">Nilai</button>
                                        </form>
                                    <?php
                                    }
                                    ?>


                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <br>
            <form action="#">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul>
                                <?php
                                foreach ($detail['pesanan'] as $key => $value) {
                                ?>
                                    <li><?= $value->nama_barang ?> <span>Rp. <?= number_format(($value->harga_barang - ($value->diskon / 100 * $value->harga_barang)) * $value->quantity) ?></span></li>
                                <?php
                                }
                                ?>

                            </ul>
                            <div class="checkout__order__subtotal">Subtotal <span>Rp. <?= number_format($detail['transaksi']->total_order - $detail['transaksi']->ongkir) ?></span></div>
                            <div class="checkout__order__total">Ongkir <span>Rp. <?= number_format($detail['transaksi']->ongkir) ?></span></div>
                            <div class="checkout__order__total">Total <span><?= number_format($detail['transaksi']->total_order) ?></span></div>

                            <a href="<?= base_url('pelanggan/cStatusOrder') ?>" class="site-btn">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Modal -->
<?php
foreach ($detail['pesanan'] as $key => $value) {
?>
    <form action="<?= base_url('pelanggan/cstatusorder/rating/' . $value->id_transaksi) ?>" method="POST">
        <div class="modal fade" id="nilai<?= $value->id_barang ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Penilaian Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Masukkan Penilaian Anda Terkait Produk <?= $value->nama_barang ?></p>
                        <div id='rate-0'>
                            <input type='text' name='rating' id='rating'>
                            <input type='text' name='id' value="<?= $value->id_penilaian ?>">
                            <?php echo "<ul class='star' onMouseOut=\"resetRating('0')\">"; //untuk menampilan value dari bintang
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= 0) {
                                    $selected = "selected";
                                } else {
                                    $selected = "";
                                }
                                echo "<li class='select' class='$selected' onmouseover=\" highlightStar(this,0)\" onmouseout=\"removeHighlight(0);\" onClick=\"addRating(this,0)\">&#9733;</li>";
                            }
                            echo "<ul></div> "; ?>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="site-btn">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
<?php
}
?>