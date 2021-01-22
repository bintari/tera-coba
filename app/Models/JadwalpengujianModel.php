<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalpengujianModel extends Model
{
    protected $table = 'jadwal_pengujian';
    protected $useTimestamps = true;
    protected $primaryKey = 'jadwal_pengujian_id';
    protected $allowedFields = ['jadwal_pengujian_tera_id', 'jadwal_pengujian_tanggal'];
    protected $createdField  = 'jadwal_pengujian_created';
    protected $updatedField  = '';
}
