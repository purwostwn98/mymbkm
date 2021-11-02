<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Project Category</h1>
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm ml-2" data-toggle="modal" data-target="#filterModal">
        <i class="fa fa-plus-circle fa-sm text-white-50"></i> Add Category
    </button>

    <div class="modal fade bd-example-modal-lg" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title text-white" id="filterModalLabel"><strong>Add Category Project</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" id="formFilter" action="#">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputAddress">Nama Kategori</label>
                            <input type="text" class="form-control" id="inputAddress" name="tgAwal" required>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Tahun Ajaran</label>
                            <input type="text" class="form-control" id="inputAddress2" name="tgAkhir" required>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Deskripsi</label>
                            <textarea class="form-control" id="ketRecKesra" name="ketRecKesra" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Dokumen Panduan</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Panduan...</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Assign Project Koordinator</label>
                            <select id="approval" class="form-control" name="persetujuan" onchange="getval(this);">
                                <option selected value="" disabled>--Pilih--</option>
                                <option value="1">Mr. Alex</option>
                                <option value="2">Mrs. Venya</option>
                                <option value="3">Mr. Sagi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Status</label>
                            <select id="approval" class="form-control" name="persetujuan" onchange="getval(this);">
                                <option selected value="0">Aktif</option>
                                <option value="1">Tidak Aktif</option>
                            </select>
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
                                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                        <thead class="bg-primary text-white">
                                            <tr class="text-center" role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 10px;">No</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Proj. Category</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Proj. Koordinator</th>
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
                                                <td>MBKM Pertukaran Pelajar</td>
                                                <td>Ir. Setia, Ph.D</td>
                                                <td class="text-center">2021/2022</td>
                                                <td class="text-center">439</td>
                                                <td class="text-center">101</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">8</td>
                                                <td class="text-center">10</td>
                                                <td class="text-center">
                                                    <a href="/kaprodi/detailCategory" style="font-size: 12px;" class=" btn-small btn btn-info">Detail</a>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 text-center">2</td>
                                                <td>MBKM Magang</td>
                                                <td>Dr. Kipli </td>
                                                <td class="text-center">2021/2022</td>
                                                <td class="text-center">98</td>
                                                <td class="text-center">50</td>
                                                <td class="text-center">20</td>
                                                <td class="text-center">13</td>
                                                <td class="text-center">10</td>
                                                <td class="text-center">
                                                    <a href="/kaprodi/detailCategory" style="font-size: 12px;" class=" btn-small btn btn-info">Detail</a>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 text-center">3</td>
                                                <td>MBKM Kewirausahaan</td>
                                                <td>Michael, Ph.D </td>
                                                <td class="text-center">2021/2022</td>
                                                <td class="text-center">98</td>
                                                <td class="text-center">50</td>
                                                <td class="text-center">20</td>
                                                <td class="text-center">13</td>
                                                <td class="text-center">10</td>
                                                <td class="text-center">
                                                    <a href="/kaprodi/detailCategory" style="font-size: 12px;" class=" btn-small btn btn-info">Detail</a>
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

<div class="modal fade bd-example-modal-lg" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white" id="detailModalLabel"><strong>Detail Category Project</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formFilter" action="#">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputAddress">Nama Kategori</label>
                        <input type="text" class="form-control" id="inputAddress" name="tgAwal" value="MBKM Pertukaran Pelajar" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Tahun Ajaran</label>
                        <input type="text" class="form-control" id="inputAddress2" name="tgAkhir" value="2021-2022-1" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Deskripsi</label>
                        <textarea class="form-control" id="ketRecKesra" name="ketRecKesra" rows="3" readonly>
                            MBKM Pertukaran Pelajar merupakan ....
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Assign Project Koordinator</label>
                        <select id="approval" class="form-control" name="persetujuan" onchange="getval(this);">
                            <option value="" disabled>--Pilih--</option>
                            <option selected value="1">Mr. Alex</option>
                            <option value="2">Mrs. Venya</option>
                            <option value="3">Mr. Sagi</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="#" role="button" class="btn btn-success">Edit</a>
                    <a href="#" role="button" class="btn btn-danger">Hapus</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>