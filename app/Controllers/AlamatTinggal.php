<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlamatTingalModel;
use App\Models\MahasiswaModel;

class AlamatTinggal extends BaseController
{

    protected $at;
    protected $mhs;

    public function __construct(){
        $this->at = new AlamatTingalModel();
        $this->mhs = new MahasiswaModel();
        
    }
    public function index()
    {
        $data['alamat_tinggal'] = $this->at->findAll();
        return view("alamat/alamat", $data);
    }

    public function tambah()
    {
        $data['mahasiswa'] = $this->mhs->findAll();
        $item = $this->request->getPost();
        if(count($item)> 0 ){
            try {
                $this->at->insert($item);
                return redirect()->to(base_url('alamat'));
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else return view('alamat/tambah', $data);
    }
   
    public function ubah($id=null)
    {
        $item = $this->request->getPost();
        if (isset($item['jalan'])) {
            $item = $this->request->getPost();
            if (count($item) > 0) {
                try {
                    $value = [
                        "jalan" => $item['jalan'],
                        "kelurahan" => $item['kelurahan'],
                        "rt_rw" => $item['rt_rw'],
                        "kode_pos" => $item['kode_pos'],
                    ];
                    $this->at->update($id,$value);
                    return redirect()->to(base_url('alamat'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }else{
            $item['item'] = $this->at->where('kode', $id)->first();
            return view('alamat/ubah', $item);
        } 
    } 

    
    public function hapus($id)
    {
        $this->at->delete($id);
        return redirect()->to(base_url("alamat"));
    }
}
