<?php

namespace App\Controllers;
use App\Models\M_perpustakaan;

class Admin_perpus extends BaseController
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
            'buku' => $this->perpusModel->findAll()
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
                
                'gambar'    => $namagambar
            ]);

            return redirect()->to('/');
    }
}
