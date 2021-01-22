<?php

namespace App\Models;

use CodeIgniter\Model;

class teraModel extends Model
{

    protected $table = 'tera';
    protected $useTimestamps = true;
    protected $primaryKey = 'tera_id';
    protected $allowedFields = ['tera_atas_nama'];
    protected $createdField  = 'tera_created';
    protected $updatedField  = '';
    public function detail($tera_id)
    {
        return $this->table('tera')->where(['tera_id' => $tera_id]);
    }
}
