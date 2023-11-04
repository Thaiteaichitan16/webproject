<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
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
        return redirect('/admin/login');
    }
    public function registrasi(){
        return view("Admin.registrasi");
    }
    public function data(Request $request){
        $c = new Petugas();
        $cek = $request->validate([
            'nama_petugas' => 'required|max:16',
            'username' => 'required|min:6',
            'password' => 'required|min:4',
            'telp' => 'required|max:13',
            'level'=> 'required'
        ]);
        $c->create($request->all());
       
    
        return back()->with('Pesan','Anda berhasil registrasi');
    
    }
    public function dash(){
        $cokot = new Pengaduan();
        return view('Admin.dash',['val'=>$cokot->all()]);
    }

    public function validasi(){
        $ambil = new Pengaduan();
        return view ('Admin.validasi',['val'=>$ambil->all()]);
    }
     public function status($id){
        $lapor = new Pengaduan();
        $lapor->find($id)->update(['status'=>'proses']);
        return back();
     }
     public function tanggapan(){
        return view("Admin.tanggapan");
    }
    public function tanggapi(){
        $ambil = new Pengaduan();
        return view ('Admin.validasi',['val'=>$ambil->all()]);
    }
}
