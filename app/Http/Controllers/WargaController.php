<?php

namespace App\Http\Controllers;

use App\Models\TambahData;
use App\Models\Warga;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WargaController extends Controller
{
    //
    public function index()
        {
            $warga=Warga::all();
            return view('warga.index',[
                "title"=>"Warga",
                "data"=>$warga
            ]);
        }
    public function create():View
    {
        return view('warga.create')->with([
            "title" => "Tambah Data Warga"
        ]);
    }
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "nama_kepala_keluarga"=>"required",
            "no_kk"=>"required",
            "alamat"=>"required",
            "desa"=>"required",
            "kecamatan"=>"required",
            "kabupaten"=>"required"
          
        ]);
        
        Warga::create($request->all());

    return redirect()->route('warga.index')->with('success', 'Data Warga Berhasil Ditambahkan');
    }
    public function edit(Warga $warga):View
    {
        return view('warga.edit',compact('warga'))->with([
            "title" => "Ubah Data Warga",
            "data" => Warga::all()
        ]);
    }
    public function update(Warga $warga, Request $request):RedirectResponse
    {
        $request->validate([
            "nama_kepala_keluarga"=>"required",
            "no_kk"=>"required",
            "alamat"=>"required",
            "desa"=>"required",
            "kecamatan"=>"required",
            "kabupaten"=>"required"
        ]);
        $warga->update($request->all());
        return redirect()->route('warga.index')->with('updated','Data Warga Berhasil Diubah');
    }
    public function show($id):View
    {
        $anggota=TambahData::select('*')
                            ->where('warga_id',$id)
                            ->get();
        
        return view('warga.show')->with([
            "title" => "Tampil Data Warga",
            "data" =>$anggota,
            "id" =>$id

        ]);
    }
    
    public function destroy($id):RedirectResponse
    {
        Warga::where('id',$id)->delete();
        return redirect()->route('warga.index')->with('delete','Data Warga Berhasil Dihapus');
    }

    public function bantuan($id)
    {

        $dataWarga=Warga::select('id','no_kk','nama_kepala_keluarga')
                ->where('id',$id)
                ->get()
                ->toArray();
        
        return view('warga.bantuan',[
            "data"=>array(),
            "dataWarga"=>$dataWarga,
            "title"=>''
        ]);
    }
}
