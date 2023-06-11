<!-- dashboard inner -->
<div class="midde_cont">
	<div class="container-fluid">
		<div class="row column_title">
			<div class="col-md-12">
				<div class="page_title">
					<h2>Detail Pesanan <small>( <?= $detail['transaksi']->id_transaksi ?> )</small></h2>
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="row">
			<!-- invoice section -->
			<div class="col-md-12">
				<div class="white_shd full margin_bottom_30">
					<div class="full graph_head">
						<div class="heading1 margin_0">
							<h2><i class="fa fa-file-text-o"></i> Invoice</h2>
						</div>
					</div>
					<div class="full">
						<div class="invoice_inner">
							<div class="row">
								<div class="col-md-6">
									<div class="full invoice_blog padding_infor_info padding-bottom_0">
										<h4>From</h4>
										<p><strong><?= $detail['transaksi']->nama_lengkap ?></strong><br>
											<strong>Phone : </strong><?= $detail['transaksi']->no_hp ?><br>
											<strong>Email : </strong><?= $detail['transaksi']->email ?>
										<p><strong>Village/Ward : </strong><?= $detail['transaksi']->nama_kecamatan ?></p>
										<p><strong>District : </strong><?= $detail['transaksi']->desa_kel ?></p>
										<p><?= $detail['transaksi']->alamat ?></p><br>


										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="full invoice_blog padding_infor_info padding-bottom_0">
										<h4>Invoice No - #<?= $detail['transaksi']->id_transaksi ?> </h4>
										<p><strong>Order ID : </strong><?= $detail['transaksi']->id_transaksi ?><br>
											<strong>Payment Due : </strong><?= $detail['transaksi']->tanggal_order ?>
										</p>
										<?php
										if ($detail['transaksi']->status_pengiriman != 0) {
										?>
											<h2 class="mt-4 mb-3">Bukti Pembayaran</h2>
											<img style="width: 150px  ;" src="<?= base_url('asset/pembayaran/' . $detail['transaksi']->pembayaran) ?>">
										<?php
										}
										?>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="full padding_infor_info">
						<div class="table_row">
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Qty</th>
											<th>Product</th>
											<th>Harga #</th>
											<th>Subtotal</th>
										</tr>
									</thead>
									<tbody>
										<?php
										foreach ($detail['pesanan'] as $key => $value) {
										?>
											<tr>
												<td><?= $value->quantity ?></td>
												<td><?= $value->nama_barang ?></td>
												<td>Rp. <?= number_format($value->harga_barang - ($value->diskon / 100 * $value->harga_barang))  ?></td>
												<td>Rp. <?= number_format(($value->harga_barang - ($value->diskon / 100 * $value->harga_barang)) * $value->quantity)  ?></td>
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
		<!-- row -->
		<div class="row">
			<div class="col-md-6">

			</div>
			<div class="col-md-6">
				<div class="full white_shd">
					<div class="full graph_head">
						<div class="heading1 margin_0">
							<h2>Total Amount</h2>
						</div>
					</div>
					<div class="full padding_infor_info">
						<div class="price_table">
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<th style="width:50%">Subtotal:</th>
											<td>Rp. <?= number_format($detail['transaksi']->total_order - $detail['transaksi']->ongkir)  ?></td>
										</tr>
										<tr>
											<th>Shipping:</th>
											<td>Rp. <?= number_format($detail['transaksi']->ongkir) ?></td>
										</tr>
										<tr>
											<th>Total:</th>
											<td>Rp. <?= number_format($detail['transaksi']->total_order) ?></td>
										</tr>
									</tbody>
								</table>
							</div>
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
<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Modal Heading</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				Modal body..
			</div>
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- end model popup -->
</div>