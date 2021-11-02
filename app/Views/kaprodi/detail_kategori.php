<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Heading -->
<div class="row d-sm-flex align-items-center justify-content-between mb-4">
    <div class="col-auto">
        <h1 class="h3 mb-0 text-gray-800">Detail Kategori Project</h1>
    </div>
</div>

<!-- Data Mahasiswa -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-info py-3">
        <h6 class="m-0 font-weight-bold text-white">Data Kategori</h6>
    </div>
    <div class="card-body">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Nama Kategori</b>
                </label>
            </div>
            <div class="col-md-8">
                MBKM Program Magang Bersertifikat
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Deskripsi</b>
                </label>
            </div>
            <div class="col-md-8">
                Program Magang Mahasiswa Bersertifikat (PMMB) dilaksanakan melalui Program Magang Mahasiswa Bersertiftkat (PMMB) dilaksanakan melalui
                pemagangan mahasiswa sesuai dengan project yang diberikan oleh pihak
                industri selama 12 semesterPeserta magang dinyatakan selesai mengikuti
                pemagangan setelah menyelesaikan pekerjaan dengan waktu yang telah di
                tentukanyang kemudian diakui oleh pihak lndu
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Panduan</b>
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
                    Koordinator Project
                </label>
            </div>
            <div class="col-md-8">
                Andy Dwi Bayu Bawono
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    No. Telp
                </label>
            </div>
            <div class="col-md-8">
                085647053296
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    Email
                </label>
            </div>
            <div class="col-md-8">
                andydwi@ums.ac.id
            </div>
        </div>
    </div>
</div>

<!-- Data Program -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-info py-3">
        <h6 class="m-0 font-weight-bold text-white">Daftar Project</h6>
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
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">TA</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Jml. Pendaftar</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Lulus</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">On Going</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">On Progress</th>
                                                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Ditolak</th>
                                                        <th aria-controls="dataTable" rowspan="1" colspan="1" style="width: 10px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">1</td>
                                                        <td>Magang Perusahaan Z</td>
                                                        <td class="text-center">2021/2022</td>
                                                        <td class="text-center">439</td>
                                                        <td class="text-center">101</td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">8</td>
                                                        <td class="text-center">10</td>
                                                        <td class="text-center">
                                                            <button data-toggle="modal" data-target="#detailModal" style="font-size: 12px;" class="btn-small btn btn-info">Detail</button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 text-center">2</td>
                                                        <td>Magang Pertamini</td>
                                                        <td class="text-center">2021/2022</td>
                                                        <td class="text-center">98</td>
                                                        <td class="text-center">50</td>
                                                        <td class="text-center">20</td>
                                                        <td class="text-center">13</td>
                                                        <td class="text-center">10</td>
                                                        <td class="text-center">
                                                            <a href="/koordinator/detailProgram" style="font-size: 12px;" class=" btn-small btn btn-info">Detail</a>
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
<div class="modal fade bd-example-modal-lg" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white" id="detailModalLabel"><strong>Detail Project</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formFilter" action="#">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputAddress">Nama Project</label>
                        <input type="text" class="form-control" id="inputAddress" name="tgAwal" value="Magang Pertamini" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Tahun Ajaran</label>
                        <input type="text" class="form-control" id="inputAddress2" name="tgAkhir" value="2021-2022" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Deskripsi</label>
                        <textarea class="form-control" id="ketRecKesra" name="ketRecKesra" rows="3" readonly>Magang Pertamini merupakan kegiatan magang berkerja sama dengan Pertamini. .... 
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Syarat</label>
                        <textarea class="form-control" id="ketRecKesra" name="ketRecKesra" rows="4" readonly>
                            1. Mahasiswa min. semester 6
                            2. IPK min. 3.50
                            3. Bersedia ditempatkan diseluruh cabang
                            4. Dilaksanakan min. 6 bulan
                        </textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= base_url(); ?>/js/angkaRibuan.js"></script>

<script type="text/javascript" src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min2.js"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->



<?= $this->endSection(); ?>