<?php

namespace App\Controllers;

use App\Models\StaffsModel, ProkerDinasModel, DivisiModel;


class Staff extends BaseController
{

    protected $staffModel;

    public function __construct()
    {
        $this->staffModel = new StaffsModel();
    }

    public function index($name)
    {
        $staff = $this->staffModel->getStaffByName($name);
        $data = [
            'title' => $staff["nama"],
            'nav'   => [
                "active" => 'Staff',
                "profile-link" => $this->dinasModel->getDinas(),
            ],
            'staff' => $staff,
        ];

        return view('Staff/index', $data);
    }
}
