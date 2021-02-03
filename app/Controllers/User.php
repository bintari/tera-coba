<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class User extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $data=[
            'entry'=>'active'
        ];
        return view('user/index',$data);
    }
    public function login()
    {
        return view('user/login');
        redirect('user/dashboard');
    }
    public function dashboard()
    {
        return view('user/dashboard');
        redirect('user/dashboard');
    }
    public function retribusi()
    {
        return view('user/retribusi');
    }
    public function pengujian()
    {
        return view('user/pengujian');
    }
    public function pengajuan()
    {
        return view('user/pengajuan');
    }
    public function profil()
    {
        return view('user/profil');
    }
}
