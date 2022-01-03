<main class="main-content" id="Container">


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



    <form method="post" id="form_memuaskan">

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
                        <button id="memuaskan" type="button" class="btn btn-primary" data-dismiss="modal">Ya</button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post" id="form_memuaskan">

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
                        <button id="tidakmemuaskan" type="button" class="btn btn-primary" data-dismiss="modal">Ya</button>


                    </div>
                </div>
            </div>
        </div>

    </form>





    <div class="page">

        <form action="<?= base_url('testimoni/index') ?>" method="POST">
            <?php
            foreach ($hasil_pengujian as $hp) { ?>

                <div class="container" style="margin-top:1%">
                    <h1 class="entry-title">Hasil Pengujian Kendaraan</h1>

                    <div class="row" style="margin-top:1%">
                        <div class="col-6 col-md-4">
                            <h2>No Kendaraan : </h2>
                            <input type="text" name="no_kendaraan" style='text-transform:uppercase' value="<?php echo $hp->no_kendaraan ?>" placeholder="No Kendaraan " required autocomplete="off" readonly>
                        </div>
                        <div class="col-6 col-md-4">
                        </div>
                        <div class="col-6 col-md-4">
                            <h2>Durasi Pengujian : </h2>
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
                    <img src="<?= base_url('assets/'); ?>images/bg_testimoni.jpg" style="height: auto; width:auto;" class="img-fluid d-block w-100" alt="...">
                </div>

                <div class="row text-center" style="margin-top:14%">
                    <div class="col-md-6">
                        <a type="button" data-toggle="modal" data-target="#exampleModal" title="Jika Anda Merasa Puas dengan Pelayanan kami, Klik Icon ini!">
                            <img src="<?= base_url('assets/'); ?>images/memuaskan.png" class="img-fluid rounded-circle" style="max-width:30%;height:auto; padding-top: 20px; background-color: #7ed958; ">
                        </a>
                        <h2 style="color: thistle; padding-top: 10px;">MEMUASKAN</h2>
                    </div>


                    <div class="col-md-6">
                        <a type="button" data-toggle="modal" data-target="#ModalTidakPuas" title="Jika Anda Merasa Kurang dengan Pelayanan kami, Klik Icon ini!">
                            <img src="<?= base_url('assets/'); ?>images/tidak_puas.png" class="img-fluid rounded-circle" style="max-width:30%;height:auto; padding-top: 20px; background-color: #ff1717;">
                        </a>
                        <h2 style="color: thistle; padding-top: 10px;">TIDAK MEMUASKAN</h2>
                    </div>
                </div>


            </div>
        </div>


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