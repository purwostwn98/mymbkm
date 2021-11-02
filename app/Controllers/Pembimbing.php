<?php

namespace App\Controllers;

class Pembimbing extends BaseController
{
    public function index()
    {
        $data = [
            'bttn' => 'monitoring'
        ];
        return view('pembimbing/monitoring', $data);
    }
    public function riwayat()
    {
        $data = [
            'bttn' => 'riwayat'
        ];
        return view('pembimbing/riwayat_bimbingan', $data);
    }
    public function detailMonitoring()
    {
        $data = [
            'bttn' => 'monitoring'
        ];
        return view('pembimbing/detail_monitoring', $data);
    }
    public function detailRiwayat()
    {
        $data = [
            'bttn' => 'monitoring'
        ];
        return view('pembimbing/detail_riwayat', $data);
    }
}
