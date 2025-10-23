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

    public function detail($id)
    {
        $data = [
            'title'     => 'Detail Books',
            'detail'    => $this->perpusModel->find($id)
        ];

        return view('front_buku/v_detail_buku', $data);
    }

    public function list_book()
    {
        $all = $this->perpusModel->getAllBuku();

        $kategori = [];

        foreach($all as $b){
            $kategori[$b['kategori']][] = ['judul'=>$b['judul'],'gambar'=>$b['gambar']];;
        }

        // $data['kategori'] = $kategori;
        // $title = 'Categori';

        $data = [
            'title'     => 'Category',
            'kategori'  => $kategori
        ];
        
        return view('front_buku/v_kategori', $data);
    }
    
}
