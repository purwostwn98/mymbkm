<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800">List Peserta <br>
        <span style="border-radius: 5px; font-size: 11px" class="bg-info px-2 text-white">Berisi list peserta yang sudah dikonversi dan peserta on going</span>
    </h1>
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
                                                <td>Deka</td>
                                                <td>D100170888</td>
                                                <td class="text-center">Magang Perusahaan X</td>
                                                <td class="text-center">MBKM Magang</td>
                                                <td class="text-center">
                                                    <span style="border-radius: 5px; font-size: 11px" class="bg-info px-2 text-white">diterima</span>
                                                </td>
                                                <td class="text-center">
                                                    <span style="border-radius: 5px; font-size: 11px" class="bg-warning px-2 text-white">belum</span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/kaprodi/formPembimbing" style="font-size: 12px;" class=" btn-small btn btn-primary">Pilih Pembimbing</a>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 text-center">2</td>
                                                <td>Kurniasetia</td>
                                                <td>D600167880</td>
                                                <td class="text-center">Pertukaran Pelajar University of Oxford</td>
                                                <td class="text-center">MBKM Pertukaran Pelajar</td>
                                                <td class="text-center">
                                                    <span style="border-radius: 5px; font-size: 11px" class="bg-info px-2 text-white">diterima</span>
                                                </td>
                                                <td class="text-center">
                                                    <span style="border-radius: 5px; font-size: 11px" class="bg-warning px-2 text-white">belum</span>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/kaprodi/formPembimbing" style="font-size: 12px;" class=" btn-small btn btn-primary">Pilih Pembimbing</a>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1 text-center">3</td>
                                                <td>Budi</td>
                                                <td>D600180500</td>
                                                <td class="text-center">KKN Desa Sumberejo</td>
                                                <td class="text-center">MBKM KKN Tematik</td>
                                                <td class="text-center">
                                                    <span style="border-radius: 5px; font-size: 11px" class="bg-danger px-2 text-white">ongoing</span>
                                                </td>
                                                <td class="text-center">
                                                    Ir. Setiadi, Ph.D
                                                </td>
                                                <td class="text-center">
                                                    <a href="/kaprodi/formPembimbing" style="font-size: 12px;" class=" btn-small btn btn-primary">Pilih Pembimbing</a>
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