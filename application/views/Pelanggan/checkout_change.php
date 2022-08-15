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
                                    <p>Kecamatan<span>*</span></p>
                                    <select name="kecamatan" id="kecamatan" class="form-control">
                                        <option value="">---Pilih Kecamatan---</option>
                                        <?php
                                        foreach ($kecamatan as $key => $value) {
                                        ?>
                                            <option value="<?= $value->id_kecamatan ?>"><?= $value->nama_kecamatan ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <?= form_error('desa_kel', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Desa/Kelurahan<span>*</span></p>
                                    <select name="desa_kel" id="ongkir" class="form-control">


                                    </select>
                                    <?= form_error('desa_kel', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-3">
                                <div class="checkout__input">
                                    <p>Alamat<span>*</span></p>
                                    <input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap">
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
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

                            <button type="submit" class="site-btn mb-4">CHECKOUT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Footer Section Begin -->
<footer class="footer spad">

</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="<?= base_url('asset/ogani-master/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('asset/ogani-master/') ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('asset/ogani-master/') ?>js/main.js"></script>


<!-- Checkout Section End -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#kecamatan').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "<?php echo site_url('pelanggan/cCheckout/get_desa'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {

                    var html = '';
                    var i;
                    html = '<option value="">---Pilih Desa/Kelurahan---</option>';
                    for (i = 0; i < data.length; i++) {
                        var total_bayar = parseInt(data[i].ongkir) + parseInt(<?= $this->cart->total() ?>);
                        var reverse2 = total_bayar.toString().split('').reverse().join(''),
                            ribuan_total = reverse2.match(/\d{1,3}/g);
                        ribuan_total = ribuan_total.join(',').split('').reverse().join('');

                        var ongkir = parseInt(data[i].ongkir);
                        var ong = ongkir.toString().split('').reverse().join(''),
                            ongk = ong.match(/\d{1,3}/g);
                        ongk = ongk.join(',').split('').reverse().join('');
                        var id_ongkir = data[i].id_ongkir;
                        html += '<option data-total=' + ribuan_total + ' data-price=' + total_bayar + ' data-ongkir=' + ongk + ' value=' + data[i].id_ongkir + '>' + data[i].desa_kel + '</option>';
                    }
                    $('#ongkir').html(html);
                }
            });
            return false;
        });
    });
</script>
<script>
    console.log = function() {}
    $("#ongkir").on('change', function() {
        $(".ongkir").html($(this).find(':selected').attr('data-ongkir'));
        $(".ongkir").val($(this).find(':selected').attr('data-ongkir'));

        $(".total").html($(this).find(':selected').attr('data-total'));
        $(".total").val($(this).find(':selected').attr('data-total'));

        $(".price").html($(this).find(':selected').attr('data-price'));
        $(".price").val($(this).find(':selected').attr('data-price'));

    });
</script>

</body>

</html>