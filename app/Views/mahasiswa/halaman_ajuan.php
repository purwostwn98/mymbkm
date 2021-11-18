<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Heading -->
<div class="row d-sm-flex align-items-center justify-content-between mb-4">
    <div class="col-auto">
        <h1 class="h3 mb-0 text-gray-800">Ajuan Program</h1>
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
                Udin
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
                6
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
                2021.2
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

<!-- Pernyataan -->
<div class="row">
    <div class="col-sm-1"> </div>
    <div class="checkbox mx-3">
        <label for="persetujuan"><input type="checkbox" name="persetujuan" id="persetujuan" required="">
            Pernyataan Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, repellat laudantium! Velit qui doloribus saepe voluptatibus fuga facere tenetur repellendus laboriosam, ullam, id, alias non suscipit nemo iste iure officia.</label>
    </div>
</div>
<div class="row mb-3">
    <div class="col-sm-4"> </div>
    <a href="/mahasiswa/progress" class="btn btn-success btn-md btn-icon-split btnAjukan"><span class="icon text-white-50"> <i class="fas fa-check"></i></span><span class="text">Ajukan</span></a>&nbsp;&nbsp;
    <button class="btn btn-danger btn-md btn-icon-split" onclick="del(this.value)"><span class="icon text-white-50"> <i class="fas fa-trash"></i></span><span class="text">Batal</span></button>
</div>
<?= $this->endSection(); ?>