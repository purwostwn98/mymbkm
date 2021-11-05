<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>
<div class="row d-sm-flex align-items-center justify-content-between mb-4">
    <div class="col-lg-4">
        <h1 class="h3 mb-0 text-gray-800">Statistik | Teknik Industri</h1>
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

<!-- Content Row -->
<div class="row">

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Permintaan Rekomendasi
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ajuan dalam proses -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            On Going
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                            Lulus
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">102</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-window-close fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Ditolak
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">19</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-thumbs-up fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header  bg-primary py-3">
                <h6 class="m-0 font-weight-bold text-white">Statistik Berdasarkan Project</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="pieMitra2"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url(); ?>/vendor/chart.js/Chart.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    // Pie chart per fakultas
    var ctx = document.getElementById("pieMitra2");
    var pieMitra2 = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                'MBKM Magang',
                'MBKM Pertukaran Pelajar',
                'MBKM KKN Tematik',
                'MBKM Kewirausahaan',
                'MBKM Penelitian',
                'MBKM Pengabdian Masyarakat'
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
</script>
<?= $this->endSection(); ?>