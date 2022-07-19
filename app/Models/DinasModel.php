<?php

namespace App\Models;

use CodeIgniter\Model;

class DinasModel extends Model {
    
    protected $table      = 'dinas';
    protected $primaryKey = 'dinasID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    public function getDinas($id = NULL) {
        if ($id == NULL) {
            return $this->findAll();
        }

        return $this->where(['dinasID' => $id])->first();
    }    

}