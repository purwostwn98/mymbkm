<?php
$session = \Config\Services::session();
?>


<!-- Menu Ketua Koordinator -->
<?php if ($session->get('privUser') == 1) { ?>
    <hr class="sidebar-divider my-0">
    <li class="nav-item <?= ($bttn == 'dashboard') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/koordinator/index">
            <i class="fa-fw far fa-address-book"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item <?= ($bttn == 'report') ? 'active' : '' ?>">
        <a class="nav-link collapsed my-1 py-1" href="#" data-toggle="collapse" data-target="#kel_ajuan" aria-expanded="true" aria-controls="kel_ajuan">
            <i class="fa-fw far fa-list-alt"></i>
            <span>Report MBKM</span>
        </a>
        <div id="kel_ajuan" class="collapse <?= ($bttn == 'report') ? 'show' : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Filter:</h6>
                <a class="collapse-item" href="/koordinator/projectCategory">Project Category</a>
                <a class="collapse-item" href="/koordinator/project">Project</a>
            </div>
        </div>
    </li>

    <li class="nav-item <?= ($bttn == 'rekap') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/koordinator/rekapPeserta">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Rekap Peserta</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link my-1 py-1" href="/koordinator/alur_bantuan">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Manual</span>
        </a>
    </li>
<?php } ?>

<!-- Menu Project Koordinator -->
<?php if ($session->get('privUser') == 2) { ?>
    <hr class="sidebar-divider my-0">
    <li class="nav-item <?= ($bttn == 'dashboard') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/picproject/index">
            <i class="fa-fw far fa-address-book"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item <?= ($bttn == 'report') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/picproject/project">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Report MBKM</span>
        </a>
    </li>
    <li class="nav-item <?= ($bttn == 'rekap') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/picproject/rekapPeserta">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Rekap Peserta</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link my-1 py-1" href="/koordinator/alur_bantuan">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Manual</span>
        </a>
    </li>
<?php } ?>

<!-- Menu Ketua Prodi -->
<?php if ($session->get('privUser') == 3) { ?>
    <hr class="sidebar-divider my-0">
    <li class="nav-item <?= ($bttn == 'dashboard') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/kaprodi/index">
            <i class="fa-fw far fa-address-book"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item <?= ($bttn == 'katProj') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/kaprodi/kategoriProject">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Project MBKM</span>
        </a>
    </li>
    <li class="nav-item <?= ($bttn == 'rekap') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/kaprodi/rekapPeserta">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Rekap Peserta</span>
        </a>
    </li>
    <li class="nav-item <?= ($bttn == 'verifikasi') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/kaprodi/verifikasi">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Verifikasi Ajuan</span>
        </a>
    </li>
    <li class="nav-item <?= ($bttn == 'konversi') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/kaprodi/listKonversi">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Konversi</span>
        </a>
    </li>
    <li class="nav-item <?= ($bttn == 'pembimbing') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/kaprodi/listPembimbing">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Tentukan Pembimbing</span>
        </a>
    </li>
<?php } ?>

<!-- Menu Pembimbing -->
<?php if ($session->get('privUser') == 4) { ?>
    <hr class="sidebar-divider my-0">
    <li class="nav-item <?= ($bttn == 'monitoring') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/pembimbing/index">
            <i class="fa-fw far fa-address-book"></i>
            <span>Monitoring dan Penilaian</span>
        </a>
    </li>
    <li class="nav-item <?= ($bttn == 'riwayat') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/pembimbing/riwayat">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Riwayat Bimbingan</span>
        </a>
    </li>
<?php } ?>

<!-- Menu Mahasiswa -->
<?php if ($session->get('privUser') == 5) { ?>
    <hr class="sidebar-divider my-0">
    <li class="nav-item <?= ($bttn == 'dashboard') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/mahasiswa/index">
            <i class="fa-fw far fa-address-book"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item <?= ($bttn == 'daftar') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/mahasiswa/daftarMBKM">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Daftar Program MBKM</span>
        </a>
    </li>
    <li class="nav-item <?= ($bttn == 'riwayat') ? 'active' : '' ?>">
        <a class="nav-link my-1 py-1" href="/mahasiswa/riwayatPendaftaran">
            <i class="fab fa-stumbleupon-circle fa-fw"></i>
            <span>Riwayat Pendaftaran</span>
        </a>
    </li>
<?php } ?>

<!-- Tombol Logout -->
<li class="nav-item">
    <a class="nav-link my-1 py-1" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-fw"></i>
        <span>Logout</span></a>
</li>

<!-- <li class="nav-item ">
    <a class="nav-link collapsed my-1 py-1" href="#" data-toggle="collapse" data-target="#kel_ajuan" aria-expanded="true" aria-controls="kel_ajuan">
        <i class="fa-fw far fa-list-alt"></i>
        <span>Rekap Peserta</span>
    </a>
    <div id="kel_ajuan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Daftar Ajuan:</h6>
            <a class="collapse-item" href="/kelurahan/dftrajuan_i">Ajuan Individu</a>
            <a class="collapse-item" href="/kelurahan/dftrajuan_l">Ajuan Lembaga</a>
        </div>
    </div>
</li> -->