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
					<h2 class="heading-section"><a href="<?= base_url('pelanggan/ckatalog') ?>">LOGIN PELANGGAN</a></h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<?php
					if ($this->session->userdata('success')) {
					?>
						<div class="alert alert-success" role="alert">
							<?= $this->session->userdata('success') ?>
						</div>
					<?php
					}
					?>
					<?php
					if ($this->session->userdata('error')) {
					?>
						<div class="alert alert-danger" role="alert">
							<?= $this->session->userdata('error') ?>
						</div>
					<?php
					}
					?>
					<div class="login-wrap p-4 p-md-5">
						<div class="d-flex">
							<div class="w-100">
								<h3 class="mb-4">Sign In</h3>
							</div>
						</div>
						<form action="<?= base_url('pelanggan/clogin') ?>" method="post" class="login-form">
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
								<input type="text" name="username" class="form-control rounded-left" placeholder="Username">
								<?= form_error('username', ' <small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
								<input type="password" name="password" class="form-control rounded-left" placeholder="Password">
								<?= form_error('password', ' <small class="text-danger">', '</small>') ?>
							</div>
							<div class="form-group d-flex align-items-center">

								<div class="w-100 d-flex justify-content-end">
									<button type="submit" class="btn btn-primary rounded submit">Login</button>
								</div>
							</div>
							<div class="form-group mt-4">
								<div class="w-100 text-center">
									<p class="mb-1">Don't have an account? <a href="<?= base_url('pelanggan/clogin/registrasi') ?>">Sign Up</a></p>
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
