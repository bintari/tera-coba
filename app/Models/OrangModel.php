<?php

namespace App\Models;

use CodeIgniter\Model;

class orangModel extends Model
{

    protected $table = 'tera';
    protected $useTimestamps = true;
    // protected $allowedFields = ['nama', 'alamat'];

    // public function search($keyword)
    // {
    //     // $builder = $this->table('orang');
    //     // $builder->like('nama', $keyboard);
    //     // return $builder;

    //     return $this->table('orang')->like('nama', $keyword)->orLike('alamat', $keyword);
    // }
}
