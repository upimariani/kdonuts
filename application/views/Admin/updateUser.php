<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Kelola Data User</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row column1">
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_40">
                    <div class="full graph_head">
                        <div class="heading1 margin_0 ">
                            <h2>User</h2>
                        </div>
                    </div>
                    <form action="<?= base_url('Admin/cuser/update/' . $user->id_user) ?>" method="POST">
                        <div class="container mt-5 mb-5">
                            <br>
                            <h3 class="mb-5 mt-5">Update Data User</h3>
                            <?= form_error('nama', ' <small class="text-danger mt-0">', '</small>') ?>
                            <div class="input-group mb-3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                </div>

                                <input type="text" value="<?= $user->nama_lengkap ?>" class="form-control" placeholder="Masukkan Nama User" name="nama">

                            </div>


                            <label for="basic-url">Alamat User</label><br>
                            <?= form_error('alamat', ' <small class="text-danger mt-0">', '</small>') ?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">With textarea</span>
                                </div>
                                <textarea class="form-control" name="alamat" aria-label="With textarea"><?= $user->alamat ?></textarea>
                            </div>

                            <?= form_error('kode_pos', ' <small class="text-danger mt-0">', '</small>') ?>
                            <div class="input-group mb-3">

                                <input type="text" class="form-control" value="<?= $user->kode_pos ?>" placeholder="Masukkan Kode Pos" name="kode_pos">
                            </div>

                            <?= form_error('no_hp', ' <small class="text-danger mt-0">', '</small>') ?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">08</span>
                                </div>
                                <input type="text" class="form-control" value="<?= $user->no_hp ?>" placeholder="Masukkan No Telepon" name="no_hp">
                            </div>
                            <?= form_error('email', ' <small class="text-danger mt-0">', '</small>') ?>
                            <div class="input-group mb-3">

                                <input type="email" class="form-control" placeholder="Masukkan Email" value="<?= $user->email ?>" name="email">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@gmail.com</span>
                                </div>
                            </div>

                            <?= form_error('username', ' <small class="text-danger mt-0">', '</small>') ?>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Masukkan Username" value="<?= $user->username ?>" name="username">
                            </div>

                            <?= form_error('password', ' <small class="text-danger mt-0">', '</small>') ?>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Masukkan Password" value="<?= $user->password ?>" name="password">
                            </div>

                            <?= form_error('level', ' <small class="text-danger mt-0">', '</small>') ?>
                            <div class="input-group mb-3">
                                <select class="form-control" name="level">
                                    <option value="">---Pilih Level User---</option>
                                    <option value="1" <?php if ($user->level_user == '1') {
                                                            echo 'selected';
                                                        } ?>>Admin</option>
                                    <option value="2" <?php if ($user->level_user == '2') {
                                                            echo 'selected';
                                                        } ?>>Pemilik</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fa fa-upload"></i> Save</button>
                            <a href="<?= base_url('Admin/cUser') ?>" class="btn btn-danger"><i class="fa fa-reply"></i> Kembali</a>
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