<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Kelola Data Produk</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_40">
                    <div class="full graph_head">
                        <div class="heading1 margin_0 ">
                            <h2>Produk</h2>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Admin/cproduk/edit/' . $produk->id_barang); ?>
                    <div class="container mt-5 mb-5">
                        <br>
                        <h3 class="mb-5 mt-5">Create New Product</h3>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-qrcode"></i></span>
                            </div>
                            <input type="text" class="form-control" name="nama" value="<?= $produk->nama_barang ?>" placeholder="Masukkan Nama Produk" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="harga" value="<?= $produk->harga_barang ?>" placeholder="Masukkan Harga Produk" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-tag"></i></span>
                            </div>
                        </div>

                        <label for="basic-url">Deskripsi Produk</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">With textarea</span>
                            </div>
                            <textarea class="form-control" name="deskripsi" aria-label="With textarea"><?= $produk->deskripsi ?></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="stok" value="<?= $produk->qty_barang ?>" placeholder="Masukkan Stok Produk" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">pcs</span>
                            </div>
                        </div>
                        <img style="width: 150px;" src="<?= base_url('asset/foto-produk/' . $produk->gambar) ?>">
                        <div class="input-group mb-3">

                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Save</button>
                        <a href="<?= base_url('Admin/cProduk') ?>" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
                    </div>
                    </form>

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