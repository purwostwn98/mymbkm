<?php

namespace App\Controllers;

class Kaprodi extends BaseController
{
    public function index()
    {
        $data = [
            'bttn' => 'dashboard'
        ];
        return view('kaprodi/dashboard', $data);
    }

    public function kategoriProject()
    {
        $data = [
            'bttn' => 'katProj'
        ];
        return view('kaprodi/kategori_project', $data);
    }

    public function detailCategory()
    {
        $data = [
            'bttn' => 'katProj'
        ];
        return view('kaprodi/detail_kategori', $data);
    }

    public function rekapPeserta()
    {
        $data = [
            'bttn' => 'rekap'
        ];
        return view('kaprodi/rekap_peserta', $data);
    }

    public function verifikasi()
    {
        $data = [
            'bttn' => 'verifikasi'
        ];
        return view('kaprodi/verifikasi', $data);
    }

    public function approve()
    {
        $data = [
            'bttn' => 'verifikasi'
        ];
        return view('kaprodi/approve', $data);
    }

    public function listKonversi()
    {
        $data = [
            'bttn' => 'konversi'
        ];
        return view('kaprodi/list_konversi', $data);
    }

    public function formKonversi()
    {
        $data = [
            'bttn' => 'konversi'
        ];
        return view('kaprodi/form_konversi', $data);
    }

    public function listPembimbing()
    {
        $data = [
            'bttn' => 'pembimbing'
        ];
        return view('kaprodi/list_pembimbing', $data);
    }

    public function formPembimbing()
    {
        $data = [
            'bttn' => 'pembimbing'
        ];
        return view('kaprodi/form_pembimbing', $data);
    }

    public function logbook()
    {
        $data = [
            'bttn' => 'rekap'
        ];
        return view('kaprodi/logbook', $data);
    }
}
