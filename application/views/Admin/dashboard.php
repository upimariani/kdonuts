<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Dashboard</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <h1>Analisis Grafik Jumlah Produk Terjual</h1>
            <div class="col-12 table-responsive">
                <canvas id="grafik_qty" height="100"></canvas>


            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <h1>Analisis Grafik Penghasilan Perhari</h1>
            <div class="col-12 table-responsive">
                <canvas id="grafik" height="100"></canvas>


            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <!-- table section -->
            <div class="col-md-6">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Informasi Penilaian Pelanggan</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nama Pelanggan</th>
                                        <th>Nama Produk</th>
                                        <th>Penilaian</th>
                                        <th>Review</th>
                                        <th>Balas Review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pelanggan as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $value->nama_lengkap ?></td>
                                            <td><?= $value->nama_barang ?></td>
                                            <td><?php
                                                if ($value->info_penilaian == '1') {
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                <?php
                                                } else if ($value->info_penilaian == '2') {
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                <?php
                                                } else if ($value->info_penilaian == '3') {
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                <?php
                                                } else if ($value->info_penilaian == '4') {
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                <?php
                                                } else if ($value->info_penilaian == '5') {
                                                ?>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td><?= $value->review ?></td>
                                            <?php
                                            if ($value->balas == '0') {
                                            ?>
                                                <td> <button type="button" class="model_bt btn btn-primary" data-toggle="modal" data-target="#myModal<?= $value->id_penilaian ?>">Kirim Balasan Review Pelanggan</button></td>
                                            <?php
                                            } else {
                                            ?>
                                                <td><?= $value->balas ?></td>
                                            <?php
                                            }
                                            ?>
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
            <!-- footer -->
            <div class="col-md-6">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Informasi Produk Tidak Laku</h2>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Id Produk</th>
                                        <th>Nama Produk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($produk_tidak_laku as $key => $value) {
                                        if ($value->quantity == NULL) {

                                    ?>
                                            <tr>
                                                <td><?= $value->id_barang ?></td>
                                                <td><?= $value->nama_barang ?></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end dashboard inner -->
    </div>
</div>
</div>
<?php
foreach ($pelanggan as $key => $value) {
?>
    <form action="<?= base_url('admin/cdashboard/balas/' . $value->id_penilaian) ?>" method="POST">
        <div class="modal fade" id="myModal<?= $value->id_penilaian ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Balas Review Pelanggan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <textarea class="form-control" name="balasan" placeholder="Balasan Review Pelanggan..." required></textarea>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
}
?>