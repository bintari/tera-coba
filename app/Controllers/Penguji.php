<?php

namespace App\Controllers;

use App\Database\Migrations\JadwalPengujian;
use App\Models\teraModel;
use App\Models\retribusiModel;
use App\Models\PengujiModel;
use App\Models\PengujiantankModel;
use App\Models\JadwalpengujianModel;
use CodeIgniter\Controller;

class Penguji extends Controller
{
    protected $TeraModel;
    protected $RetribusiModel;
    protected $PengujiModel;
    protected $PengujiantankModel;
    protected $JadwalpengujianModel;
    public function __construct()
    {
        $this->TeraModel = new teraModel();
        $this->RetribusiModel = new retribusiModel();
        $this->PengujiModel = new PengujiModel();
        $this->PengujiantankModel = new PengujiantankModel();
        $this->JadwalpengujianModel = new JadwalpengujianModel();
    }

    public function index()
    {
        $orang = $this->TeraModel;
        $data = [
            'orang' => $orang->paginate(10, 'tera')
        ];
        return view('pengujian/index', $data);
    }
    public function jadwal()
    {
        $jadwal = $this->JadwalpengujianModel;
        $data = [
            'jadwal' =>  $jadwal->paginate(10, 'jadwal_pengujian')
        ];
        return view('adminpenguji/jadwal', $data);
    }
    public function dashboard()
    {
        $orang = $this->TeraModel;
        $data = [
            'orang' => $orang->paginate(10, 'tera')
        ];
        return view('pengujian/dashboard', $data);
    }

    public function pengujian($tera_id)
    {
        $validation =  \Config\Services::validation();
        $orang = $this->TeraModel->where(['tera_id' => $tera_id])->first();
        $data = [
            'tera' =>  $orang,
            'validation' => $validation
        ];
        return view('pengujian/pengujiandua', $data);
    }

    public function skrdlb()
    {
        return view('retribusi/tambah');
    }

    public function save($tera_id)
    {
        $orang = $this->TeraModel->where(['tera_id' => $tera_id])->first();
        $nama = $this->request->getVar();
        // dd($tera_id);
        $date = strtotime("+7 day");
        $tera = $tera_id;

        // if (!$this->validate([
        //     'nama' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} harus diisi',
        //             'isuniquie' => '{field} sudah ada',
        //         ]
        //     ],

        // ])) {
        //     $validation = \Config\Services::validation();
        //     return redirect('penguji/pengujian/'.$tera_id)->withInput()->with('validation', $validation);
        // }
        // $this->PengujiModel->save([
        //     'tera_id' => $orang['tera_id'],
        //     'pemilik' => $nama['pemilik'],
        //     'merk' => $nama['merk'],
        //     'buatan' => $nama['buatan'],
        //     'penguji' => $nama['penguji'],
        //     'tanggal_pengujian_ulang' => date('M d, Y', $date),
        //     'metode' => $nama['metode']
        // ]);
        $this->PengujiantankModel->save([
            'tera_id' => $orang['tera_id'],
            't1_muka' => $nama['t1_muka'],
            't1_belakang' => $nama['t1_belakang'],
            't2_muka' => $nama['t2_muka'],
            't2_belakang' => $nama['t2_belakang'],
            't3_muka' => $nama['t3_muka'],
            't3_belakang' => $nama['t3_belakang'],
            't4_muka' => $nama['t4_muka'],
            't4_belakang' => $nama['t4_belakang'],
            'T_muka' => $nama['T_muka'],
            'T_belakang' => $nama['T_belakang'],
            'd_muka' => $nama['d_muka'],
            'd_belakang' => $nama['d_belakang'],
            'p_muka' => $nama['p_muka'],
            'p_belakang' => $nama['p_belakang'],
            'q_muka' => $nama['q_muka'],
            'q_belakang' => $nama['q_belakang'],
            's_muka' => $nama['s_muka'],
            's_belakang' => $nama['s_belakang'],
            'kepekaan_index_muka' => $nama['kepekaan_index_muka'],
            'kepekaan_index_belakang' => $nama['kepekaan_index_belakang'],
            'ruang_kosong_tum_muka' => $nama['ruang_kosong_tum_muka'],
            'ruang_kosong_tum_belakang' => $nama['ruang_kosong_tum_belakang'],
            'diameter_pipa_penyerap' => $nama['diameter_pipa_penyerap'],
            'panjang_pipa_penyerapan_muka' => $nama['panjang_pipa_penyerapan_muka'],
            'panjang_pipa_penyerapan_belakang' => $nama['panjang_pipa_penyerapan_belakang']
        ]);
    }
}
