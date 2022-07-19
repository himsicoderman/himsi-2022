<?php

namespace App\Controllers;
use App\Models\AkademikModel;

class Akademik extends BaseController {

    protected $akademikModel;

    public function __construct() {
        $this->akademikModel = new AkademikModel();
    }

    public function index() {
        $data = [
            'title' => 'Akademik',
            'nav'   => [
                "active" => 'Akademik', 
                "profile-link" => $this->dinasModel->getDinas(),
                "is_aka" => false
            ],
            'posts' => $this->akademikModel->orderBy('published', 'desc')->findAll(),
        ];

        return view('Akademik/index', $data);
    }

    public function beasiswa() {
        $data = [
            'title' => 'Beasiswa',
            'nav'   => [
                "active" => 'Akademik', 
                "profile-link" => $this->dinasModel->getDinas(),
                "is_aka" => false
            ],
            'posts' => $this->akademikModel->where(['category' => 'beasiswa'])->orderBy('published', 'desc')->findAll(),
        ];

        return view('Akademik/akademik', $data);
    }

    public function lomba() {
        $data = [
            'title' => 'Lomba',
            'nav'   => [
                "active" => 'Akademik', 
                "profile-link" => $this->dinasModel->getDinas(),
                "is_aka" => false
            ],
            'posts' => $this->akademikModel->where(['category' => 'lomba'])->orderBy('published', 'desc')->findAll(),
        ];

        return view('Akademik/akademik', $data);
    }

    public function webinar() {
        $data = [
            'title' => 'Webinar',
            'nav'   => [
                "active" => 'Akademik', 
                "profile-link" => $this->dinasModel->getDinas(),
                "is_aka" => false
            ],
            'posts' => $this->akademikModel->where(['category' => 'webinar'])->orderBy('published', 'desc')->findAll(),
        ];

        return view('Akademik/akademik', $data);
    }

    public function volunteer() {}

    public function selfPage($slug) {

        $post = $this->akademikModel->where(['slug' => $slug])->first();

        $data = [
            'title' => $post["title"],
            'nav'   => [
                "active" => 'Akademik', 
                "profile-link" => $this->dinasModel->getDinas(),
                "is_aka" => true
            ],
            'post' => $post,
            'newest' => $this->akademikModel->where(['category' => $post["category"]])->orderBy('published', 'desc')->findAll(5, 0)
        ];

        return view('Akademik/self-page', $data);
    }

}
