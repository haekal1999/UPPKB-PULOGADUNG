<div class="site-footer">


    <div class="bottom-footer">
        <div class="container">
            <nav class="footer-navigation">
                <a href="<?= base_url('home'); ?>">Home</a>
                <a href="<?= base_url('dashboard'); ?>">Dashboard</a>
                <a href="<?= base_url('input-kendaraan'); ?>">Admin Masuk</a>
                <a href="<?= base_url('input-kendaraan-keluar'); ?>">Admin Akhir</a>
                <a href="<?= base_url('testimoni'); ?>">Penilaian Customer</a>
                <a href="<?= base_url('login/logout'); ?>">Logout</a>
            </nav>

            <div class="colophon">Copyright <?php echo date("Y"); ?> UP PKB PULOGADUNG</div>
        </div>
    </div>
</div>
</main>
<script src="<?= base_url('assets/'); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?= base_url('assets/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>

<script src="<?= base_url('assets/'); ?>js/plugins.js"></script>
<script src="<?= base_url('assets/'); ?>js/app.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/DataTables-1.10.24/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/DataTables-1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url() ?>assets/vendor/datatables/Buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/Buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/Buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/Buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/Buttons/js/buttons.colVis.min.js"></script>

<script src="<?php echo base_url() ?>assets/vendor/datatables/JSZip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/pdfmake/vfs_fonts.js"></script>


<script>
    $(document).ready(function() {
        var table = $('#order-listing').DataTable({

            buttons: ['copy', 'csv', 'print', 'excel', 'pdf', 'colvis']
        });

        table.buttons().container()
            .appendTo('#order-listing_wrapper .col-md-6:eq(0)');
    });

    function animation(span) {
        span.className = "turn";
        setTimeout(function() {
            span.className = ""
        }, 700);
    }

    function jam() {
        setInterval(function() {

            var waktu = new Date();
            var jam = document.getElementById('jam');
            var hours = waktu.getHours();
            var minutes = waktu.getMinutes();
            var seconds = waktu.getSeconds();

            if (waktu.getHours() < 10) {
                hours = '0' + waktu.getHours();
            }
            if (waktu.getMinutes() < 10) {
                minutes = '0' + waktu.getMinutes();
            }
            if (waktu.getSeconds() < 10) {
                seconds = '0' + waktu.getSeconds();
            }
            jam.innerHTML = '<span>' + hours + '</span>' +
                '<span>' + minutes + '</span>' +
                '<span>' + seconds + '</span>';

            var spans = jam.getElementsByTagName('span');
            animation(spans[2]);
            if (seconds == 0) animation(spans[1]);
            if (minutes == 0 && seconds == 0) animation(spans[0]);

        }, 1000);
    }

    jam();

    $(document).ready(function() {
        var id = 1;
        $("#refres").click(function() {
            $.ajax({
                url: "c_dashboard/feedback",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#Container').html(data);
                    alert('Berhasil Refresh');
                }
            });
        });

    });
</script>
</body>