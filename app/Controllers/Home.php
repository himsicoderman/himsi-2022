<?php

namespace App\Controllers;
use App\Models\{ContactUsModel, PojokHimsiModel};

class Home extends BaseController {

    protected $contacUsModel, $pojokHimsiModel;

    public function __construct() {
        $this->contacUsModel = new ContactUsModel();
        $this->pojokHimsiModel = new PojokHimsiModel();
    }

    public function index() {

        $data = [
            'title' => 'Home',
            'nav'   => [
                "active" => 'Home', 
                "profile-link" => $this->dinasModel->getDinas()
            ],
            'posts' => $this->pojokHimsiModel->findAll()
        ];

        // dd($data["posts"]);
        
        return view('Home/index', $data);
    }

    public function contactUs() {
        
        // validation input
        if (!$this->validate([
            'email' => [
                'rules' => "required",
                'errors' => [
                    'required' => '{field} title harus diisi',
                ]
            ],
            'message' => 'required',
        ])) {
            return redirect()->to('/home/contactUs')->withInput();
        }

        $this->contacUsModel->save([
            'subject' => $this->request->getVar('subject'),
            'email' => $this->request->getVar('email'),
            'message' => $this->request->getVar('message')
        ]);

        session()->setFlashdata('pesan', 'Pesan telah terkirim. Terima Kasih atas feedback dan pesannya.');

        return redirect()->to('/#contact');
    }

}
