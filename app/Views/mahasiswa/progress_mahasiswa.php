<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Ajuan Program</h1>
</div>

<div class="card border-left-info shadow h-100">
    <div class="card-body">
        <h5 class="text-info"><i class="fas fa-exclamation-triangle"></i></span> INFORMASI TAHAPAN</h5>
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <p>
                    <span class="badge badge-warning">&nbsp;</span> menunjukkan tahapan belum dilakukan. <br>
                    <span class="badge badge-success">&nbsp;</span> menunjukkan tahapan sudah diselesaikan. <br>
                    <span class="badge badge-info">&nbsp;</span> menunjukkan tahapan informasi.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <!-- Timeline -->
            <ul class="timeline">
                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                    <div class="timeline-arrow"></div>
                    <a href="#" data-toggle="modal" data-target="#filterModal" class="h5 mb-0 text-info">Info Detail Program</a> <br>
                    <span style="border-radius: 5px;" class="small text-white bg-info p-1"><i class="fa fa-clock-o mr-1"></i>Magang Pertamini</span>
                </li>
                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                    <div class="timeline-arrow"></div>
                    <a class="h5 mb-0 text-success" href="/kelurahan/form_ajuan">Mengajukan Rekomendasi</a>
                    <!-- <span class="small text-gray"><i class="fa fa-clock-o mr-1"></i>5 April, 2019</span> -->
                    <p class="text-small mt-2 font-weight-light">Mahasiswa mengajukan Rekomendasi ke Ketua Program Studi</p>
                </li>
                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                    <div class="timeline-arrow"></div>
                    <a href="#" class="h5 mb-0 text-info">Rekomendasi Kaprodi</a><br>
                    <span style="border-radius: 5px;" class="small text-white bg-info p-1"><i class="fa fa-clock-o mr-1"></i>Belum Diverifikasi</span> atau <a href="/mahasiswa/download_rekomendasi" style="border-radius: 5px;" class="small text-white bg-primary p-1"><i class="fa fa-clock-o mr-1"></i>Download Rekomendasi</a>
                    <p class="text-small mt-2 font-weight-light">Mohon tunggu verifikasi data dan hasil rekomendasi dari Kaprodi.
                        Apabila sudah diverifikasi maka akan muncul tombol download rekomendasi
                    </p>
                </li>
                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                    <div class="timeline-arrow"></div>
                    <a class="h5 mb-0 text-warning">Upload LOA</a><br>
                    <span style="border-radius: 5px;" class="small text-white bg-info p-1">Jika mahasiswa tidak upload LoA setelah 3 (tiga) bulan maka dianggap ditolak mitra</span>
                    <br><br>
                    <a href="#" target="_blank" style="font-size: 12px;" class="btn-small btn btn-primary" data-toggle="modal" data-target="#filterLOA">Unggah</a>
                    <a href="#" target="_blank" style="font-size: 12px;" class="btn-small btn btn-danger">Ditolak Mitra</a>
                </li>
                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                    <div class="timeline-arrow"></div>
                    <a href="#" class="h5 mb-0 text-info">Verifikasi LOA</a><br>
                    <span style="border-radius: 5px;" class="small text-white bg-info p-1"><i class="fa fa-clock-o mr-1"></i>Belum Diverifikasi</span>
                    <p class="text-small mt-2 font-weight-light">Mohon tunggu verifikasi dari Kaprodi. Apabila sudah diverifikasi akan muncul konversi dan dosen pembimbing. <br><br>
                        <b>Konversi:</b><br>
                        Magang I (3 SKS) <br>
                        Magang II (3 SKS) <br>
                        <b>Donsen Pembimbing:</b> <br>
                        Ir. Setia, Ph.D
                    </p>
                </li>
                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                    <div class="timeline-arrow"></div>
                    <a class="h5 mb-0 text-warning">Kegiatan MBKM</a><br>
                    <p class="text-small mt-2 font-weight-light">Selama program berjalan peserta dapat mengisi log book melalu tombol di bawah ini.</p>
                    <a href="/mahasiswa/logbook" target="_blank" style="font-size: 12px;" class="btn-small btn btn-warning">Log Book</a>
                </li>
                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                    <div class="timeline-arrow"></div>
                    <a class="h5 mb-0 text-warning">Unggah Nilai Mitra atau Sertifikat</a><br>
                    <form>
                        <div class="form-group text-small mt-2 font-weight-light">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                    <a href="#" target="_blank" style="font-size: 12px;" class="btn-small btn btn-warning">Unggah</a>

                </li>
                <li class="timeline-item bg-white rounded ml-3 p-4 shadow">
                    <div class="timeline-arrow"></div>
                    <a class="h5 mb-0 text-info">Selesai</a><br>
                    <p class="text-small mt-2 font-weight-light">Nilai dari Pembimbing
                        <br>
                        <br>
                        Magang I &nbsp;&nbsp; 3 SKS &nbsp;&nbsp; A <br>
                        Magang II &nbsp;&nbsp; 3 SKS &nbsp;&nbsp; A
                    </p>
                </li>
            </ul><!-- End -->
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white" id="filterModalLabel"><strong>Detail Program</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formFilter" action="#">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="row bg-white darker">
                        <div class="col-md-4">
                            <label for="">
                                <b>Nama Project</b>
                            </label>
                        </div>
                        <div class="col-md-8">
                            Magang Pertamini
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="#" role="button" class="btn btn-success">Submit</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="filterLOA" tabindex="-1" role="dialog" aria-labelledby="filterLOALabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white" id="filterModalLabel"><strong>Unggah LOA</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="formFilter" action="#">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputAddress">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="inputAddress" name="tgAwal" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="inputAddress2" name="tgAkhir" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Upload LoA</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">LoA</label>
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