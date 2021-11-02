<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'bttn' => 'dashboard'
        ];
        return view('mahasiswa/dashboard', $data);
    }
    public function daftarMBKM()
    {
        $data = [
            'bttn' => 'daftar'
        ];
        return view('mahasiswa/kategori_project', $data);
    }
    public function detailKategori()
    {
        $data = [
            'bttn' => 'daftar'
        ];
        return view('mahasiswa/detail_kategori', $data);
    }
    public function riwayatPendaftaran()
    {
        $data = [
            'bttn' => 'riwayat'
        ];
        return view('mahasiswa/riwayat_pendaftaran', $data);
    }
    public function progress()
    {
        $data = [
            'bttn' => 'riwayat'
        ];
        return view('mahasiswa/progress_mahasiswa', $data);
    }
    public function logbook()
    {
        $data = [
            'bttn' => 'riwayat'
        ];
        return view('mahasiswa/logbook', $data);
    }
    public function halamanAjuan()
    {
        $data = [
            'bttn' => 'daftar'
        ];
        return view('mahasiswa/halaman_ajuan', $data);
    }
}
