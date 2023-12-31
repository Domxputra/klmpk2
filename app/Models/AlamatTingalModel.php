<?php

namespace App\Models;

use CodeIgniter\Model;

class AlamatTingalModel extends Model
{
    protected $table            = 'alamattinggal';
    protected $primaryKey       = 'kode';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["jalan", "kelurahan", "rt_rw", "kode_pos", "mahasiswa_kode"];
}
