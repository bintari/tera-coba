<?php

namespace App\Models;

use CodeIgniter\Model;

class PengujiModel extends Model
{

    protected $table = 'pengujian';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_pengujian';
    protected $allowedFields = ['merek', 'buatan','pemilik', 'penguji', 'tanggal_pengujian_ulang', 'no_polisi','metode', 'no_kode_plat' ];
    protected $createdField  = 'tanggal_pengujian';
    protected $updatedField  = '';
    // public function detail($tera_id)
    // {
    //     return $this->table('tera')->where(['tera_id' => $tera_id]);
    // }
}
