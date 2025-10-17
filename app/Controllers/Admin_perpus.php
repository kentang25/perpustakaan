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
            'validation' => session()->getFlashdata('validation') ?? \config\Services::validation(),
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

        $fileEbook = $this->request->getFile('ebook');
        if($fileEbook->isValid() && !$fileEbook->hasMoved()){
            $nameFile = $fileEbook->getRandomName();
            $fileEbook->move('public/ebook', $nameFile);
        }

        $rules = [
            'judul' => 'required|is_unique[buku.judul]',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'file_ebook' => 'max_size[file_ebook,2048]|ext_in[file_ebook,pdf,ePub,html]',
            'gambar' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
        ];

        if(!$this->validate($rules)){
            return redirect()->to('/admin_perpus')->withInput()->with('validation', $this->validator);
        }

            $this->perpusModel->save([
                'judul'     => $this->request->getPost('judul'),
                'pengarang' => $this->request->getPost('pengarang'),
                'penerbit'  => $this->request->getPost('penerbit'),
                'id_kategori' => $this->request->getPost('kategori'),
                'file_ebook'    => $nameFile,
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

    public function update($id)
    {
        $bukuLama = $this->perpusModel->find($id);

        if(!$bukuLama){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Buku dengan ID ' . $id . ' tidak ditemukan.');
        }

        $rules = ($bukuLama['judul'] === $this->request->getPost('judul')) ? 'required' : 'required|is_unique[buku.judul]';

        if(!$this->validate([
            'judul' =>[
                'rules' => $rules,
                'errors' => [
                    'required' => '{field} buku harus diisi.',
                    'is_unique' => '{field} buku sudah terdaftar.'
                ]
            ],
                'pengarang' =>[
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} buku harus diisi.'
                    ]
                    ],
                'penerbit' =>[
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} buku harus diisi.'
                ]
                ],
                'gambar' =>[
                    'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran {field} terlalu besar.',
                        'is_image' => 'Yang anda pilih bukan gambar.',
                        'mime_in' => 'Yang anda pilih bukan gambar.'
                ]
                ]
        ])){
            return redirect()->to('/admin_perpus/edit/' . $id)->withInput();
        }

        $filegambar = $this->request->getFile('gambar');
        if($filegambar->getError() == 4){
            $namegambar = $this->request->getPost('gambarLama');
        }else{
            $namegambar = $filegambar->getRandomName();
            $filegambar->move('img', $namegambar);
            if($bukuLama['gambar'] != 'default.jpg'){
                unlink('img/' . $bukuLama['gambar']);
            }
        }

        $this->perpusModel->save([
            'id'        => $id,
            'judul'     => $this->request->getPost('judul'),
            'pengarang' => $this->request->getPost('pengarang'),
            'penerbit'  => $this->request->getPost('penerbit'),
            'id_kategori' => $this->request->getPost('kategori'),
            'file_ebook' => $this->request->getPost('file_ebook'),
            'gambar'    => $namegambar
        ]);

        // session->setFlashdata('pesan', 'Data berhasil diupdate.');
        return redirect()->to('/admin_perpus');
    }

    public function delete($id)
    {
        $buku = $this->perpusModel->find($id);
        if($buku['gambar'] != 'default.jpg'){
            unlink('img/' . $buku['gambar']);
        }
            $this->perpusModel->delete($id);
            return redirect()->to('/admin_perpus');
        
    }
}
