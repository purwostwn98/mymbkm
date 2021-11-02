<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>
<div class="row d-sm-flex align-items-center justify-content-between mb-4">
    <div class="col-lg-4">
        <h1 class="h3 mb-0 text-gray-800">Statistik</h1>
    </div>
    <div class="col-auto">
        <div class="row">
            <span class="text-primary">1 Januari 2021 - 30 Desember 2021 </span>
            <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm ml-2" data-toggle="modal" data-target="#filterModal">
                <i class="fas fa-search fa-sm text-white-50"></i> Filter Tanggal
            </button>
            <!-- Modal -->
            <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title text-white" id="filterModalLabel"><strong>Filter tanggal</strong></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" id="formFilter" action="/dashboard">
                            <?= csrf_field(); ?>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputAddress">Tanggal Mulai</label>
                                    <input type="date" class="form-control" id="inputAddress" name="tgAwal" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Tanggal Akhir</label>
                                    <input type="date" class="form-control" id="inputAddress2" name="tgAkhir" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <a href="/dashboard?hpsFilter=noFilter" role="button" class="btn btn-success">Hapus Filter</a>
                                <input type="hidden" name="filterTgl" value="filter">
                                <button type="submit" class="btn btn-primary btnFilter" name="btnFilter">Filter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- button Ekspor pdf -->
            <a href=" /eksporpdf?filter=&tgAwal=&tgAkhir=" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm ml-2 btnPdf" name="btnPdf">
                <i class="fa fa-file-pdf fa-sm text-white-50"></i> Ekspor PDF
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header  bg-primary py-3">
                <h6 class="m-0 font-weight-bold text-white">Statistik Ajuan MBKM (outbond)</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="pieMitra"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header  bg-primary py-3">
                <h6 class="m-0 font-weight-bold text-white">Statistik Ajuan MBKM (inbond)</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="pieInbond"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header  bg-primary py-3">
                <h6 class="m-0 font-weight-bold text-white">Statistik MBKM Aktif per Fakultas</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="pieMitra2"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-xl-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <!-- Card Body -->
            <div class="card-body">
                <!--<canvas id="myAreaChart"></canvas> -->
                <div align='center' id="chart2"></div><br>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url(); ?>/vendor/chart.js/Chart.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
    // Pie Chart lulus ditolak ongoing
    var ctx = document.getElementById("pieMitra");
    var pieMitra = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                'Ditolak',
                'Lulus',
                'On Going'
            ],
            datasets: [{
                data: [10, 50, 46],
                backgroundColor: ['#e74a3b', '#1cc88a', '#36b9cc', '#f6c23e'],
                hoverBackgroundColor: ['#6b231c', '#0c5c3f', '#2c9faf', '#947526'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: true
            },
            cutoutPercentage: 80,
        },
    });

    var ctx = document.getElementById("pieInbond");
    var pieMitra = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                'Ditolak',
                'Lulus',
                'On Going'
            ],
            datasets: [{
                data: [1, 3, 8],
                backgroundColor: ['#e74a3b', '#1cc88a', '#36b9cc', '#f6c23e'],
                hoverBackgroundColor: ['#6b231c', '#0c5c3f', '#2c9faf', '#947526'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: true
            },
            cutoutPercentage: 80,
        },
    });

    // Pie chart per fakultas
    var ctx = document.getElementById("pieMitra2");
    var pieMitra2 = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                'Teknik',
                'Ekonomi dan Bisnis',
                'Pendidikan',
                'Agama Islam',
                'Fakultas 5',
                'Fakultas 6'
            ],
            datasets: [{
                data: [20, 10, 5, 7, 2, 8],
                backgroundColor: ['#e74a3b', '#1cc88a', '#36b9cc', '#f6c23e'],
                hoverBackgroundColor: ['#6b231c', '#0c5c3f', '#2c9faf', '#947526'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: true
            },
            cutoutPercentage: 80,
        },
    });

    // Pie Chart / prodi
    new Highcharts.Chart({
        chart: {
            renderTo: 'chart2',
            type: 'column',
        },
        title: {
            text: 'Statistik',
            x: -20
        },
        subtitle: {
            text: 'Mahasiswa Ongoing per Program Studi',
            x: -20
        },
        xAxis: {
            categories: ['Teknik Industri', 'Informatika', 'Komunikasi', 'Bahasa Inggris', 'Teknik Mesin', 'Teknik Kimia'],
        },
        yAxis: {
            title: {
                text: 'Jumlah On Going'
            },
        },
        series: [{
            name: 'Program Studi',
            data: [5, 2, 1, 7, 1, 1],
            color: '#e6459b'
        }, ]
    });
</script>
<?= $this->endSection(); ?>