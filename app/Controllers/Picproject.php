<?php

namespace App\Controllers;

class Picproject extends BaseController
{
    public function index()
    {
        $data = [
            'bttn' => 'dashboard'
        ];
        return view('pic_project/dashboard', $data);
    }

    public function project()
    {
        $data = [
            'bttn' => 'report'
        ];
        return view('pic_project/report_mbkm', $data);
    }

    public function rekapPeserta()
    {
        $data = [
            'bttn' => 'rekap'
        ];
        return view('pic_project/rekap_peserta', $data);
    }
}
