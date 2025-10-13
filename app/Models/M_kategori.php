<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class M_kategori extends Model
    {
        protected $table = 'tb_kategori';
        protected $primaryKey = 'id_kategori';
        protected $allowedFields = ['kategori'];
    }

?>