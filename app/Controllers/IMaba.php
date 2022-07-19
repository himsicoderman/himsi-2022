<?php

namespace App\Controllers;

class IMaba extends BaseController {

    public function index() {

        $data = [
            'title' => 'IMaba',
            'nav'   => [
                "active" => 'IMaba', 
                "profile-link" => $this->dinasModel->getDinas()
            ],
        ];
        
        return view('IMaba/index', $data);
    }

}
