<?php

namespace App\Http\Controllers;
use App\Models\Bantuan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BantuanController extends Controller
{
    //
    public function index()
        {
            $bantuan=Bantuan::all();
            return view('bantuan.index',[
                "title"=>"Bantuan",
                "data"=>$bantuan
            ]);
        }
    public function create():View
    {
        return view('bantuan.create')->with([
            "title" => "Tambah Penerima Bantuan"
        ]);
    }
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "nama_penerima"=>"required",
            "no_kk"=>"required",
            "jenis_bantuan"=>"required"
        ]);
        Bantuan::create($request->all());

    return redirect()->route('bantuan.index')->with('success', 'Data Penerima Berhasil Ditambahkan');
    }
    public function edit($id):View
    {
        $bantuan=Bantuan::findOrFail($id);
        // dd($tambahdata->id);
        return view('bantuan.edit',compact('bantuan'))->with([
            "title" => "Ubah Data Penerima",
            "data" => $bantuan
        ]);
    }
    public function update(Bantuan $bantuan, Request $request):RedirectResponse
    {
        $request->validate([
            "nama_penerima"=>"required",
            "no_k"=>"required",
            "jenis_bantuan"=>"required"
        ]);
        $bantuan->update($request->all());
        return redirect()->route('bantuan.index')->with('updated','Data Penerima Berhasil Diubah');
    }
    public function destroy($id):RedirectResponse
    {
        Bantuan::where('id',$id)->delete();
        return redirect()->route('bantuan.index')->with('delete','Data Penerima Berhasil Dihapus');
    }
}
