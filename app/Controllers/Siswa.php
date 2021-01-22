<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Siswa extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data['nama_siswa']=['adul'];
        $data['kelas']=['XII','XIII','IX'];
        return view('siswaView', $data);
    }
    public function detail($id = '')
    {
        echo 'detail' . $id;
    }
}
