<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Heading -->
<div class="row d-sm-flex align-items-center justify-content-between mb-4">
    <div class="col-auto">
        <h1 class="h3 mb-0 text-gray-800">Log Book > D100180125</h1>
    </div>
    <div class="col-auto">
        <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm ml-2" data-toggle="modal" data-target="#filterModal">
            <i class="fa fa-plus-circle fa-sm text-white-50"></i> Entry Log Book
        </button>
    </div>
</div>

<!-- Log Book -->
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
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 30px;">Minggu ke</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Kegiatan</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 80px;">Deskripsi</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 30px;">Lampiran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 text-center">1</td>
                                                <td>27 Sep 2021 - 1 Okt 2021</td>
                                                <td>Pengenalan Lingkungan</td>
                                                <td>Mengenal perusahaan dengan keliling dan penjelasan pembimbing lapangan.</td>
                                                <td class="text-center">
                                                    <a href="/mahasiswa/progress" style="font-size: 12px;" class=" btn-small btn btn-info">Lihat</a>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 text-center">2</td>
                                                <td>4 Okt 2021 - 8 Okt 2021</td>
                                                <td>Penempatan divisi</td>
                                                <td>Dilakukan wawancara oleh pembimbing lapangan untuk mengetahui minat peserta</td>
                                                <td class="text-center">
                                                    -
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 text-center">3</td>
                                                <td>11 Okt 2021 - 15 Okt 2021</td>
                                                <td>....</td>
                                                <td>....</td>
                                                <td class="text-center">
                                                    -
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

<!-- Button -->
<div class="row">
    <div class="col">
        <a href="/mahasiswa/progress" class="btn btn-warning btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
        <a onclick="history.go(-1)" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Finish</span>
        </a>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <p><i># Tombol finish digunakan jika project sudah selesai</i></p>
    </div>
</div>

<script type="text/javascript" src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min2.js"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->
<div class="modal fade bd-example-modal-lg" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white" id="filterModalLabel"><strong>Entry Log Book</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formFilter" action="#">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputAddress">Tanggal Awal</label>
                        <input type="date" class="form-control" id="inputAddress" name="tgAwal" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="inputAddress2" name="tgAkhir" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Kegiatan</label>
                        <input type="text" class="form-control" id="inputAddress2" name="tgAkhir" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Deskripsi</label>
                        <textarea class="form-control" id="ketRecKesra" name="ketRecKesra" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Lampiran</label>
                        <div class="form-group text-small mt-2 font-weight-light">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="#" role="button" class="btn btn-success">Submit</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>