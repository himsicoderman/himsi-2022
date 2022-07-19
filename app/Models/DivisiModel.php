<?php

namespace App\Models;

use CodeIgniter\Model;

class DivisiModel extends Model {
    
    protected $table      = 'divisi';
    protected $primaryKey = 'divisiID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    public function getDivisi($id) {
        return $this->where(['dinasID' => $id])->findAll();
    }    

}