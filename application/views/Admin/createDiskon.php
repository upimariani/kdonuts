<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Kelola Data Diskon</h2>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                This is some text within a card body.
            </div>
        </div>
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_40">
                    <div class="full graph_head">
                        <div class="heading1 margin_0 ">
                            <h2>Diskon</h2>
                        </div>
                    </div>
                    <form action="<?= base_url('admin/cdiskon/creatediskon') ?>" method="POST">
                        <div class="container mt-5 mb-5">
                            <br>
                            <h3 class="mb-5 mt-5">Create New Diskon</h3>
                            <?= form_error('produk', ' <small class="text-danger mt-0">', '</small>') ?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                </div>
                                <select id="produk" name="produk" class="form-control">
                                    <option value="">---Pilih Produk---</option>
                                    <?php
                                    foreach ($produk as $key => $value) {
                                    ?>
                                        <option data-harga="<?= number_format($value->harga_barang) ?>" value="<?= $value->id_barang ?>"><?= $value->nama_barang ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <?= form_error('harga', ' <small class="text-danger mt-0">', '</small>') ?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Rp. </span>
                                </div>
                                <input type="text" name="harga" class="harga form-control" placeholder="Harga Produk" aria-label="Username" aria-describedby="basic-addon1" readonly>

                            </div>
                            <hr>
                            <?= form_error('nama_diskon', ' <small class="text-danger mt-0">', '</small>') ?>
                            <label for="basic-url">Nama Diskon</label>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">With textarea</span>
                                </div>
                                <textarea class="form-control" name="nama_diskon" aria-label="With textarea"></textarea>
                            </div>

                            <?= form_error('besar', ' <small class="text-danger mt-0">', '</small>') ?>
                            <div class="input-group mb-3">

                                <input type="number" class="form-control" name="besar" placeholder="Masukkan Besar Diskon" aria-label="Username" aria-describedby="basic-addon1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">%</span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Save</button>
                            <a href="<?= base_url('Admin/cUser') ?>" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end dashboard inner -->
</div>
</div>
<!-- model popup -->
</div>