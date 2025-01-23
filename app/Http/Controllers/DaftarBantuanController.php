<?php

namespace App\Http\Controllers;


use App\Models\Bantuan;
use Illuminate\View\View;
use Illuminate\Http\Request;

use App\Models\DaftarBantuan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;


class DaftarBantuanController extends Controller

    {
        //
        public function index()
            {
                $daftarbantuan=Bantuan::all();
                return view('daftarbantuan.index',[
                    "title"=>"DaftarBantuan",
                    "data"=>$daftarbantuan
                ]);
            }
        public function create()
        {
            
            return view('daftarbantuan.create')->with([
                "title" => "Tambah Data Bantuan"
            ]);
        }
        public function store(Request $request):RedirectResponse
        {
            // dd($request);
            $request->validate([
                "tahun"=>"required",
                "jenis_bantuan"=>"required"
            ]);
            $data['tahun']=$request->tahun;
            $data['jenis_bantuan']=$request->jenis_bantuan;
            // dd($data);
            Bantuan::create($data);
    
        return redirect()->route('daftarbantuan.index')->with('success', 'Data Penerima Berhasil Ditambahkan');
        }
        public function edit($id):View
        {
            $daftarbantuan=Bantuan::findOrFail($id);
            // dd($tambahdata->id);
            return view('daftarbantuan.edit',compact('daftarbantuan'))->with([
                "title" => "Ubah Data Penerima",
                "data" => $daftarbantuan
            ]);
        }
        public function update(Bantuan $daftarbantuan, Request $request):RedirectResponse
        {
            $request->validate([
                "tahun"=>"required",
                "jenis_bantuan"=>"required"
            ]);
            $daftarbantuan->update($request->all());
            return redirect()->route('daftarbantuan.index')->with('updated','Data Penerima Berhasil Diubah');
        }
        
    }
    

