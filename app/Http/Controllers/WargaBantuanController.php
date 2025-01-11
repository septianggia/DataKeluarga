<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Bantuan;
use Illuminate\View\View;
use App\Models\WargaBantuan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class WargaBantuanController extends Controller
{
    //
    public function daftar($id):View{
        $dataWarga=Warga::find($id)->toArray();
        $wargabantuan=WargaBantuan::select('*')->where('warga_id',$id)->get();
        $dataBantuan=array();
        foreach($wargabantuan as $wb){
            $dataBantuan[]=Bantuan::select('*')->where('id',$wb->bantuan_id)->get();

        }

        


        // dd($wargabantuan,$dataBantuan);
        return view('warga.bantuan')->with([
            "title"=>"Daftar Bantuan",
            "dataWarga"=>$dataWarga,
            "data"=>$dataBantuan,
            "warga_id"=>$id
        ]);
    }

    public function create($id):View{
        $daftar_bantuan=Bantuan::select('*')->get();
        return view('wargabantuan.create')->with([
            "title"=>"Tambah Data Bantuan",
            "warga_id"=>$id,
            "daftar_bantuan"=>$daftar_bantuan,
        ]);
    }
   
    public function store(Request $request):RedirectResponse
    {
        // dd($request);
        $request->validate([
            "warga_id"=>"required",
            "bantuan_id"=>"required"
        ]);
        $data['warga_id']=$request->warga_id;
        $data['bantuan_id']=$request->bantuan_id;
        // dd($data);
        WargaBantuan::create($data);

    return redirect()->route('wargabantuan.list',['id'=>$data['warga_id']])->with('success', 'Data Penerima Berhasil Ditambahkan');
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
            "no_kk"=>"required",
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
