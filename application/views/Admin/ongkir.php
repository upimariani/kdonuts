<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Kelola Data Ongkos Pengiriman</h2>
                </div>

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
            <div class="col-md-6">
                <button type="button" data-toggle="modal" data-target="#kecamatan" class="btn btn-info mb-5">Add Data Kecamatan</button>
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Informasi Kecamatan</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kecamatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kecamatan as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama_kecamatan ?></td>
                                            <td><a href="<?= base_url('admin/congkir/delete_kec/' . $value->id_kecamatan) ?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                                                <button type="button" data-toggle="modal" data-target="#kecamatan<?= $value->id_kecamatan ?>" class="btn btn-warning"><i class="fa fa-edit"></i></button>
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
            <div class="col-md-6">
                <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info mb-5">Add Ongkos Kirim</button>
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Informasi Ongkos Pengiriman</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kecamatan</th>
                                        <th>Desa/Kelurahan</th>
                                        <th>Ongkir</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($ongkir as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama_kecamatan ?></td>
                                            <td><?= $value->desa_kel ?></td>
                                            <td>Rp. <?= number_format($value->ongkir)  ?></td>
                                            <td><a href="<?= base_url('admin/congkir/delete/' . $value->id_ongkir) ?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                                                <button type="button" data-toggle="modal" data-target="#exampleModal<?= $value->id_ongkir ?>" class="btn btn-warning"><i class="fa fa-edit"></i></button>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('admin/congkir/create') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Ongkos Kirim</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <select name="kecamatan" required class="form-control">
                            <option value="">---Pilih Kecamatan---</option>
                            <?php
                            foreach ($kecamatan as $key => $value) {
                            ?>
                                <option value="<?= $value->id_kecamatan ?>"><?= $value->nama_kecamatan ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="kel" placeholder="Masukkan Nama Desa/Kelurahan" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                        </div>
                        <input type="text" class="form-control" name="harga" placeholder="Masukkan Harga Ongkir" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
foreach ($ongkir as $key => $value) {
?>
    <div class="modal fade" id="exampleModal<?= $value->id_ongkir ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?= base_url('admin/congkir/update/' . $value->id_ongkir) ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Perbaharui Data Ongkos Kirim</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <select name="kecamatan" required class="form-control">
                                <option value="">---Pilih Kecamatan---</option>
                                <?php
                                foreach ($kecamatan as $key => $items) {
                                ?>
                                    <option value="<?= $items->id_kecamatan ?>" <?php if ($value->id_kecamatan == $items->id_kecamatan) {
                                                                                    echo 'selected';
                                                                                } ?>><?= $items->nama_kecamatan ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="<?= $value->desa_kel ?>" name="kel" placeholder="Masukkan Nama Kota/Kelurahan" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                            </div>
                            <input type="text" class="form-control" value="<?= $value->ongkir ?>" name="harga" placeholder="Masukkan Harga Ongkir" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
}
?>

<div class="modal fade" id="kecamatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url('admin/congkir/insertkecamatan') ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Data Kecamatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="kecamatan" placeholder="Masukkan Nama Kecamatan" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
foreach ($kecamatan as $key => $value) {
?>
    <div class="modal fade" id="kecamatan<?= $value->id_kecamatan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?= base_url('admin/congkir/updatekecamatan/' . $value->id_kecamatan) ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Data Kecamatan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="<?= $value->nama_kecamatan ?>" name="kecamatan" placeholder="Masukkan Nama Kecamatan" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
}
?>