<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Middleware\MasyarakatMiddleware;
use App\Http\Middleware\validasiAdmin;
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
Route::prefix('masyarakat')->group(function(){
    Route::get('/',function(){
        return view('Masyarakat.dashboard');
    })->middleware(MasyarakatMiddleware::class);
Route::get('masyarakat',[MasyarakatController::class,'dashboard']);
Route::get('awal',[MasyarakatController::class,'dashboardL']);
Route::get('registrasi',[MasyarakatController::class,'registrasi']);
Route::post('registrasi',[MasyarakatController::class,'simpan']);
//data login
Route::get('login',[MasyarakatController::class,'login']);
Route::post('login',[MasyarakatController::class,'ceklogin']);
//buat laporan
Route::get('pengaduan',[MasyarakatController::class,'pengaduan'])->middleware(MasyarakatMiddleware::class);
Route::post('pengaduan',[MasyarakatController::class,'laporan'])->middleware(MasyarakatMiddleware::class);
//logout
Route::get('logout',[MasyarakatController::class,'logout']);
});



Route::get('validasi',[AdminController::class,'validasi']);

Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'dash'])->middleware(validasiAdmin::class);
    Route::get('login',[AdminController::class,'login']);
    Route::post('login',[AdminController::class,'ceklogin']);
    Route::get('register',[AdminController::class,'registrasi']);
    Route::post('register',[AdminController::class,'data']);
    Route::get('validasi',[AdminController::class,'validasi'])->middleware(validasiAdmin::class);
    Route::get('status/{id}',[AdminController::class,'status'])->middleware(validasiAdmin::class);
    Route::get('logout',[AdminController::class,'logout']);
    
});