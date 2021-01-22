<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Text extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        echo 'text';
    }
    public function detail($id = '')
    {
        echo 'detail' . $id;
    }
}
