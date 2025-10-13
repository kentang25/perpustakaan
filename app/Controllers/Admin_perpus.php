<?php

namespace App\Controllers;
use App\Models\M_perpustakaan;
use App\Models\M_kategori;

class Admin_perpus extends BaseController
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
            'title'     => 'Perpustakaan',
            'buku'      => $this->perpusModel->getAllBuku(),
            'kategori'  => $this->kategoriModel->findAll()
        ];
        // dd($data);

        return view('buku/v_data_buku', $data);
    }

    // public function create()
    // {
    //     $data = [
    //         'title'         => 'Tambah Buku',
    //         'validation'    => session()->getFlashdata('validation') ?? \config\Services::validation()
    //     ];

    //     return view('buku/v_tambahbuku', $data);
    // }

    public function save()
    {
        $filegambar = $this->request->getFile('gambar');
        $namagambar = $filegambar->getRandomName();
        $filegambar->move('img',$namagambar);

            $this->perpusModel->save([
                'judul'     => $this->request->getPost('judul'),
                'pengarang' => $this->request->getPost('pengarang'),
                'penerbit'  => $this->request->getPost('penerbit'),
                'id_kategori' => $this->request->getPost('kategori'),
                'gambar'    => $namagambar
            ]);

            return redirect()->to('/admin_perpus');
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Buku',
            'detail'  => $this->perpusModel->find($id)
        ];

        return view('buku/v_detail_buku', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Buku',
            'edit'  => $this->perpusModel->find($id),
            'kategori' => $this->kategoriModel->findAll()
        ];
        return view('buku/v_edit_buku', $data);
    }
}
