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

        $pdf->AddPage();
        $pdf->SetLeftMargin(20);
        $pdf->Image($_SERVER["DOCUMENT_ROOT"] . '/img/' . 'logo_ums.png', 20, 9, 23);

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
        $pdf->Cell(190, 7, 'Jl. A Yani Tromol Pos 1 Pabelan Kartasura telp. (0271)717417 - 719483 Surakarta 57102', 0, 0, 'C');
        // Line break
        $pdf->Ln(12);
        $pdf->Line(10, 33, 200, 33);
        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(25, 6, 'Nomor', 0, 0, 'L');
        $pdf->Cell(2, 6, ':', 0, 0, 'L');
        $pdf->Cell(50, 6, '10.23/XXX/nomor???', 0, 0, 'L');
        $pdf->Cell(100, 6, 'Surakarta, 19 Januari 2022', 0, 0, 'R');
        $pdf->Ln();
        $pdf->Cell(25, 6, 'Lampiran', 0, 0, 'L');
        $pdf->Cell(2, 6, ':', 0, 0, 'L');
        $pdf->Cell(50, 6, '-', 0, 0, 'L');
        $pdf->Ln();
        $pdf->Cell(25, 6, 'Perihal', 0, 0, 'L');
        $pdf->Cell(2, 6, ':', 0, 0, 'L');
        $pdf->Cell(50, 6, 'Permohonan Magang', 0, 0, 'L');
        $pdf->Ln(10);
        $pdf->Cell(25, 6, 'Kepada Yth.', 0, 0, 'L');
        $pdf->Ln();
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(190, 6, 'Pimpinan PT. Saya Bahagia Selalu');
        $pdf->Ln();
        $pdf->SetFont('Arial', '', 11);
        $pdf->Cell(190, 6, 'Di tempat');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'i', 11);
        $pdf->Cell(100, 6, "Assalamu'alaikum warahmatullaahi wabarakaatuh", 0, 0, 'L');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 11);

        $txt1 = "Teriring doa semoga Allah SWT selalu melindungi setiap langkah kita, serta semoga shalawat serta salam senantiasa tercurahkan kepada Muhammad SAW. Aamiin";
        $txt2 = "Program Studi Teknik Industri Fakultas Teknik UMS sangat mendukung pelaksanaan Merdeka Belajar Kampus Merdeka (MBKM) Kementrian Pendidikan dan Kebudayaan, Riset, dan Teknologi Republik Indonesia. Berkenaan dengan hal tersebut, perkenankalah kami memohon ijin bagi mahasiswa kami untuk melaksanakan magang/kerja praktek di perusahaan yang Bapak/Ibu. Berikut nama mahasiswa yang kami maksud: ";
        $txt3 = "Demikian kami mohonkan kepada Bapak/Ibu. Atas perhatian dan kerjasamanya, kami ucapkan banyak terimakasih.";
        $pdf->MultiCell(175, 6, $txt1, 0, 'J');
        $pdf->Ln(5);
        $pdf->MultiCell(175, 6, $txt2, 0, 'J');
        $pdf->Ln(2);
        $pdf->Cell(10, 6);
        $pdf->Cell(20, 6, 'Nama', 0, 0, 'L');
        $pdf->Cell(2, 6, ':', 0, 0, 'L');
        $pdf->Cell(100, 6, 'Purwo Setiawan', 0, 0, 'L');
        $pdf->Ln();
        $pdf->Cell(10, 6);
        $pdf->Cell(20, 6, 'NIM', 0, 0, 'L');
        $pdf->Cell(2, 6, ':', 0, 0, 'L');
        $pdf->Cell(100, 6, 'D600160125', 0, 0, 'L');
        $pdf->Ln(10);
        $pdf->MultiCell(175, 6, $txt3, 0, 'J');
        $pdf->Ln(5);
        $pdf->SetFont('Arial', 'i', 11);
        $pdf->Cell(100, 6, "Wassalamu'alaikum warahmatullaahi wabarakaatuh", 0, 0, 'L');

        //tanda tangan
        $pdf->SetFont('Arial', '', 11);
        $pdf->Ln(10);
        $pdf->Cell(100, 6);
        $pdf->Cell(90, 6, "Ketua Program Studi", 0, 0, 'C');
        $pdf->Ln();
        $pdf->Cell(100, 6);
        $pdf->Cell(90, 6, "Teknik Industri", 0, 0, 'C');
        $pdf->Ln(30);
        $pdf->Cell(100, 6);
        $pdf->Cell(90, 6, "Dr. Purwo Setiawan", 0, 0, 'C');


        // ob_end_flush();

        $pdf->Output("D", 'filename.pdf');
    }
}
