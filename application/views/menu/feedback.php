<main class="main-content">
	<div class="breadcrumbs">
		<div class="container">
			<a href="<?= base_url('home'); ?>">Home</a>
			<span>Penilaian Customer</span>
		</div>
	</div>
	<div class="alert-parent">

		<?php if ($this->session->flashdata('alert') == 'berhasil_testimoni') : ?>


			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Terimakasih </strong> Telah Memberikan Feedback
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
	</div>

	<?php
	foreach ($data_testimoni as $dl) { ?>


		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="exampleModalLabel">Testimoni</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Apakah Anda Merasa Puas Dengan Pelayanan Kami ?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<a href="<?php echo base_url('c_dashboard/testimoni_memuaskan/') ?>" class="btn btn-primary">Ya</a>

					</div>
				</div>
			</div>
		</div>


		<div class="modal fade" id="ModalTidakPuas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="exampleModalLabel">Testimoni</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Apakah Anda Merasa Tidak Puas Dengan Pelayanan Kami ?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<a href="<?php echo base_url('c_dashboard/testimoni_tidak_memuaskan/') ?>" class="btn btn-primary">Ya</a>

					</div>
				</div>
			</div>
		</div>


		<div class="page">
			<div class="fullwidth-block">
				<div class="container">
					<h1 class="entry-title">Puaskah Anda dengan Pelayanan Kami?</h1>
					<div class="features" style="padding-left: 80px;">
						<div class="container">

							<div class="feature-numbered">
								<div><img src="<?= base_url('assets/'); ?>images/2.jpeg" class="w-75 p-4" alt="..."></div>
								<h2 class="feature-title">Sarana dan Prasarana Pelayanan</h2>
							</div>

							<div class="feature-numbered">
								<div><img src="<?= base_url('assets/'); ?>images/1.jpeg" class="w-75 p-4" alt="..."></div>
								<h2 class="feature-title">Biaya Retibusi</h2>

							</div>
							<div class="feature-numbered">
								<div><img src="<?= base_url('assets/'); ?>images/3.jpeg" class="w-75 p-4" alt="..."></div>
								<h2 class="feature-title">Pelayanan Petugas</h2>

							</div>

						</div>

					</div> <!-- .container -->
					<div class="features" style="padding-left: 80px;">
						<div class="container">

							<div class="feature-numbered">
								<div><img src="<?= base_url('assets/'); ?>images/4.jpeg" class="w-75 p-4" alt="..."></div>
								<h2 class="feature-title">Waktu Pengujian </h2>

							</div>
							<div class="feature-numbered">
								<div><img src="<?= base_url('assets/'); ?>images/5.png" class="w-75 p-4" alt="..."></div>
								<h2 class="feature-title">Tidak ada Biaya Tambahan(TIP)</h2>
							</div>

						</div>

					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->


				<form action="<?= base_url('c_dashboard/feedback') ?>" method="POST">
					<?php
					foreach ($hasil_pengujian as $hp) { ?>

						<div class="container">
							<h1 class=" entry-title">Hasil Pengujian Kendaraan</h1>
							<div class="row">
								<h2>No Kendaraan : </h2>
								<div class="col-md"><input type="text" name="no_kendaraan" style='text-transform:uppercase' value="<?php echo $hp->no_kendaraan ?>" placeholder="No Kendaraan " required autocomplete="off" readonly></div>
								<h2>Durasi Pengujian : </h2>
								<div class="col-md">
									<a class=" btn btn-warning disabled" style="font-family: digital; font-size:xx-large; " role="button" aria-disabled="true">
										<?php
										$mulai = $hp->tanggal;
										$selesai = $hp->waktu_selesai;

										$start = strtotime($mulai);
										$end = strtotime($selesai);
										$diff = $end - $start;

										$hours = floor($diff / (60 * 60));
										$minutes = $diff - $hours * (60 * 60);
										$detik = $diff % 60;
										echo  floor($minutes / 60) . ' Menit';
										?>
									</a>
									<a class=" btn btn-success disabled" style="font-family: digital; font-size:xx-large; " role="button" aria-disabled="true">
										<?php
										$mulai = $hp->tanggal;
										$selesai = $hp->waktu_selesai;

										$start = strtotime($mulai);
										$end = strtotime($selesai);
										$diff = $end - $start;

										$hours = floor($diff / (60 * 60));
										$minutes = $diff - $hours * (60 * 60);
										$detik = $diff % 60;
										echo  $detik . ' detik';
										?>
									</a>
								</div>
							</div>
							<p class="text-right">
								<a class="btn btn-primary" id="refres">Refresh</a>
							</p>
						</div> <!-- .container -->
					<?php } ?>

				</form>

				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?= base_url('assets/'); ?>images/bg_testimoni.jpg" class="d-block w-100" alt="...">
						</div>

						<div class="row text-center" style="margin-top:14%">
							<div class="col-md-6">
								<img src="<?= base_url('assets/'); ?>images/memuaskan.png" class="rounded-circle" style="max-width:30%;height:auto; padding-top: 20px; background-color: #7ed958; ">
								<h2 style="color: thistle; padding-top: 10px;">MEMUASKAN</h2>
								<h3 style="color: black"><?php echo $dl->memuaskan ?> suara </h3>

							</div>


							<div class="col-md-6">
								<img src="<?= base_url('assets/'); ?>images/tidak_puas.png" class="rounded-circle" style="max-width:30%;height:auto; padding-top: 20px; background-color: #ff1717;">
								<h2 style="color: thistle; padding-top: 10px;">TIDAK MEMUASKAN</h2>
								<h3 style="color: black;"><?php echo $dl->tidak_memuaskan ?> suara </h3>

							</div>
						</div>



					</div>
				</div>

			<?php } ?>

			<div class="jam-digital">
				<h1 style="margin: 20px 10%; font-size: 60px; letter-spacing: 10px;">Jam Digital</h1>
				<div id="jam"></div>
				<div id="unit">
					<span>Jam</span>
					<span>Menit</span>
					<span>Detik</span>
				</div>
			</div>
			</div>
		</div>