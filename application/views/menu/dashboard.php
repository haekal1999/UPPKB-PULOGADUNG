<main class="main-content">
    <div class="breadcrumbs">
        <div class="container">
            <a href="<?= base_url('home'); ?>">Home</a>
            <span>Dashboard</span>
        </div>
    </div>

    <div class="alert-parent">

        <?php if ($this->session->flashdata('alert') == 'berhasil_uji') : ?>


            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil </strong> menguji kendaraan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
    <br>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="section-title text-left">Data Kendaraan </h2>

                <div class="table-responsive">
                    <table id="order-listing" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th style="width: 1%;">No</th>
                                <th>Nomor Kendaraan</th>
                                <th>Status Pengujian</th>
                                <th>Kendaraan Masuk</th>
                                <th>Kendaraan Keluar</th>
                                <th>Durasi Pengujian</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no = 1; ?>
                            <?php
                            foreach ($data_kendaraan as $dl) { ?>
                                <tr>

                                    <td><?php echo $no++ ?></td>
                                    <td style='text-transform:uppercase'><?php echo $dl->no_kendaraan ?></td>
                                    <td><?php echo $dl->status ?></td>

                                    <td><?php $tanggal = explode(" ", $dl->tanggal);
                                        echo date_indo($tanggal[0]) . ', ' . $tanggal[1]; ?></td>
                                    <td><?php $tanggal = explode(" ", $dl->waktu_selesai);
                                        echo date_indo($tanggal[0]) . ', ' . $tanggal[1]; ?></td>
                                    <td><?php
                                        $mulai = $dl->tanggal;
                                        $selesai = $dl->waktu_selesai;

                                        $start = strtotime($mulai);
                                        $end = strtotime($selesai);
                                        $diff = $end - $start;

                                        $hours = floor($diff / (60 * 60));
                                        $minutes = $diff - $hours * (60 * 60);
                                        $detik = $diff % 60;
                                        echo  floor($minutes / 60) . ' Menit, ' . $detik . ' detik';
                                        ?>
                                    </td>

                                <?php } ?>
                                </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</main>