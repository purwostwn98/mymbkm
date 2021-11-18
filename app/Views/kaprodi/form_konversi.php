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
                    <b>Panduan Project</b>
                </label>
            </div>
            <div class="col-md-8">
                <a href="<?= base_url(); ?>/document/MBKM_magang.pdf" class="btn btn-success btn-sm btn-icon-split mb-2" target="_blank">
                    <span class="icon text-white-50"> <i class="fas fa-check"></i></span><span class="text">Lihat</span>
                </a>
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
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    Letter of Acceptance (LoA)
                </label>
            </div>
            <div class="col-md-8">
                <a href="#" target="_blank" style="font-size: 12px;" class="btn-small btn btn-warning">Download</a>
            </div>
        </div>
    </div>
</div>

<!-- form konversi -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-primary py-3">
        <h6 class="m-0 font-weight-bold text-white">Form Konversi</h6>
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
                                            <table class="table table-bordered dataTable" id="dataTable1" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead class="bg-primary text-white">
                                                    <tr class="text-center" role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 10px;">Semester</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 10px;">Kode MK</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 30px;">Mata Kuliah</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">SKS</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Keterangan</th>
                                                        <th aria-controls="dataTable1" rowspan="1" colspan="1" style="width: 10px;">Pilih</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">1</td>
                                                        <td>TIN2110732</td>
                                                        <td>Menggambar Teknik</td>
                                                        <td>2</td>
                                                        <td class="text-center">
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-primary p-2 text-white">wajib</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">3</td>
                                                        <td>TEK2130232</td>
                                                        <td>Konsep Rekayasa</td>
                                                        <td>2</td>
                                                        <td class="text-center">
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-primary p-2 text-white">wajib</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option2" aria-label="...">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">3</td>
                                                        <td>TIN2130952</td>
                                                        <td>Perancangan Sistem Kerja</td>
                                                        <td>2</td>
                                                        <td class="text-center">
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-primary p-2 text-white">wajib</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option2" aria-label="...">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">7</td>
                                                        <td>TIN2170142</td>
                                                        <td>Kewirausahaan</td>
                                                        <td>2</td>
                                                        <td class="text-center">
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-primary p-2 text-white">wajib</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option2" aria-label="...">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">P</td>
                                                        <td>TIN2172783</td>
                                                        <td>Magang I</td>
                                                        <td>3</td>
                                                        <td class="text-center">
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-warning p-2 text-white">pilihan</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option2" aria-label="...">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">P</td>
                                                        <td>TIN2172886</td>
                                                        <td>Magang II</td>
                                                        <td>3</td>
                                                        <td class="text-center">
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-warning p-2 text-white">pilihan</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option2" aria-label="...">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">P</td>
                                                        <td>TIN2172989</td>
                                                        <td>Magang III</td>
                                                        <td>3</td>
                                                        <td class="text-center">
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-warning p-2 text-white">pilihan</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option2" aria-label="...">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">P</td>
                                                        <td>TIN2172483</td>
                                                        <td>Kuliah Kerja Nyata Tematik I</td>
                                                        <td>3</td>
                                                        <td class="text-center">
                                                            <span style="border-radius: 5px; font-size: 11px" class="bg-warning p-2 text-white">pilihan</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option2" aria-label="...">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">P</td>
                                                        <td colspan="5">dst. semua mata kuliah yang ditawarkan prodi masing-masing</td>
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