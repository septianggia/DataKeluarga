<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('user.index',[
            "title" => "Data Warga",
            "data" => User::all()
        ]);
    }
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "name"=>"required",
            "email"=>"email:dns",
            "password"=>"required"
        ]);
        $password=Hash::make($request->password);
        $request->merge([
            "password"=> $password
        ]);

        User::create($request->all());
        return redirect()->route('pengguna.index')->with('success','Data User Berhasil Ditambahkan');
    
    }
}


