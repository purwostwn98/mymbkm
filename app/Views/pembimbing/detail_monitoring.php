<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Heading -->
<div class="row d-sm-flex align-items-center justify-content-between mb-4">
    <div class="col-auto">
        <h1 class="h3 mb-0 text-gray-800">Detail Ajuan</h1>
    </div>
    <div class="col-auto mt-4">
        <p>Status:
            <span style="border-radius: 5px;" class="bg-primary px-2 text-white">On Going</span>
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
                Dimas Anggara
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
                D600160125
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
                Teknik Industri/TEKNIK
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
                7
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    Pembimbing
                </label>
            </div>
            <div class="col-md-8">
                Mrs. Dewi Sinta, Ph.D
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
</div>


<!-- Status -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-info py-3">
        <h6 class="m-0 font-weight-bold text-white">Status</h6>
    </div>

    <div class="card-body">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Status</b>
                </label>
            </div>
            <div class="col-md-8">
                On Going
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Log Book</b>
                </label>
            </div>
            <div class="col-md-8">
                <a href="/kaprodi/logBook" style="border-radius: 5px;" class="bg-primary px-2 text-white">Lihat Log Book (muncul ketika status ongoing/lulus)</a>
            </div>
        </div>
        <hr class="m-0 p-1">
        <div class="row bg-white darker">
            <div class="col-md-4">
                <label for="">
                    <b>Nilai Mitra</b>
                </label>
            </div>
            <div class="col-md-8">
                <a href="<?= base_url(); ?>/document/format_penilaian.pdf" target="_blank" style="border-radius: 5px;" class="bg-primary px-2 text-white">Download Nilai (muncul ketika mahasiwa sudah upload nilai)</a>
            </div>
        </div>
    </div>
</div>

<!-- Konversi -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-info py-3">
        <h6 class="m-0 font-weight-bold text-white">Mata Kuliah Konversi</h6>
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
<!-- Status -->
<div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between bg-success py-3">
        <h6 class="m-0 font-weight-bold text-white">Form Penilaian</h6>
        <a href="<?= base_url(); ?>/document/template_nilai.xlsx" target="_blank" style="font-size: 12px;" class="btn-small btn btn-warning">Download Template</a>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Nilai</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>
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
            <span class="text">Submit</span>
        </a>
        <a onclick="history.go(-1)" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Finalisasi</span>
        </a>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <p style="border-radius: 5px; font-size: 14px" class="bg-info px-2 text-white">Submit hanya digunakan untuk menyimpan nilai (masih bisa diedit) | Finalisasi menyimpan sekaligus merubah status menjadi lulus</p>
    </div>
</div>

<script type="text/javascript" src="<?= base_url(); ?>/js/angkaRibuan.js"></script>

<script type="text/javascript" src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min2.js"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->


<?= $this->endSection(); ?>