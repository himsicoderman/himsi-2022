<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffsModel extends Model {
    
    protected $table      = 'staffs';
    protected $primaryKey = 'staffID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $allowedFields = ['nama', 'dinas', 'TTL', 'jabatan', 'alamat', 'angkatan', 'hobi', 'instagram', 'email', 'kesan_pesan', 'picture'];

    public function getStaffByID($id) {
        return $this->where(['staffID' => $id])->first();
    }

    public function getStaffByName($name) {
        return $this->where(['nama' => $name])->first();
    }

    public function getStaff($dinas = "", $jabatan = "") {
        if ($jabatan == NULL) {
            return $this->findAll();
        } else if ( $jabatan == "Staff" ) {
            return $this->where(['jabatan' => $jabatan, 'dinas' => $dinas ])->findAll();
        }

        return $this->like(['jabatan' => $jabatan, 'dinas' => $dinas])->findAll();
    }    

}