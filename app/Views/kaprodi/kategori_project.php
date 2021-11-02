<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Project Category</h1>
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
                                                <td class="text-center">54</td>
                                                <td class="text-center">26</td>
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
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 text-center">3</td>
                                                <td>MBKM Penelitian</td>
                                                <td>Saidi, S.T., M.M. </td>
                                                <td class="text-center">2021/2022</td>
                                                <td class="text-center">20</td>
                                                <td class="text-center">13</td>
                                                <td class="text-center">19</td>
                                                <td class="text-center">22</td>
                                                <td class="text-center">2</td>
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
<?= $this->endSection(); ?>