<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'kode';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    =
    [
        "nama_lengkap",
        "tanggal_lahir",
        "jenis_kelamin",
        "asal_sma",
        "email",
        "no_tlp",
        "sumber_biaya",
        "informasi",
        "jurusan_kode"
    ];
}
