<?php

namespace App\Models;

use CodeIgniter\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name','birth', 'email', 'phone', 'status'
    ];
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
}