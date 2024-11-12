<?php

namespace App\Http\Controllers;
use App\Models\Penerima;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PenerimaController extends Controller
{
    //
    public function index()
        {
            $penerima=Penerima::all();
            return view('penerima.index',[
                "title"=>"Penerima",
                "data"=>$penerima
            ]);
        }
    public function create():View
    {
        return view('penerima.create')->with([
            "title" => "Tambah Data Penerima"
        ]);
    }
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "nama_penerima"=>"required",
            "no_kk"=>"required",
            "jenis_bantuan"=>"required",
        ]);
        Penerima::create($request->all());

    return redirect()->route('penerima.index')->with('success', 'Data Penerima Berhasil Ditambahkan');
    }
    public function edit(Penerima $penerima):View
    {
        return view('penerima.edit',compact('penerima'))->with([
            "title" => "Ubah Data Penerima",
            "data" => Penerima::all()
        ]);
    }
    public function update(Penerima $penerima, Request $request):RedirectResponse
    {
        $request->validate([
            "nama_penerima"=>"required",
            "no_kk"=>"required",
            "jenis_bantuan"=>"required",
        ]);
        $penerima->update($request->all());
        return redirect()->route('penerima.index')->with('updated','Data Penerima Berhasil Diubah');
    }
    public function show(Penerima $penerima):View
    {
        return view('penerima.tampil',compact('penerima'))
        ->with(["title" => "Data Penerima"]);
    }
    public function destroy($id):RedirectResponse
    {
        Penerima::where('id',$id)->delete();
        return redirect()->route('penerima.index')->with('delete','Data Penerima Berhasil Dihapus');
    }
}
