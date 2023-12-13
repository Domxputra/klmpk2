<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use App\Models\OrangTuaModel;

class OrangTua extends BaseController
{
    protected $ot;
    protected $mhs;
    public function __construct()
    {
        $this->ot = new OrangTuaModel();
        $this->mhs = new MahasiswaModel();
    }
    public function index()
    {
        $data['orangtua'] =  $this->ot->findAll();
        return view("orangtua/orangtua", $data);
    }
    public function tambah()
    {
        $data['mahasiswa'] = $this->mhs->findAll();
        $item = $this->request->getPost();
        if (count($item) > 0) {
            try {
                $this->ot->insert($item);
                return redirect()->to(base_url('orangtua'));
            } catch (\Throwable $th) {
                //throw $th;
            }
        } else return view('orangtua/tambah', $data);
    }
    public function ubah($id = null)
    {
        $item = $this->request->getPost();
        // dd($item['nik_ibu']);
        if (isset($item['nik_ibu'])) {
            $item = $this->request->getPost();
            if (count($item) > 0) {
                try {
                    $value = [
                        "nik_ayah" => $item['nik_ayah'],
                        "nik_ibu" => $item['nik_ibu'],
                        "nama_ayah" => $item['nama_ayah'],
                        "nama_ibu" => $item['nama_ibu'],
                    ];
                    $this->ot->update($id, $value);
                    return redirect()->to(base_url('orangtua'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        } else {
            $item['item'] = $this->ot->where('kode', $id)->first();
            return view('orangtua/ubah', $item);
        }
    }
    public function hapus($id)
    {
        $this->ot->delete($id);
        return redirect()->to(base_url("orangtua"));
    }
}
