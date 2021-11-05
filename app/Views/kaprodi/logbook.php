<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Heading -->
<div class="row d-sm-flex align-items-center justify-content-between mb-4">
    <div class="col-auto">
        <h1 class="h3 mb-0 text-gray-800">Log Book > D100180125</h1>
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
                                                    <a href="<?= base_url(); ?>/img/foto_logbook.jpg" target="_blank" style="font-size: 12px;" class=" btn-small btn btn-info">Lihat</a>
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
        <a onclick="history.go(-1)" class="btn btn-warning btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
</div>

<script type="text/javascript" src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min2.js"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->


<?= $this->endSection(); ?>