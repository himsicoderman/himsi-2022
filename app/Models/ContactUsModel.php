<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactUsModel extends Model {
    
    protected $table      = 'messages';
    protected $primaryKey = 'messageID';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['subject', 'email', 'message'];

}