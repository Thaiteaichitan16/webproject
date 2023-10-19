<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





// Route::get('tampilan', function () {
//     return view('tampilanutama');
// });

//  data masyarakat
Route::get('masyarakat',[MasyarakatController::class,'index']);
Route::get('registrasi',[MasyarakatController::class,'registrasi']);
Route::post('simpan',[MasyarakatController::class,'simpan']);
// tampilan dashboard masyarakat
Route::get('layoutmasyarakat',[MasyarakatController::class,'dashboard']);
//data login
Route::get('login',[MasyarakatController::class,'login']);
Route::post('login',[MasyarakatController::class,'ceklogin']);
//buat laporan
Route::get('pengaduan',[MasyarakatController::class,'pengaduan']);
Route::post('laporan',[MasyarakatController::class,'laporan']);


// Route::get('logout',[MasyarakatController::class,'logout']);


Route::get('validasi',[AdminController::class,'validasi']);