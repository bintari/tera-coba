<?php

namespace App\Models;

use CodeIgniter\Model;

class PengujiantankModel extends Model
{
    protected $table = 'pengujian_tank';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_pengujian_tank';
    protected $allowedFields = ['t1_muka', 't1_belakang','t2_muka', 't2_belakang', 't3_muka', 't3_belakang','t4_muka', 't4_belakang', 'T_muka','T_belakang','d_muka','d_belakang','p_muka','p_belakang','q_muka','q_belakang','s_muka','s_belakang','kepekaan_index_muka','kepekaan_index_belakang','ruang_kosong_tum_muka','ruang_kosong_tum_belakang','diameter_pipa_penyerap','panjang_pipa_penyerapan_muka','panjang_pipa_penyerapan_belakang'];
    protected $createdField  = 'tanggal_pengujian';
    protected $updatedField  = '';
}
