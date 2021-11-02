<?php

namespace App\Controllers;

class Koordinator extends BaseController
{
    public function index()
    {
        $data = [
            'bttn' => 'dashboard'
        ];
        return view('ketua_koordinator/dashboard', $data);
    }

    public function projectCategory()
    {
        $data = [
            'bttn' => 'report'
        ];
        return view('ketua_koordinator/project_cat', $data);
    }

    public function project()
    {
        $data = [
            'bttn' => 'report'
        ];
        return view('ketua_koordinator/project', $data);
    }

    public function rekapPeserta()
    {
        $data = [
            'bttn' => 'rekap'
        ];
        return view('ketua_koordinator/rekap_peserta', $data);
    }

    public function detailPeserta()
    {
        $data = [
            'bttn' => 'rekap'
        ];
        return view('ketua_koordinator/detail_peserta', $data);
    }
}
