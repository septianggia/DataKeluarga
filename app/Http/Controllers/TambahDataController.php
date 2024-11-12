<?php

namespace App\Http\Controllers;
use App\Models\TambahData;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TambahDataController extends Controller
{
    //
    public function index()
        {
            $tambahdata=TambahData::all();
            return view('tambahdata.index',[
                "title"=>"TambahData",
                "data"=>$tambahdata
            ]);
        }
    public function create():View
    {
        return view('tambahdata.create')->with([
            "title" => "Tambah Data Warga"
        ]);
    }
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "nama_lengkap"=>"required",
            "nik"=>"required",
            "jenis_kelamin"=>"required",
            "tempat_lahir"=>"required",
            "tanggal_lahir"=>"required",
            "agama"=>"required",
            "pendidikan"=>"required",
            "jenis_pekerjaan"=>"required",
            "golongan_darah"=>"nullable",
            "status_perkawinan"=>"required",
            "tanggal_perkawinan"=>"nullable",
            "status_hubungan_dalam_keluarga"=>"required",
            "kewarganegaraan"=>"required",
            "ayah"=>"required",
            "ibu"=>"required"
        ]);
        TambahData::create($request->all());

    return redirect()->route('tambahdata.index')->with('success', 'Data Warga Berhasil Ditambahkan');
    }
    public function edit(TambahData $tambahData):View
    {
        return view('tambahdata.edit',compact('tambahdata'))->with([
            "title" => "Ubah Data Warga",
            "data" => TambahData::all()
        ]);
    }
    public function update(TambahData $tambahData, Request $request):RedirectResponse
    {
        $request->validate([
            "nama_lengkap"=>"required",
            "nik"=>"required",
            "jenis_kelamin"=>"required",
            "tempat_lahir"=>"required",
            "tanggal_lahir"=>"required",
            "agama"=>"required",
            "pendidikan"=>"required",
            "jenis_pekerjaan"=>"required",
            "golongan_darah"=>"nullable",
            "status_perkawinan"=>"required",
            "tanggal_perkawinan"=>"nullable",
            "status_hubungan_dalam_keluarga"=>"required",
            "kewarganegaraan"=>"required",
            "ayah"=>"required",
            "ibu"=>"required"
        ]);
        $warga->update($request->all());
        return redirect()->route('tambahdata.index')->with('updated','Data Warga Berhasil Diubah');
    }
    public function destroy($id):RedirectResponse
    {
        TambahData::where('id',$id)->delete();
        return redirect()->route('tambahdata.index')->with('delete','Data Warga Berhasil Dihapus');
    }
}
