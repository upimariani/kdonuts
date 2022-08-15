<!-- Hero Section Begin -->
<section class="hero hero-normal">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="hero__categories">
					<div class="hero__categories__all">
						<i class="fa fa-bars"></i>
						<span>All Produk</span>
					</div>
					<ul>
						<?php
						foreach ($produk as $key => $value) {
						?>
							<li><a href="<?= base_url('pelanggan/cKatalog/detail_produk/' . $value->id_barang) ?>"><?= $value->nama_barang ?></a></li>
						<?php
						}
						?>

					</ul>
				</div>
			</div>
			<div class="col-lg-9">
				<!-- Categories Section Begin -->
				<section class="categories">
					<div class="container">
						<div class="row">
							<div class="categories__slider owl-carousel">
								<?php
								foreach ($produk as $key => $value) {
								?>
									<div class="col-lg-3">
										<div class="categories__item set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">
											<h5><a href="<?= base_url('pelanggan/cKatalog/detail_produk/' . $value->id_barang) ?>"><?= $value->nama_barang ?></a></h5>
										</div>
									</div>
								<?php
								}
								?>

							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>
<!-- Hero Section End -->


<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Product</h2>
				</div>
				<div class="featured__controls">
					<ul>
						<li class="active" data-filter="*">All</li>
						<li data-filter=".terlaris">Produk Terlaris</li>
						<li data-filter=".terbaik">Produk Terbaik</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row featured__filter">
			<?php
			foreach ($terlaris as $key => $value) {
			?>
				<div class="col-lg-3 col-md-4 col-sm-6 mix terlaris">
					<form action="<?= base_url('pelanggan/ccart/add') ?>" method="POST">
						<input type="hidden" name="id" value="<?= $value->id_barang ?>">
						<input type="hidden" name="name" value="<?= $value->nama_barang ?>">
						<input type="hidden" name="price" value="<?= $value->harga_barang - ($value->diskon / 100 * $value->harga_barang) ?>">
						<input type="hidden" name="qty" value="1">
						<input type="hidden" name="picture" value="<?= $value->gambar ?>">
						<input type="hidden" name="stok" value="<?= $value->qty_barang ?>">
						<div class="featured__item">
							<div class="featured__item__pic set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">

							</div>
							<div class="featured__item__text">

								<h6><a href="<?= base_url('pelanggan/cKatalog/detail_produk/' . $value->id_barang) ?>"><?= $value->nama_barang ?></a></h6>
								<h5>Rp. <?= number_format($value->harga_barang - ($value->diskon / 100 * $value->harga_barang)) ?></h5>
								<button type="submit" class="site-btn"><i class="fa fa-shopping-cart"></i></button>
							</div>
						</div>
					</form>
				</div>
			<?php
			}
			?>
			<?php
			$ranking = 1;
			foreach ($rating as $key => $value) {
			?>

				<div class="col-lg-3 col-md-4 col-sm-6 mix terbaik">
					<form action="<?= base_url('pelanggan/ccart/add') ?>" method="POST">
						<input type="hidden" name="id" value="<?= $value->id_barang ?>">
						<input type="hidden" name="name" value="<?= $value->nama_barang ?>">
						<input type="hidden" name="price" value="<?= $value->harga_barang - ($value->diskon / 100 * $value->harga_barang) ?>">
						<input type="hidden" name="qty" value="1">
						<input type="hidden" name="picture" value="<?= $value->gambar ?>">
						<input type="hidden" name="stok" value="<?= $value->qty_barang ?>">
						<div class="featured__item">
							<div class="categories__item set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">
								<h5><a href="#"><?= $ranking++ ?></a></h5>
							</div>
							<div class="featured__item__text">
								<?php
								if ($value->jml == 5) {
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
								} else if ($value->jml == 4) {
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
								} else if ($value->jml == 3) {
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
									echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
								} else if ($value->jml == 2) {
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
									echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
									echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
								} else if ($value->jml == 1) {
									echo '<i class="fa fa-star text-warning" aria-hidden="true"></i>';
									echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
									echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
									echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
									echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
								}
								?>
								<h6><a href="<?= base_url('pelanggan/cKatalog/detail_produk/' . $value->id_barang) ?>"><?= $value->nama_barang ?></a></h6>
								<h5>Rp. <?= number_format($value->harga_barang - ($value->diskon / 100 * $value->harga_barang)) ?></h5>
								<button type="submit" class="site-btn"><i class="fa fa-shopping-cart"></i></button>
							</div>
						</div>
					</form>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>
<section class="featured spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>List Produk Diskon</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			foreach ($produk as $key => $value) {
				if ($value->diskon != 0) {
			?>
					<div class="col-lg-4">
						<form action="<?= base_url('pelanggan/ccart/add') ?>" method="POST">
							<input type="hidden" name="id" value="<?= $value->id_barang ?>">
							<input type="hidden" name="name" value="<?= $value->nama_barang ?>">
							<input type="hidden" name="price" value="<?= $value->harga_barang - ($value->diskon / 100 * $value->harga_barang) ?>">
							<input type="hidden" name="qty" value="1">
							<input type="hidden" name="picture" value="<?= $value->gambar ?>">
							<input type="hidden" name="stok" value="<?= $value->qty_barang ?>">
							<div class="product__discount__item">
								<div class="product__discount__item__pic set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">
									<div class="product__discount__percent">-<?= $value->diskon ?>%</div>

								</div>
								<div class="product__discount__item__text">
									<h5><a href="<?= base_url('pelanggan/cKatalog/detail_produk/' . $value->id_barang) ?>"><?= $value->nama_barang ?></a></h5>
									<div class="product__item__price">Rp. <?= number_format($value->harga_barang - ($value->diskon / 100 * $value->harga_barang)) ?> <span>Rp. <?= number_format($value->harga_barang) ?></span></div>
									<button type="submit" class="site-btn"><i class="fa fa-shopping-cart"></i></button>
								</div>
							</div>
						</form>
					</div>
			<?php
				}
			}
			?>

		</div>
	</div>
</section>
<section class="featured spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>List Produk</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			foreach ($produk as $key => $value) {
			?>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<form action="<?= base_url('pelanggan/ccart/add') ?>" method="POST">
						<input type="hidden" name="id" value="<?= $value->id_barang ?>">
						<input type="hidden" name="name" value="<?= $value->nama_barang ?>">
						<input type="hidden" name="price" value="<?= $value->harga_barang - ($value->diskon / 100 * $value->harga_barang) ?>">
						<input type="hidden" name="qty" value="1">
						<input type="hidden" name="picture" value="<?= $value->gambar ?>">
						<input type="hidden" name="stok" value="<?= $value->qty_barang ?>">
						<div class="product__item">
							<div class="product__item__pic set-bg" data-setbg="<?= base_url('asset/foto-produk/' . $value->gambar) ?>">

							</div>
							<div class="product__item__text">
								<h6><a href="<?= base_url('pelanggan/cKatalog/detail_produk/' . $value->id_barang) ?>"><?= $value->nama_barang ?></a></h6>
								<h5>Rp. <?= number_format($value->harga_barang - ($value->diskon / 100 * $value->harga_barang)) ?></h5>
								<button type="submit" class="site-btn"><i class="fa fa-shopping-cart"></i></button>
							</div>
						</div>
					</form>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="banner__pic">
					<img src="img/banner/banner-1.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="banner__pic">
					<img src="img/banner/banner-2.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Banner End -->

<!-- Blog Section End -->