<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Heading -->
<div class="row d-sm-flex align-items-center justify-content-between mb-4">
    <div class="col-auto">
        <h1 class="h3 mb-0 text-gray-800">Detail Ajuan</h1>
    </div>
    <div class="col-auto mt-4">
        <p>Status:
            <span style="border-radius: 5px;" class="bg-primary p-2 text-white">On Going</span>
        </p>
    </div>
</div>

<!-- Data Mahasiswa -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-info py-3">
        <h6 class="m-0 font-weight-bold text-white">Data Peserta</h6>
    </div>

    <div class="card-body">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Nama</b>
                </label>
            </div>
            <div class="col-md-8">
                Udin
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>NIM</b>
                </label>
            </div>
            <div class="col-md-8">
                D600160125
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Program Studi/Fakultas</b>
                </label>
            </div>
            <div class="col-md-8">
                Teknik Industri/TEKNIK
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    IPK
                </label>
            </div>
            <div class="col-md-8">
                3.85
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    Semester
                </label>
            </div>
            <div class="col-md-8">
                6
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    Pembimbing
                </label>
            </div>
            <div class="col-md-8">
                Mr. Setia
            </div>
        </div>
    </div>
</div>
<!-- Riwayat Pendaftaran -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-info py-3">
        <h6 class="m-0 font-weight-bold text-white">Riwayat Pendaftaran</h6>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="collapse show" id="collapseExample1" data-parent="#accordion">
                        <div style="font-size: 12px;" class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead class="bg-primary text-white">
                                                    <tr class="text-center" role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 10px;">No</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 30px;">Nama Project</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Proj. Category</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Tgl. Ajuan</th>
                                                        <th aria-controls="dataTable" rowspan="1" colspan="1" style="width: 10px;">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">1</td>
                                                        <td>Pertukaran Pelajar UGM</td>
                                                        <td>MBKM Pertukaran Pelajar</td>
                                                        <td>4 Maret 2021</td>
                                                        <td class="text-center">
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-danger px-2 text-white">ditolak</span>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">2</td>
                                                        <td>Magang Kementrian BUMN</td>
                                                        <td>MBKM Magang</td>
                                                        <td>3 November 2021</td>
                                                        <td class="text-center">
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-info px-2 text-white">on going</span>
                                                        </td>
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
            </div>
        </div>
    </div>
</div>
<!-- Data Program -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-info py-3">
        <h6 class="m-0 font-weight-bold text-white">Data Program</h6>
    </div>

    <div class="card-body">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Nama Project</b>
                </label>
            </div>
            <div class="col-md-8">
                Magang Kementrian BUMN
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Kategori Project</b>
                </label>
            </div>
            <div class="col-md-8">
                MBKM Magang
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Kurun Pelaksanaan</b>
                </label>
            </div>
            <div class="col-md-8">
                2021/2022
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    Tgl. Mulai
                </label>
            </div>
            <div class="col-md-8">
                1 Agustus 2021
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    Tgl Berakhir
                </label>
            </div>
            <div class="col-md-8">
                24 Desember 2021
            </div>
        </div>
    </div>
</div>


<!-- Status -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-success py-3">
        <h6 class="m-0 font-weight-bold text-white">Status (On Going)</h6>
    </div>

    <div class="card-body">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Status</b>
                </label>
            </div>
            <div class="col-md-8">
                <span style="border-radius: 5px;" class="bg-info px-2 text-white">On Going</span>
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Log Book</b>
                </label>
            </div>
            <div class="col-md-8">
                <a href="/kaprodi/logBook" style="border-radius: 5px;" class="bg-primary p-2 text-white">Lihat Log Book (muncul ketika status ongoing/lulus)</a href="/kaprodi/logBook">
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Nilai</b>
                </label>
            </div>
            <div class="col-md-5">
                <ul>
                    <li>Sistem Lingkungan Industri</li>
                    <li>Proses Manufacturing</li>
                </ul>
            </div>
            <div class="col-md-3">
                - <br> -
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-primary py-3">
        <h6 class="m-0 font-weight-bold text-white">Status (lulus)</h6>
    </div>

    <div class="card-body">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Status</b>
                </label>
            </div>
            <div class="col-md-8">
                <span style="border-radius: 5px;" class="bg-success p-2 text-white">lulus</span>
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Log Book</b>
                </label>
            </div>
            <div class="col-md-8">
                <a href="/kaprodi/logBook" style="border-radius: 5px;" class="bg-primary p-2 text-white">Lihat Log Book (muncul ketika status ongoing/lulus)</a href="/kaprodi/logBook">
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Nilai</b>
                </label>
            </div>
            <div class="col-md-5">
                <ul>
                    <li>Sistem Lingkungan Industri</li>
                    <li>Proses Manufacturing</li>
                </ul>
            </div>
            <div class="col-md-3">
                A <br> AB
            </div>
        </div>
    </div>
</div>


<!-- Button -->
<div class="row">
    <div class="col">
        <a onclick="history.go(-1)" class="btn btn-warning btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
</div>

<script type="text/javascript" src="<?= base_url(); ?>/js/angkaRibuan.js"></script>

<script type="text/javascript" src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min2.js"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->


<?= $this->endSection(); ?>