<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Peserta</h1>
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
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 30px;">Nama Peserta</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">NIM</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Nama Project</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Kategori Proj.</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending" style="width: 45px;">Pembimbing</th>
                                                <th aria-controls="dataTable" rowspan="1" colspan="1" style="width: 10px;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 text-center">1</td>
                                                <td>Udin</td>
                                                <td>D600160125</td>
                                                <td class="text-center">Magang Kementrian BUMN</td>
                                                <td class="text-center">MBKM Magang</td>
                                                <td class="text-center">
                                                    <span style="border-radius: 5px; font-size: 11px" class="bg-primary p-2 text-white">ongoing</span>
                                                </td>
                                                <td class="text-center">Mr. Setia</td>
                                                <td class="text-center">
                                                    <a href="/koordinator/detailPeserta" style="font-size: 12px;" class=" btn-small btn btn-info">Detail</a>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 text-center">2</td>
                                                <td>Oyonk</td>
                                                <td>D600167880</td>
                                                <td class="text-center">Pertukaran Pelajar University of Oxford</td>
                                                <td class="text-center">MBKM Pertukaran Pelajar</td>
                                                <td class="text-center">
                                                    <span style="border-radius: 5px; font-size: 11px" class="bg-gray-600 p-2 text-white">pengajuan</span>
                                                </td>
                                                <td class="text-center">-</td>
                                                <td class="text-center">
                                                    <a href="/koordinator/detailPeserta" style="font-size: 12px;" class=" btn-small btn btn-info">Detail</a>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 text-center">3</td>
                                                <td>Bayu</td>
                                                <td>D600180500</td>
                                                <td class="text-center">KKN Desa Sumberejo</td>
                                                <td class="text-center">MBKM KKN Tematik</td>
                                                <td class="text-center">
                                                    <span style="border-radius: 5px; font-size: 11px" class="bg-success p-2 text-white">lulus</span>
                                                </td>
                                                <td class="text-center">Mr. Budy</td>
                                                <td class="text-center">
                                                    <a href="/koordinator/detailPeserta" style="font-size: 12px;" class=" btn-small btn btn-info">Detail</a>
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