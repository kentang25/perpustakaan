<?php

namespace App\Controllers;
use App\Models\M_perpustakaan;

class Perpustakaan extends BaseController
{
    protected $perpusModel;

    public function __construct()
    {
        $this->perpusModel = new M_perpustakaan();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Perpustakaan',
            'buku' => $this->perpusModel->getAllBuku()
        ];

        return view('front_buku/v_buku', $data);
    }

    public function create()
    {
        $data = [
            'title'         => 'Tambah Buku',
            'validation'    => session()->getFlashdata('validation') ?? \config\Services::validation()
        ];

        return view('buku/v_tambahbuku', $data);
    }
}
