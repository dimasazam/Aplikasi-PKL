<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Databarang;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view('admin.dashboard');
    }
    public function data_barang(){
        $data=Databarang::all();
        return view('admin.data_barang.barang',[
            'data' => $data
        ]);
    }
    public function tambah_barang(Request $request)
    {
        $data = $this->validate($request,[
            'namabarang' => 'required'
        ]);
        Databarang::create([
            'namabarang' => $data['namabarang']
        ]);

        return back()->with('success', 'Berhasil Tambah Data');
    }
    public function item($id, Databarang $databarang){
        $data=Databarang::all();
        return view('admin.data_barang.barang',[
            'data' => $data
        ]);
    }
}
