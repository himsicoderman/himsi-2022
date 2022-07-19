<?php

namespace App\Controllers;

use App\Models\{StaffsModel, ProkerDinasModel, DivisiModel};


class Profile extends BaseController
{

    protected $staffModel, $prokerDinasModel, $divisiModel;

    public function __construct()
    {
        $this->staffModel = new StaffsModel();
        $this->prokerDinasModel = new ProkerDinasModel();
        $this->divisiModel = new DivisiModel();
    }

    public function index($dinasID, $dinas) {
        if($dinas === "INTI") {
            $data = [
                'title' => $dinas,
                'nav'   => [
                    "active" => 'Profile',
                    "profile-link" => $this->dinasModel->getDinas()
                ],
                'dinas'      => $this->dinasModel->getDinas($dinasID),
                'bupati'     => $this->staffModel->getStaff($dinas, "Bupati"),
                'sekretaris' => $this->staffModel->getStaff($dinas, "Sekretaris"),
                'bendahara'  => $this->staffModel->getStaff($dinas, 'Bendahara'),
            ];
        } else {
            $data = [
                'title' => $dinas,
                'nav'   => [
                    "active" => 'Profile',
                    "profile-link" => $this->dinasModel->getDinas()
                ],
                'dinas'      => $this->dinasModel->getDinas($dinasID),
                'kadin'      => $this->staffModel->getStaff($dinas, "Kepala Dinas")[0],
                'deputi'     => $this->staffModel->getStaff($dinas, "Deputi")[0],
                'kadiv'      => $this->staffModel->getStaff($dinas, "Kepala Divisi"),
                'staffKhusus' => $this->staffModel->getStaff('KASTRAD', "Staff Khusus")[0],
                'staffs'     => $this->staffModel->getStaff($dinas, "Staff"),
                'prokerDinas' => $this->prokerDinasModel->getProker($dinasID),
                'divisi'     => $this->divisiModel->getDivisi($dinasID)
            ];
        }

        return view('Profile/index', $data);
    }
}
