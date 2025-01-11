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
    public function create($id):View
    {
        return view('tambahdata.create')->with([
            "title" => "Tambah Data Warga",
            "warga_id" =>$id
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
            "ibu"=>"required",
            "warga_id"=>"required"
        ]);
        TambahData::create($request->all());

    return redirect()->route('warga.show',$request->warga_id)->with('success', 'Data Warga Berhasil Ditambahkan');
    }
    public function edit($id):View
    {
        $tambahdata=TambahData::findOrFail($id);
    
        return view('tambahdata.edit',compact('tambahdata'))->with([
            "title" => "Ubah Data Warga",
            "data" => $tambahdata
        ]);
    }
    public function update($id,Request $request):RedirectResponse
    {
        // dd($id);
        $data=$request->validate([
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
        TambahData::where('id',$id)->update($data);
        return redirect()->route('warga.show',$request->warga_id)->with('updated','Data Warga Berhasil Diubah');
    }

    

    public function destroy($id, Request $request):RedirectResponse
    {   

        TambahData::where('id',$id)->delete();
        return redirect()->route('warga.show',$request->warga_id)->with('success', 'Data Warga Berhasil Dihapus');
    }
}
