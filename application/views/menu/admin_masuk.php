<main class="main-content">
	<div class="breadcrumbs">
		<div class="container">
			<a href="<?= base_url('home'); ?>">Home</a>
			<span>Admin Masuk</span>
		</div>
	</div>
	<br>
	<div class="alert-parent">

		<?php if ($this->session->flashdata('alert') == 'berhasil_simpan') : ?>


			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil </strong> menyimpan no kendaraan
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>
	</div>
	<form action="<?= base_url('c_dashboard/add_no_kendaraan') ?>" method="POST" class="contact-form">

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="exampleModalLabel">Simpan</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Apakah No Kendaraan Sudah Benar ?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary">Ya</button>

					</div>
				</div>
			</div>
		</div>

		<div class="page">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<h2 class="section-title text-left">Masukkan No Kendaraan </h2>
						<div class="row">
							<div class="col-md"><input type="text" name="no_kendaraan" style='text-transform:uppercase' placeholder="No Kendaraan " required autocomplete="off"></div>
						</div>

						<p class="text-right">
							<a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Simpan</a>
						</p>
					</div>
				</div>
			</div>
		</div>

	</form>




</main>