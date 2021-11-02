<?= $this->extend("/layout/template.php"); ?>
<?= $this->section("konten"); ?>

<!-- Page Heading -->
<div class="row">
    <div class="col-12">
        <img src="<?= base_url(); ?>/img/alur_mbkm.png" alt="">
    </div>
</div>

<div class="row d-sm-flex align-items-center justify-content-between mb-4">
    <div class="col-auto">
        <h1 style="border-radius: 5px;" class="h3 mb-0 px-3 bg-info text-white">Berita/Pengumuman MBKM</h1>
    </div>
</div>

<!-- Alur Pendaftaran -->
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p class="mb-0"><b>Magang Perusahaan OPQ</b></p>
                        <p class="mt-0">Bagi mahasiswa yang ingin mendaftar magang di perusahaan X, mohon segera melengkapi dokumen paling lambat tanggal
                            1 Desember 2021.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="mb-0"><b>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</b></p>
                        <p class="mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium libero nulla repudiandae accusantium molestias aut quibusdam ut, quis laboriosam asperiores magni ea fugiat dicta saepe. Mollitia libero ut labore ratione.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>