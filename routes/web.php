<?php

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


Route::get('regis1', function () {
    return view('regismasyarakat');
});
Route::get('logouty', function () {
    return view('logout');
});
// Route::get('tampilan', function () {
//     return view('tampilanutama');
// });
Route::get('lapor', function () {
    return view('lapor');
});
Route::get('contoh', function () {
    return view('contoh');
});



//  data masyarakat
Route::get('masyarakat',[MasyarakatController::class,'index']);
Route::get('registrasi',[MasyarakatController::class,'registrasi']);
Route::post('simpan',[MasyarakatController::class,'simpan']);
// data login
Route::get('tampilanutama',[MasyarakatController::class,'tampilanutama']);
Route::get('login',[MasyarakatController::class,'login']);
Route::post('login',[MasyarakatController::class,'ceklogin']);

Route::get('pengaduan',[MasyarakatController::class,'pengaduan']);
Route::post('laporan',[MasyarakatController::class,'laporan']);
