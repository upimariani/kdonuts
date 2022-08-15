<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Kelola Data Produk</h2>
                </div>
                <a href="<?= base_url('admin/cproduk/createproduk') ?>" class="btn btn-info mb-5">Create New Produk</a>
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
                            <h2>Informasi Produk Kdonuts</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Gambar</th>
                                        <th>Nama Produk</th>
                                        <th>Deskripsi</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($produk as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><img style="width: 100px;" src="<?= base_url('asset/foto-produk/' . $value->gambar) ?>"></td>
                                            <td><?= $value->nama_barang ?></td>
                                            <td><?= $value->deskripsi ?></td>
                                            <td><?= $value->qty_barang ?></td>
                                            <td>Rp. <?= number_format($value->harga_barang)  ?></td>
                                            <td><a href="<?= base_url('admin/cproduk/delete/' . $value->id_barang) ?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                                                <a href="<?= base_url('admin/cproduk/edit/' . $value->id_barang) ?>" class="btn btn-outline-warning"><i class="fa fa-edit"></i></a>
                                            </td>
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
    <!-- footer -->

</div>
<!-- end dashboard inner -->
</div>
</div>
<!-- model popup -->
</div>