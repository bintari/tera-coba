<?php

namespace App\Controllers;

use App\Models\teraModel;
use App\Models\retribusiModel;
use App\Models\JadwalpengujianModel;
use CodeIgniter\Controller;

class Adminpenguji extends Controller
{
    protected $TeraModel;
    protected $RetribusiModel;
    protected $JadwalpengujiaModel;
    public function __construct()
    {
        $this->TeraModel = new teraModel();
        $this->RetribusiModel = new retribusiModel();
        $this->JadwalpengujiaModel = new JadwalpengujianModel();
    }

    public function index()
    {
        $orang = $this->TeraModel;
        $jadwal = $this->JadwalpengujiaModel;
        $data = [
            'orang' => $orang->paginate(10, 'tera')
        ];
        return view('adminpenguji/index', $data);
    }

    public function penguji($tera_id)
    {
        $orang = $this->TeraModel->where(['tera_id' => $tera_id])->first();

        $data = [
            'tera' =>  $orang
        ];

        return view('adminpenguji/penguji', $data);
    }
    public function jadwal()
    {
        $jadwal = $this->JadwalpengujiaModel;

        $data = [
            'jadwal' =>  $jadwal->paginate(10, 'jadwal_pengujian')
        ];

        // dd($this->JadwalpengujiaModel->join('tera', 'tera.tera_id = jadwal_pengujian.jadwal_pengujian_tera_id', 'left'));

        // dd($data);
        return view('adminpenguji/jadwal', $data);
    }


    public function save($tera_id)
    {
        $orangretr = $this->RetribusiModel->where(['tera_id' => $tera_id])->first();
        // dd($orangretr);
        $nama = $this->request->getVar();
        $this->JadwalpengujiaModel->save([
            'jadwal_pengujian_tera_id' => $tera_id,
            'jadwal_pengujian_tanggal' => $nama['jadwal_pengujian_tanggal']
        ]);
        redirect('adminpenguji');
    }
}
