<?php

namespace App\Models;

use CodeIgniter\Model;

class ProkerHimsiModel extends Model {
    
    protected $table      = 'proker_himsi';
    protected $primaryKey = 'prokerID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    public function getProker() {
        return $this->findAll();
    }    

}