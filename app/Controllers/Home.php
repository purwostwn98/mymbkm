<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->session->destroy();

        return view('welcome_message');
    }

    public function role()
    {
        if ($this->request->getVar('role') == 'ketua_koordinator') {
            $dapat_session = [
                'login' => true,
                'namauser' => 'Nama (Ketua Koordinator)',
                'privUser' => 1,
            ];
            $this->session->set($dapat_session);
            return redirect()->to('/koordinator/index');
        }
        if ($this->request->getVar('role') == 'pic_project') {
            $dapat_session = [
                'login' => true,
                'namauser' => 'Nama (Project Coordinator)',
                'privUser' => 2,
            ];
            $this->session->set($dapat_session);
            return redirect()->to('/picproject/index');
        }
        if ($this->request->getVar('role') == 'kaprodi') {
            $dapat_session = [
                'login' => true,
                'namauser' => 'Nama (Ketua Prodi)',
                'privUser' => 3,
            ];
            $this->session->set($dapat_session);
            return redirect()->to('/kaprodi/index');
        }

        if ($this->request->getVar('role') == 'pembimbing') {
            $dapat_session = [
                'login' => true,
                'namauser' => 'Nama (Pembimbing)',
                'privUser' => 4,
            ];
            $this->session->set($dapat_session);
            return redirect()->to('/pembimbing/index');
        }
        if ($this->request->getVar('role') == 'mahasiswa') {
            $dapat_session = [
                'login' => true,
                'namauser' => 'Nama (Mahasiswa)',
                'privUser' => 5,
            ];
            $this->session->set($dapat_session);
            return redirect()->to('/mahasiswa/index');
        }
        // return view('welcome_message');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/home/index');
    }
}
