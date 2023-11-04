<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    //halaman regis
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
    return back()->with('pesan','Registrasi Anda Berhasil');
    }
    // halaman login
    public function login(){
        return view('Masyarakat.login');
    }
    

    public function ceklogin(Request $request){
        $m = new Masyarakat();
        // cek username dan password
        if($m->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('/masyarakat/masyarakat');
        }
        return back()->with('pesan', 'Username dan Password tidak terdaftar');
    }
    //laporan pengaduan
    public function pengaduan(){
        return view('Masyarakat.pengaduan');
    }
    public function laporan(Request $request){
        $ya = new Pengaduan();

        $foto = $request->file('foto');
        $folder = 'upload_data';
        $foto->move($folder,$foto->getClientOriginalName());
    

    
        // $p = $request->validate([
        //     'nik'=>'required|max:16',
        //     'tgl_pengaduan'=>'required',
        //     'isi_laporan'=>'required'
        //  ]);

       
        $ya->create([
            'nik'=>$request->input('nik'),
            'tgl_pengaduan'=>date('y-m-d'),
            'foto'=> $foto->getClientOriginalName(),
            'isi_laporan'=>$request->input('isi_laporan'),
            'status'=>'0'
        ]);
        return back()->with('pesan','Laporan berhasil dikirim');
    }
    //tampilan masyarakat
    public function dashboard(){
        return view('Masyarakat.dashboard');
    }
    public function dashboardL(){
        return view('Layoututama');
    }
    // halaman logout
    public function logout(){
        session()->flush();
        return redirect('/masyarakat/login');
    }
    public function layout(){
        return view('Layoututama');
    }
      
    
    
}

