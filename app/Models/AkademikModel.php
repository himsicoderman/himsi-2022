<?php

namespace App\Models;

use CodeIgniter\Model;

class AkademikModel extends Model {
    
    protected $table      = 'akademik';
    protected $primaryKey = 'postID';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['title', 'slug', 'category', 'author', 'content', 'thumbnail', 'updated', 'triggers'];

}