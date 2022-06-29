<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Kelola Data Diskon</h2>
                </div>
                <a href="<?= base_url('admin/cdiskon/creatediskon') ?>" class="btn btn-info mb-5">Create New Diskon</a>
            </div>
        </div>
        <?php
        if ($this->session->userdata('success')) {
        ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->userdata('success') ?>
            </div>
        <?php
        }
        ?>

        <!-- row -->
        <div class="row">
            <!-- table section -->
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Informasi Diskon</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Produk</th>
                                        <th>Nama Diskon</th>
                                        <th>Harga Sebelum Diskon</th>
                                        <th>Diskon</th>
                                        <th>Harga Setelah Diskon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($diskon as $key => $value) {
                                    ?>

                                        <tr>
                                            <td><?= $no++ ?>.</td>
                                            <td><?= $value->nama_barang ?></td>
                                            <td><?= $value->nama_diskon ?></td>
                                            <td>Rp. <?= number_format($value->harga_barang)  ?></td>
                                            <td><?= $value->diskon ?>%</td>
                                            <td>Rp. <?= number_format($value->harga_barang - (($value->diskon / 100) * $value->harga_barang)) ?></td>
                                            <td><a href="<?= base_url('admin/cdiskon/delete/' . $value->id_diskon) ?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                                                <a href="<?= base_url('admin/cdiskon/edit/' . $value->id_diskon) ?>" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!-- <form action="<?= base_url('admin/cdiskon/hitung') ?>" method="POST">
                                <input type="loan" name="loan">
                                <select name="type">
                                    <option value="1">Type 1</option>
                                    <option value="1">Type 2</option>
                                    <option value="1">Type 3</option>
                                </select>
                                <button type="submit">Hitung</button>
                            </form> -->
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
</div>