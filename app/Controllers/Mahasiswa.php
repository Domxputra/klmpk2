<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JurusanModel;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mhs;
    protected $jrs;

    public function __construct()
    {
        $this->mhs = new MahasiswaModel();
        $this->jrs = new JurusanModel();
    }
    public function index()
    {
        $data['mahasiswa'] = $this->mhs->findAll();
        return view("mahasiswa/mahasiswa", $data);
    }
    public function tambah()
    {
        $data['jurusan'] = $this->jrs->findAll();
        $item = $this->request->getPost();
        // dd($item);
        if (count($item) > 0) {
            try {
                $this->mhs->insert($item);
                return redirect()->to(base_url('mahasiswa'));
            } catch (\Throwable $th) {
                //throw $th;
            }
        } else {
            return view('mahasiswa/tambah', $data);
        }
    }

    public function ubah($id = null)
    {
        $item = $this->request->getPost();
        if (isset($item['nama_lengkap'])) {
            $item = $this->request->getPost();
            if (count($item) > 0) {
                try {
                    $value = [
                        "nama_lengkap" => $item['nama_lengap'],
                        "tanggal_lahir" => $item['tanggal_lahir'],
                        "jenis_kelamin" => $item['jenis_kelamin'],
                        "asal_sma" => $item['asal_sma'],
                        "email" => $item['email'],
                        "no_tlp" => $item['no_tlp'],
                        "sumber_biaya" => $item['sumber_biaya'],
                        "informasi" => $item['informasi'],
                        "jurusan_kode" => $item['jurusan_kode'],
                    ];
                    $this->mhs->update($id, $value);
                    return redirect()->to(base_url('mahasiswa'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        } else {
            $item['item'] = $this->mhs->where('kode', $id)->first();
            return view('mahasiswa/ubah', $item);
        }
    }
    public function hapus($id)
    {
        $this->mhs->delete($id);
        return redirect()->to(base_url("mahasiswa"));
    }
}
