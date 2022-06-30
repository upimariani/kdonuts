<!doctype html>
<html lang="en">

<head>
    <title>LOGIN PELANGGAN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url('asset/login/') ?>css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">REGISTRASI PELANGGAN</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-8">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Sign Up</h3>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                </p>
                            </div>
                        </div>
                        <form action="<?= base_url('pelanggan/clogin/registrasi') ?>" method="POST" class="login-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control">
                                        <?= form_error('nama', ' <small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>No Telepon</label>
                                        <input type="text" name="no_hp" class="form-control rounded-left">
                                        <?= form_error('no_hp', ' <small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control rounded-left">
                                        <?= form_error('email', ' <small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control rounded-left">
                                        <?= form_error('alamat', ' <small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Kode POS</label>
                                        <input type="text" name="kode_pos" class="form-control rounded-left">
                                        <?= form_error('kode_pos', ' <small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                        <input type="text" name="username" class="form-control rounded-left" placeholder="Username">
                                        <?= form_error('username', ' <small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                        <input type="password" name="password" class="form-control rounded-left" placeholder="Password">
                                        <?= form_error('password', ' <small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center">

                                <div class="w-100 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary rounded submit">Sign Up</button>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <div class="w-100 text-center">
                                    <p class="mb-1">Do have an account? <a href="<?= base_url('pelanggan/clogin') ?>">Sign In</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url('asset/login/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('asset/login/') ?>js/popper.js"></script>
    <script src="<?= base_url('asset/login/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('asset/login/') ?>js/main.js"></script>

</body>

</html>