<?php

namespace App\Models;

use CodeIgniter\Model;

class retribusiModel extends Model
{

    protected $table = 'retribusi';
    protected $useTimestamps = true;
    protected $allowedFields = ['nomilal', 'tera_id','no_rekening','bank'];
    protected $primaryKey = 'retribusi_id';
    protected $createdField  = 'user_created';
    protected $updatedField  = '';
}
