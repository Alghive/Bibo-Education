<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table = 'matkul';
    protected $useTimestamps = false;
    protected $allowedFields = ['judul', 'matakuliah', 'deskripsi', 'tutor', 'sampul'];
    public function getMatkul($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(["id" => $id])->first();
    }
}
