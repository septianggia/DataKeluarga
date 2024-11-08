<?php

namespace App\Http\Controllers;
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
            "kode_pos"=>"required",
            "desa"=>"required",
            "kecamatan"=>"required",
            "kabupaten"=>"required",
            "provinsi"=>"required"
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
            "kode_pos"=>"required",
            "desa"=>"required",
            "kecamatan"=>"required",
            "kabupaten"=>"required",
            "provinsi"=>"required"
        ]);
        $warga->update($request->all());
        return redirect()->route('warga.index')->with('updated','Data Warga Berhasil Diubah');
    }
    public function show():View
    {
        $warga=Warga::all();
        return view('warga.show')->with([
            "title" => "Tampil Data Warga",
            "data" =>$warga
        ]);
    }
    public function destroy($id):RedirectResponse
    {
        Warga::where('id',$id)->delete();
        return redirect()->route('warga.index')->with('delete','Data Warga Berhasil Dihapus');
    }
}
