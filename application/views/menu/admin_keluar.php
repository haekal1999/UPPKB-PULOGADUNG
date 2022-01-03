<main class="main-content">
	<div class="breadcrumbs">
		<div class="container">
			<a href="<?= base_url('home'); ?>">Home</a>
			<span>Admin Keluar</span>
		</div>
	</div>


	<br>
	<div class="row" style="margin-top: 30px">
		<div class="col-xs-8 col-xs-offset-2">
			<form action="<?= base_url('c_dashboard/keluar_kendaraan/') ?>" method="get">
				<div class="input-group">
					<input type="text" class="form-control" style='text-transform:uppercase' name="keyword" placeholder="Masukan No Kendaraan...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">Cari</button>
					</span>
				</div>
			</form>
		</div>
	</div>
	<form action="<?= base_url('c_dashboard/update_uji_kendaraan') ?>" method="POST">
		<?php
		foreach ($data_cari as $dl) { ?>
			<div class="container">
				<div class="row">
					<div class="col-8">
						<!-- Collapsable Card Example -->
						<div class="card shadow mb-4">
							<!-- Card Header - Accordion -->
							<a class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
								<h3 class="m-0 font-weight-bold text-primary">Data Pengujian</h3>
							</a>

							<!-- Card Content - Collapse -->
							<div class="collapse show" id="collapseCardExample3">
								<div class="card-body">
									<div class="row ">
										<div class="col-md-4">
											<img src="<?= base_url('assets/'); ?>images/1957.jpg" class="card-img">
										</div>
										<div class="col-md-8">
											<table>


												<!-- Modal -->
												<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<h3 class="modal-title" id="exampleModalLabel">Pengujian</h3>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																Kendaraan Sudah Selesai Diuji ?
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
																<button type="submit" class="btn btn-primary">Ya</button>

															</div>
														</div>
													</div>
												</div>

												<tr>
													<td>
														<h3 class="card-title">No Kendaraan</h3>
													</td>
													<td style="padding: 10px;">
														<h3 class="card-title"> : </h3>
													</td>
													<td>
														<h3 class="card-title" style='text-transform:uppercase'><?= $dl['no_kendaraan'] ?></h3>
													</td>
												</tr>
												<tr>
													<td>
														<p class="card-text">Waktu Masuk</p>
													</td>
													<td style="padding: 10px;">
														<p class="card-text"> : </p>
													</td>
													<td>
														<p class="card-text">
															<?php
															$tanggal = explode(" ", $dl['tanggal']);
															echo date_indo($tanggal[0]) . ', ' . $tanggal[1];
															?>
														</p>

													</td>



												</tr>
												<tr>
													<td>
														<p class="card-text">Durasi Pengujian</p>
													</td>
													<td style="padding: 10px;">
														<p class="card-text"> : </p>
													</td>
													<td>

														<a class="btn btn-warning disabled" style="font-family: digital; font-size:xx-large;" role="button" aria-disabled="true">
															<?php
															$sekarang = date("Y-m-d h:i:s");
															$tanggal = explode(" ", $sekarang);

															$mulai =  $dl['tanggal'];
															$selesai = $sekarang;

															$start = strtotime($mulai);
															$end = strtotime($selesai);
															$diff = $end - $start;

															$hours = floor($diff / (60 * 60));
															$minutes = $diff - $hours * (60 * 60);
															$detik = $diff % 60;

															echo  floor($minutes / 60) . ' Menit';
															?>
														</a>
														<a class=" btn btn-success disabled" style="font-family: digital; font-size:xx-large;" role="button" aria-disabled="true">
															<?php
															$sekarang = date("Y-m-d h:i:s");
															$tanggal = explode(" ", $sekarang);

															$mulai =  $dl['tanggal'];
															$selesai = $sekarang;

															$start = strtotime($mulai);
															$end = strtotime($selesai);
															$diff = $end - $start;

															$hours = floor($diff / (60 * 60));
															$minutes = $diff - $hours * (60 * 60);
															$detik = $diff % 60;

															echo  $detik . ' detik';

															?>
														</a>
													</td>

												</tr>
												<tr>
													<td> <input hidden name="id_kendaraan" id="id_kendaraan" value="<?= $dl['id_kendaraan'] ?>">

													</td>
												</tr>
												<br>
												<tr>
													<td style="padding: 10px;">
														<p>
															<a type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Selesai</a>
														</p>
													</td>
												</tr>
											</table>
											<br>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>

		<?php } ?>

	</form>