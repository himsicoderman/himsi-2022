<?php

namespace App\Controllers;
use App\Models\ProkerHimsiModel;

class About extends BaseController {

    protected $prokerHimsiModel;

    public function __construct() {
        $this->prokerHimsiModel = new ProkerHimsiModel();
    }

    public function index() {

        $data = [
            'title' => 'Home | HIMSI FASILKOM UNSRI',
            "profile-link" => $this->dinasModel->getDinas()
        ];

        return view('Pages/home', $data);
    }

    public function logo() {

        $data = [
            'title' => 'Logo',
            'nav'   => [
                "active" => 'About Us', 
                "profile-link" => $this->dinasModel->getDinas()
            ],
        ];

        return view('About/logo', $data);
    }

    public function visi_misi() {

        $data = [
            'title' => 'Visi Misi',
            'nav'   => [
                "active" => 'About Us', 
                "profile-link" => $this->dinasModel->getDinas()
            ],
        ];

        return view('About/visi-misi', $data);
    }

    public function proker() {

        $data = [
            'title' => 'Proker',
            'nav'   => [
                "active" => 'About Us', 
                "profile-link" => $this->dinasModel->getDinas()
            ],
            'prokers' => $this->prokerHimsiModel->getProker(),
        ];

        return view('About/proker', $data);
    }

    public function struktur_organisasi() {

        $data = [
            'title' => 'Struktur Organisasi',
            'nav'   => [
                "active" => 'About Us', 
                "profile-link" => $this->dinasModel->getDinas()
            ],
        ];

        return view('About/struktur-organisasi', $data);
    }

}
