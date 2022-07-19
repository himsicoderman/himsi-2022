<?php

namespace App\Controllers;
use App\Models\PojokHimsiModel;

class Pojok_Himsi extends BaseController {

    protected $pojokHimsiModel;

    public function __construct() {
        $this->pojokHimsiModel = new PojokHimsiModel();
    }

    public function index() {

        $data = [
            'title' => 'Pojok HIMSI',
            'nav'   => [
                "active" => 'Pojok HIMSI', 
                "profile-link" => $this->dinasModel->getDinas()
            ],
            'latest' => $this->pojokHimsiModel->like(['title' => 'Sharing Session'])->first(1),
            'posts' => $this->pojokHimsiModel->orderBy("published", 'desc')->findAll(),
            'recent' => $this->pojokHimsiModel->orderBy("published", 'desc')->first()
        ];

        return view('Pojok-Himsi/index', $data);
    }

    public function selfPage($slug) {
        $post = $this->pojokHimsiModel->where(['slug' => $slug])->first();

        $data = [
            'title' => $post["title"],
            'nav'   => [
                "active" => 'Pojok HIMSI', 
                "profile-link" => $this->dinasModel->getDinas()
            ],
            'post' => $post
        ];

        return view('Pojok-Himsi/self-page', $data);
    }

}
