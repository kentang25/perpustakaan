<?php

namespace App\Controllers;
use App\Models\M_perpustakaan;
use App\Models\M_kategori;

class Perpustakaan extends BaseController
{
    protected $perpusModel;
    protected $kategoriModel;

    public function __construct()
    {
        $this->perpusModel = new M_perpustakaan();
        $this->kategoriModel = new M_kategori();
    }

    public function index(): string
    {
        $data = [
            'title'     => 'Dungeons',
            'buku'      => $this->perpusModel->getNewsBuku(),
            'kategori'  => $this->kategoriModel->findAll(),
            'bukuAll'   => $this->perpusModel->getAllBuku()
        ];

        return view('front_buku/v_buku', $data);
    }

    
}
