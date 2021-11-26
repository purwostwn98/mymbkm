<?php

namespace App\Controllers;

use FPDF;

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

    public function download_rekomendasi()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        // $pdf->SetFont('Arial', 'B', 16);
        // $pdf->Cell(40, 10, 'Hello World !', 1);
        // $pdf->Cell(60, 10, 'Powered by FPDF.', 0, 1, 'C');
        // $pdf->Output();

        $pdf->AddPage();
        // $pdf->Image($_SERVER["DOCUMENT_ROOT"] . '/img/' . 'logo_ums.png', 10, 6, 20);
        // Arial bold 15
        $pdf->SetFont('Arial', 'B', 14);
        // Move to the right
        // $pdf->Cell(80);
        // Title
        $pdf->Cell(190, 5, 'UNIVERSITAS MUHAMMADIYAH SURAKARTA', 0, 0, 'C');
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 13);
        $pdf->Cell(190, 5, 'FAKULTAS TEKNIK', 0, 0, 'C');
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 13);
        $pdf->Cell(190, 5, 'PROGRAM STUDI TEKNIK INDUSTRI', 0, 0, 'C');
        $pdf->Ln();
        $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(190, 7, 'Jl. A Yani Tromol Pos 1 Pabelan Kartasura telp. (0271)717417 - 719483 Fax (0271)714448 Surakarta 57102', 0, 0, 'C');
        // Line break
        $pdf->Ln(20);
        $pdf->Line(10, 33, 190, 33);
        $pdf->Output("D", 'filename.pdf');
        // ob_end_flush();
    }
}
