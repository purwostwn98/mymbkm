<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Heading -->
<div class="row d-sm-flex align-items-center justify-content-between mb-4">
    <div class="col-auto">
        <h1 class="h3 mb-0 text-gray-800">Detail Ajuan</h1>
    </div>
    <div class="col-auto mt-4">
        <p>Status:
            <span style="border-radius: 5px;" class="bg-info px-2 text-white">Diterima</span>
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
                Ranuri
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
                D100160125
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
                Teknik Mesin/TEKNIK
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
                    SKS yang sudah ditempuh
                </label>
            </div>
            <div class="col-md-8">
                102
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
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-danger p-2 text-white">ditolak</span>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">2</td>
                                                        <td>Magang Kementrian BUMN</td>
                                                        <td>MBKM Magang</td>
                                                        <td>3 November 2021</td>
                                                        <td class="text-center">
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-info p-2 text-white">diterima</span>
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
                1 Desember 2021
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
                30 Mei 2022
            </div>
        </div>
    </div>
</div>

<!-- Konversi -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-info py-3">
        <h6 class="m-0 font-weight-bold text-white">Konversi (<i>tampilan untuk yang sudah dikonversi</i>)</h6>
        <a href="/kaprodi/formKonversi" style="font-size: 12px;" class=" btn-small btn btn-warning">Edit Konversi</a>
    </div>

    <div class="card-body">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Mata Kuliah</b>
                </label>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>Magang I</li>
                    <li>Magang II</li>
                </ul>
            </div>
            <div class="col-md-2">
                3 sks<br>3 sks
            </div>
            <div class="col-md-3">
                - <br> -
            </div>
        </div>
    </div>
</div>

<!-- List Pembimbing -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-info py-3">
        <h6 class="m-0 font-weight-bold text-white">List Pembimbing</h6>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
                <p style="border-radius: 5px; font-size: 12px" class="bg-info px-2 text-white">Berisi list dosen aktif Fakultas yang bersangkutan</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="collapse show" id="collapseExample1" data-parent="#accordion">
                        <div style="font-size: 12px;" class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable" id="dataTable1" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead class="bg-primary text-white">
                                                    <tr class="text-center" role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 10px;">No</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 10px;">NIK</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 50px;">Nama Dosen</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Lulus</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">On Going</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">1</td>
                                                        <td>776</td>
                                                        <td>Mr. Xavi Hernandezz</td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">
                                                            1
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">2</td>
                                                        <td>734</td>
                                                        <td>Mr. Pogba</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-center">
                                                            0
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">3</td>
                                                        <td>887</td>
                                                        <td>Mrs. Messia</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">
                                                            0
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

<!-- Form Tentukan Pembimbing -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-primary py-3">
        <h6 class="m-0 font-weight-bold text-white">Form Pilih Pembimbing</h6>
    </div>
    <div class="card-body">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Pembimbing</b>
                </label>
            </div>
            <div class="col-md-8">
                <select id="approval" class="form-control" name="persetujuan" onchange="getval(this);">
                    <option selected value="" disabled>--Pilih--</option>
                    <option value="1">Mr. Xavi Hernandezz</option>
                    <option value="2">Mr. Pogba</option>
                    <option value="3">Mrs. Messia</option>
                </select>
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
        <a onclick="history.go(-1)" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-save"></i>
            </span>
            <span class="text">Simpan</span>
        </a>
    </div>
</div>

<script type="text/javascript" src="<?= base_url(); ?>/js/angkaRibuan.js"></script>

<script type="text/javascript" src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min2.js"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->


<?= $this->endSection(); ?>