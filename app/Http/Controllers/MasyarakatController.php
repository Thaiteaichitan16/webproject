<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    //
    public function registrasi(){
        $m = new Masyarakat();
        return view('Masyarakat.registrasi');
    }
    

    public function simpan(Request $request){
        $m = new Masyarakat();
        // cek data yang dikirim user
        $cek = $request->validate([
            'nik'=>'required|unique:masyarakat|max:16',
            'nama'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'telp'=>'required|max:13'
        ]);

        $m->create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
            'telp'=>$request->telp
        ]);
    return back()->with('pesan','Selamat, Registrasi Berhasil');
    }

    public function login(){
        return view('Masyarakat.login');
    }
    public function logout(){
        return view('Masyarakat.logout');
    }
        public function tampilanutama(){
        return view('Masyarakat.tampilanutama');
    }
    public function ceklogin(Request $request){
        $m = new Masyarakat();
        // cek username dan password
        if($m->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('tampilanutama');
        }
        return back()->with('pesan', 'Username dan Password tidak terdaftar');
    }
    public function pengaduan(){
        return view('Masyarakat.pengaduan');
    }
    public function tampilankedua(){
        return view('Masyarakat.tampilankedua');
    }

}

