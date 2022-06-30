<!-- jQuery -->
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/jquery.min.js"></script>
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/popper.min.js"></script>
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/bootstrap.min.js"></script>
<!-- wow animation -->
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/animate.js"></script>
<!-- select country -->
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/bootstrap-select.js"></script>
<!-- owl carousel -->
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/owl.carousel.js"></script>
<!-- chart js -->
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/Chart.min.js"></script>
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/Chart.bundle.min.js"></script>
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/utils.js"></script>
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/analyser.js"></script>
<!-- nice scrollbar -->
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/perfect-scrollbar.min.js"></script>
<script>
    var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- custom js -->
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/custom.js"></script>
<script src="<?= base_url('asset/pluto-1.0.0/') ?>js/chart_custom_style1.js"></script>
<script src="<?= base_url() ?>asset/chart/dist/Chart.min.js"></script>
<script src="<?= base_url() ?>asset/chart/samples/utils.js"></script>
<script>
    console.log = function() {}
    $("#produk").on('change', function() {

        $(".harga").html($(this).find(':selected').attr('data-harga'));
        $(".harga").val($(this).find(':selected').attr('data-harga'));

    });
</script>
<script>
    <?php
    foreach ($transaksi as $key => $value) {
        $tanggal[] = $value->tanggal_order;
        $total[] = $value->total;
    }
    ?>
    var ctx = document.getElementById('grafik');
    var grafik = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= json_encode($tanggal) ?>,
            datasets: [{
                label: 'Grafik Analisis Transaksi Perhari',
                data: <?= json_encode($total) ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.80)',
                    'rgba(54, 162, 235, 0.80)',
                    'rgba(255, 206, 86, 0.80)',
                    'rgba(75, 192, 192, 0.80)',
                    'rgba(153, 102, 255, 0.80)',
                    'rgba(255, 159, 64, 0.80)',
                    'rgba(201, 76, 76, 0.3)',
                    'rgba(201, 77, 77, 1)',
                    'rgba(0, 140, 162, 1)',
                    'rgba(158, 109, 8, 1)',
                    'rgba(201, 76, 76, 0.8)',
                    'rgba(0, 129, 212, 1)',
                    'rgba(201, 77, 201, 1)',
                    'rgba(255, 207, 207, 1)',
                    'rgba(201, 77, 77, 1)',
                    'rgba(128, 98, 98, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(128, 128, 128, 1)',
                    'rgba(255, 99, 132, 0.80)',
                    'rgba(54, 162, 235, 0.80)',
                    'rgba(255, 206, 86, 0.80)',
                    'rgba(75, 192, 192, 0.80)',
                    'rgba(153, 102, 255, 0.80)',
                    'rgba(255, 159, 64, 0.80)',
                    'rgba(201, 76, 76, 0.3)',
                    'rgba(201, 77, 77, 1)',
                    'rgba(0, 140, 162, 1)',
                    'rgba(158, 109, 8, 1)',
                    'rgba(201, 76, 76, 0.8)',
                    'rgba(0, 129, 212, 1)',
                    'rgba(201, 77, 201, 1)',
                    'rgba(255, 207, 207, 1)',
                    'rgba(201, 77, 77, 1)',
                    'rgba(128, 98, 98, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(128, 128, 128, 1)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(201, 76, 76, 0.3)',
                    'rgba(201, 77, 77, 1)',
                    'rgba(0, 140, 162, 1)',
                    'rgba(158, 109, 8, 1)',
                    'rgba(201, 76, 76, 0.8)',
                    'rgba(0, 129, 212, 1)',
                    'rgba(201, 77, 201, 1)',
                    'rgba(255, 207, 207, 1)',
                    'rgba(201, 77, 77, 1)',
                    'rgba(128, 98, 98, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(128, 128, 128, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(201, 76, 76, 0.3)',
                    'rgba(201, 77, 77, 1)',
                    'rgba(0, 140, 162, 1)',
                    'rgba(158, 109, 8, 1)',
                    'rgba(201, 76, 76, 0.8)',
                    'rgba(0, 129, 212, 1)',
                    'rgba(201, 77, 201, 1)',
                    'rgba(255, 207, 207, 1)',
                    'rgba(201, 77, 77, 1)',
                    'rgba(128, 98, 98, 1)',
                    'rgba(0, 0, 0, 1)',
                    'rgba(128, 128, 128, 1)'
                ],
                fill: false,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
</body>

</html>