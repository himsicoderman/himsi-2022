<?php

namespace App\Controllers;
use App\Models\EkspresiModel;

class Ekspresi extends BaseController {

    protected $ekspresiModel;

    public function __construct() {
        $this->ekspresiModel = new EkspresiModel();
    }

    public function index() {

        $data = [
            'title' => 'Ekspresi',
            'nav'   => [
                "active" => 'Ekspresi', 
                "profile-link" => $this->dinasModel->getDinas()
            ],
            'posts_sifest' => $this->ekspresiModel->like(['judul_podcast' => 'SI FEST'])->findAll(),
            'posts' => $this->ekspresiModel->notLike(['judul_podcast' => 'SI FEST'])->findAll(),
        ];

        return view('Ekspresi/index', $data);
    }

}
