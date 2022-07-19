<?php

namespace App\Models;

use CodeIgniter\Model;

class PojokHimsiModel extends Model {
    
    protected $table      = 'pojok_himsi';
    protected $primaryKey = 'postID';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['title', 'slug', 'author', 'content', 'thumbnail', 'updated', 'triggers'];

}