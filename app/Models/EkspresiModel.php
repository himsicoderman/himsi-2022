<?php

namespace App\Models;

use CodeIgniter\Model;

class EkspresiModel extends Model {
    
    protected $table      = 'ekspresi';
    protected $primaryKey = 'postID';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';

}