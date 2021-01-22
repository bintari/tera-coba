<?php

namespace App\Controllers;

use App\Models\teraModel;
use App\Models\retribusiModel;
use CodeIgniter\Controller;

class Retribusi extends Controller
{
    protected $TeraModel;
    protected $RetribusiModel;
    public function __construct()
    {
        $this->TeraModel = new teraModel();
        $this->RetribusiModel = new retribusiModel();
    }

    public function index()
    {
        $orang = $this->TeraModel;
        $data = [
            'orang' => $orang->paginate(10, 'tera')
        ];
        return view('retribusi/index', $data);
    }

    public function ssrd($tera_id = '')
    { 
        $orang = $this->TeraModel->where(['tera_id' => $tera_id])->first();
        
        $data = [
            'tera' =>  $orang        ];
            
            return view('retribusi/ssrd', $data);
    }
    
    public function skrdlb()
    {
        return view('retribusi/skrdlb');
    }
    
    public function save($tera_id)
    {
        $orangretr = $this->RetribusiModel->where(['tera_id' => $tera_id])->first();
        // dd($orangretr);
        $nama = $this->request->getVar();
        $this->RetribusiModel->save([
            'retribusi_id' => $tera_id,
            'nomilal' => $nama['nama'],
            'bank' => $nama['bank'],
            'no_rekening' => $nama['no_rekening']
        ]);
    }
}
