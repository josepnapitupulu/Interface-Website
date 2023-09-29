<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sidiController;
use App\Http\Controllers\nikahController;
use App\Http\Controllers\baptisController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\jemaatController;
use App\Http\Controllers\pelayanController;
use App\Http\Controllers\kegiatanController;
use App\Http\Controllers\martumpolController;

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

Route::get("/", function(){
    return view('auth.login');
});

Route::get("/jemaat", [jemaatController::class, 'index'])->name('formSearch.jemaat');
Route::get('detailJemaat/{id}',[jemaatController::class,'show'])->name('forms.detailJemaat');
Route::get('lihatDaftarJemaat/create',[jemaatController::class,'create'])->name('forms.lihatDaftarJemaat');
Route::post('daftarJemaat/store',[jemaatController::class,'store'])->name('forms.daftarJemaat');
Route::get('jemaat/edit/{id}', [jemaatController::class, 'edit'])->name('forms.editJemaat');
Route::put('jemaat/update/{id}', [jemaatController::class, 'update'])->name('forms.updateJemaat');
Route::delete('/jemaat/{id}', [jemaatController::class, 'destroy'])->name('formSearch.jemaatDelete');

Route::get("sidi", [sidiController::class, 'index'])->name('formSearch1.sidi');
Route::get('detailSidi/{id}',[sidiController::class,'show'])->name('forms1.detailSidi');
Route::get('lihatDaftarSidi/create',[sidiController::class,'create'])->name('forms1.lihatDaftarSidi');
Route::post('daftarSidi/store',[sidiController::class,'store'])->name('forms1.daftarSidi');
Route::get('sidi/edit/{id}', [sidiController::class, 'edit'])->name('forms1.editSidi');
Route::put('sidi/update/{id}', [sidiController::class, 'update'])->name('forms1.updateSidi');
Route::delete('/sidi/{id}', [sidiController::class, 'destroy'])->name('formSearch1.sidiDelete');

Route::get("baptis", [baptisController::class, 'index'])->name('formSearch2.baptis');
Route::get('detailBaptis/{id}',[baptisController::class,'show'])->name('forms2.detailBaptis');
Route::get('lihatDaftarBaptis/create',[baptisController::class,'create'])->name('forms2.lihatDaftarBaptis');
Route::post('daftarBaptis/store',[baptisController::class,'store'])->name('forms2.daftarBaptis');
Route::get('baptis/edit/{id}', [baptisController::class, 'edit'])->name('forms2.editBaptis');
Route::put('baptis/update/{id}', [baptisController::class, 'update'])->name('forms2.updateBaptis');
Route::delete('/baptis/{id}', [baptisController::class, 'destroy'])->name('formSearch2.baptisDelete');

Route::get("nikah", [nikahController::class, 'index'])->name('formSearch3.nikah');
Route::get('detailNikah/{id}',[nikahController::class,'show'])->name('forms3.detailNikah');
Route::get('lihatDaftarNikah/create',[nikahController::class,'create'])->name('forms3.lihatDaftarNikah');
Route::post('daftarNikah/store',[nikahController::class,'store'])->name('forms3.daftarNikah');
Route::get('nikah/edit/{id}', [nikahController::class, 'edit'])->name('forms3.editNikah');
Route::put('nikah/update/{id}', [nikahController::class, 'update'])->name('forms3.updateNikah');
Route::delete('/nikah/{id}', [nikahController::class, 'destroy'])->name('formSearch3.nikahDelete');

Route::get("jadwal", [jadwalController::class, 'index'])->name('formSearch4.jadwal');
Route::get('detailJadwal/{id}',[jadwalController::class,'show'])->name('forms4.detailJadwal');
Route::get('lihatDaftarJadwal/create',[jadwalController::class,'create'])->name('forms4.lihatDaftarJadwal');
Route::post('daftarJadwal/store',[jadwalController::class,'store'])->name('forms4.daftarJadwal');
Route::get('jadwal/edit/{id}', [jadwalController::class, 'edit'])->name('forms4.editJadwal');
Route::put('jadwal/update/{id}', [jadwalController::class, 'update'])->name('forms4.updateJadwal');
Route::delete('/jadwal/{id}', [jadwalController::class, 'destroy'])->name('formSearch4.jadwalDelete');

Route::get("kegiatan", [kegiatanController::class, 'index'])->name('formSearch5.kegiatan');
Route::get('detailKegiatan/{id}',[kegiatanController::class,'show'])->name('forms5.detailKegiatan');
Route::get('lihatDaftarKegiatan/create',[kegiatanController::class,'create'])->name('forms5.lihatDaftarKegiatan');
Route::post('daftarKegiatan/store',[kegiatanController::class,'store'])->name('forms5.daftarKegiatan');
Route::get('kegiatan/edit/{id}', [kegiatanController::class, 'edit'])->name('forms5.editKegiatan');
Route::put('kegiatan/update/{id}', [kegiatanController::class, 'update'])->name('forms5.updateKegiatan');
Route::delete('/kegiatan/{id}', [kegiatanController::class, 'destroy'])->name('formSearch5.kegiatanDelete');

Route::get("martumpol", [martumpolController::class, 'index'])->name('formSearch6.martumpol');
Route::get('detailMartumpol/{id}',[martumpolController::class,'show'])->name('forms6.detailMartumpol');
Route::get('lihatDaftarMartumpol/create',[martumpolController::class,'create'])->name('forms6.lihatDaftarMartumpol');
Route::post('daftarMartumpol/store',[martumpolController::class,'store'])->name('forms6.daftarMartumpol');
Route::get('martumpol/edit/{id}', [martumpolController::class, 'edit'])->name('forms6.editMartumpol');
Route::put('martumpol/update/{id}', [martumpolController::class, 'update'])->name('forms6.updateMartumpol');
Route::delete('/martumpol/{id}', [martumpolController::class, 'destroy'])->name('formSearch6.martumpolDelete');

Route::get("pelayan", [pelayanController::class, 'index'])->name('formSearch7.pelayan');
Route::get('detailPelayan/{id}',[pelayanController::class,'show'])->name('forms7.detailPelayan');
Route::get('lihatDaftarPelayan/create',[pelayanController::class,'create'])->name('forms7.lihatDaftarPelayan');
Route::post('daftarPelayan/store',[pelayanController::class,'store'])->name('forms7.daftarPelayan');
Route::get('pelayan/edit/{id}', [pelayanController::class, 'edit'])->name('forms7.editPelayan');
Route::put('pelayan/update/{id}', [pelayanController::class, 'update'])->name('forms7.updatePelayan');
Route::delete('/pelayan/{id}', [pelayanController::class, 'destroy'])->name('formSearch7.pelayanDelete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
