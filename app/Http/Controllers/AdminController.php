<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function login(){
        return view("Admin.log");
    }
    public function ceklogin(Request $request){
        $s = new Petugas();
        $s= $s->where ('username',$request->input('username'))->where('password',$request->input('password'));

        if($s->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>$request->input('password')
            ]);
            return redirect('/admin');
        }
        return back();
    }   
    public function logout(){
        session()->flush();
        return back();
    }
    public function register(){
        return view("Admin.registrasi");
    }
    public function data(Request $request){
        $c = new Petugas();
        $cek = $request->validate([
            'nama_petugas' => 'required|max:16',
            'username' => 'required|min:6',
            'password' => 'required|min:4',
            'telp' => 'required|max:13',
            'level'=>'required'
        ]);
        $c->create($request->all());
       
    
        return back()->with('Pesan', 'anda berasil registrasi');
    
    }
    // public function pengaduan()
    // {
    //     return view('Admin.pengaduan');
    // }
}
