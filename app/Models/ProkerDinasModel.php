<?php

namespace App\Models;

use CodeIgniter\Model;

class ProkerDinasModel extends Model {
    
    protected $table      = 'proker_dinas';
    protected $primaryKey = 'prokerID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    public function getProker($dinasID) {
        return $this->where(['dinasID' => $dinasID])->findAll();
    }  

}