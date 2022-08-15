<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= base_url('asset/ogani-master/') ?>img/little.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shopping Cart</span>
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
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($this->cart->contents() as $key => $value) {
                            ?>
                                <?php echo form_hidden($i . '[rowid]', $value['rowid']); ?>

                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5><?= $value['name'] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        Rp. <?= number_format($value['price']) ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <?php
                                            $qty_min = $value['qty'] - 1;
                                            ?>
                                            <a href="<?= base_url('pelanggan/ccart/update_cart/' . $value['rowid'] . '/' . $qty_min) ?>" class="btn btn-success">
                                                -</a>
                                            <?php $qty = $value['qty'] + 1;

                                            echo form_input(array('value' => $value['qty'], 'size' => '5')); ?>
                                            <a href="<?= base_url('pelanggan/ccart/update_cart/' . $value['rowid'] . '/' . $qty) ?>" class="btn btn-success">
                                                +</a>
                                        </div>
                                    </td>


                                    </td>
                                    <td class="shoping__cart__total" id="total<?= $i ?>">
                                        Rp. <?= number_format($value['qty'] * $value['price'])  ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="<?= base_url('Pelanggan/cCart/delete/' . $value['rowid']) ?>"><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                            <?php $i++;
                            } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="<?= base_url('pelanggan/ckatalog') ?>" class="primary-btn cart-btn">CONTINUE SHOPPING</a>

                </div>
            </div>
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Total <span>Rp. <?= number_format($this->cart->total()) ?></span></li>
                    </ul>
                    <a href="<?= base_url('Pelanggan/cCheckout') ?>" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
<!-- Shoping Cart Section End -->