<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Laporan </h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <!-- invoice section -->
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2><i class="fa fa-file-text-o"></i> Laporan</h2>
                        </div>
                    </div>
                    <div class="full">
                        <div class="invoice_inner">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="full invoice_blog padding_infor_info padding-bottom_0">
                                        <h4>From</h4>
                                        <p><strong>Laporan Transaksi Per Harian</strong><br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="full invoice_blog padding_infor_info padding-bottom_0">
                                        <h4>Invoice Tanggal. <?= $tanggal ?> / <?= $bulan ?> / <?= $tahun ?> </h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full padding_infor_info">
                        <div class="table_row">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id Transaksi</th>
                                            <th>Quantity</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $total = 0;
                                        foreach ($laporan as $key => $value) {
                                            $total += $value->harga_barang - ($value->diskon / 100 * $value->harga_barang);
                                        ?>
                                            <tr>
                                                <td><?= $value->id_transaksi ?></td>
                                                <td><?= $value->quantity ?></td>
                                                <td><?= $value->nama_barang ?></td>
                                                <td>Rp. <?= number_format($value->harga_barang - ($value->diskon / 100 * $value->harga_barang))  ?></td>
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
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <div class="full white_shd">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Total Amount</h2>
                        </div>
                    </div>
                    <div class="full padding_infor_info">
                        <div class="price_table">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th style="width:50%">Subtotal:</th>
                                            <td>Rp. <?= number_format($total) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="container-fluid">
        <div class="footer">
            <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
        </div>
    </div>
</div>
<!-- end dashboard inner -->
</div>
</div>
<!-- model popup -->