<?php
namespace App\Models;
use CodeIgniter\Model;

Class M_perpustakaan extends Model{

    protected $table = 'tb_buku';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'pengarang', 'penerbit', 'gambar'];

    public function getAllBuku()
    {
         return $this->select('tb_buku.*, tb_kategori.kategori')
                     ->join('tb_kategori', 'tb_kategori.id_kategori = tb_buku.id_kategori')
                     ->findAll();
    }
}

?>