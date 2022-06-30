<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= base_url('asset/ogani-master/') ?>img/little.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Checkout</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">

        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="<?= base_url('pelanggan/ccheckout/checkout') ?>" method="POST">
                <?php
                $i = 1;
                $j = 1;
                foreach ($this->cart->contents() as $items) {
                    $id_pemesanan = random_string('alnum', 5);
                    echo form_hidden('qty' . $i++, $items['qty']);
                    echo form_hidden('id_pemesanan' . $j++, $id_pemesanan);
                }
                ?>
                <input type="hidden" name="total" class="price">
                <?php
                $id_transaksi = date('Ymd') . strtoupper(random_string('alnum', 8));
                ?>
                <input type="hidden" name="id_transaksi" value="<?= $id_transaksi ?>">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Atas Nama<span>*</span></p>
                                    <input value="<?= $pelanggan->nama_lengkap ?>" type="text" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>No Telepon<span>*</span></p>
                                    <input value="<?= $pelanggan->no_hp ?>" type="text" readonly>
                                </div>
                            </div>
                        </div>
                        <p>Dimohon untuk mengisi alamat pengiriman dengan benar.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>RT<span>*</span></p>
                                    <input type="text" name="rt" placeholder="Masukkan RT">
                                    <?= form_error('rt', '<small class="text-danger">', '</small>') ?>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>RW<span>*</span></p>
                                    <input type="text" name="rw" placeholder="Masukkan RW" class="checkout__input__add">
                                    <?= form_error('rw', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Alamat<span>*</span></p>
                                    <input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap">
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Desa/Kelurahan<span>*</span></p>
                                    <select name="desa_kel" id="ongkir" class="form-control">
                                        <option value="">---Pilih Desa/Kelurahan---</option>
                                        <?php
                                        foreach ($ongkir as $key => $value) {
                                        ?>
                                            <option data-ongkir="Rp. <?= number_format($value->ongkir) ?>" data-price="<?= $value->ongkir + $this->cart->total() ?>" data-total="Rp. <?= number_format($value->ongkir + $this->cart->total()) ?>" value="<?= $value->id_ongkir ?>"><?= $value->desa_kel ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <?= form_error('desa_kel', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul>
                                <?php
                                foreach ($this->cart->contents() as $key => $value) {
                                ?>
                                    <li><?= $value['name'] ?> <span>Rp. <?= number_format($value['price'] * $value['qty']) ?></span></li>
                                <?php
                                }
                                ?>

                            </ul>
                            <div class="checkout__order__subtotal">Subtotal <span>Rp. <?= number_format($this->cart->total())  ?></span></div>
                            <div class="checkout__order__subtotal">Shipping <span class="ongkir"></span></div>
                            <div class="checkout__order__total">Total <span class="total"></span></div>

                            <button type="submit" class="site-btn">CHECKOUT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->