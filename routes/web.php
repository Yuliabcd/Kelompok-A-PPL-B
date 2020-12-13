<?php

use App\Http\Controllers\C_Aktivitas;
use App\Http\Controllers\C_DataLahan;
use App\Http\Controllers\C_DetailAktivitas;
use App\Http\Controllers\C_EditAktivitas;
use App\Http\Controllers\C_EditDataLahan;
use App\Http\Controllers\C_HalamanUtama;
use App\Http\Controllers\C_KelolaLahan;
use App\Http\Controllers\C_ListAktivitas;
use App\Http\Controllers\C_Permintaan;
use App\Http\Controllers\C_RekapPermintaan;
use App\Http\Controllers\C_TambahAktivitas;
use App\Http\Controllers\C_TambahDataLahan;
use App\Http\Controllers\C_TambahPermintaan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LahanController;
use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\PermintaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
     return redirect(route('dashboard'));
 });
Route::middleware(['auth:sanctum','web', 'verified'])->group(function() {
    Route::view('/dashboard', 'pages.V_HalamanUtama')->name('dashboard');
    Route::get('/redirect/data-lahan', [C_HalamanUtama::class, 'getPageKelolaLahan'])->name('getPageKelolaLahan');
    Route::get('/redirect/aktivitas', [C_HalamanUtama::class, 'getPageDataAktivitas'])->name('getPageDataAktivitas');
    Route::get('/redirect/permintaan', [C_HalamanUtama::class, 'getPagePermintaan'])->name('getPagePermintaan');

    Route::get('/data-lahan', [C_KelolaLahan::class, 'setPageKelolaLahan'])->name('setPageKelolaLahan');
    Route::get('/redirect/data-lahan/create', [C_KelolaLahan::class, 'getFormDataLahan'])->name('getFormDataLahan');
    Route::get('/redirect/data-lahan/edit/{id}', [C_KelolaLahan::class, 'getFormEditDataLahan'])->name('getFormEditDataLahan');
    Route::get('/redirect/data-lahan/show/{id}', [C_KelolaLahan::class, 'getDataLahan'])->name('getDataLahan');

    Route::get('/data-lahan/create', [C_TambahDataLahan::class, 'setPageTambahDataLahan'])->name('setPageTambahDataLahan');
    Route::post('/data-lahan/create', [C_TambahDataLahan::class, 'simpan'])->name('simpanLahan');

    Route::get('/data-lahan/edit/{id}', [C_EditDataLahan::class, 'setPageEditDataLahan'])->name('setPageEditDataLahan');
    Route::put('/data-lahan/edit/{id}', [C_EditDataLahan::class, 'update'])->name('updateLahan');

    Route::get('/data-lahan/show/{id}', [C_DataLahan::class, 'setPageDetailDataLahan'])->name('setPageDetailDataLahan');

//Aktivitas
    Route::get('/aktivitas', [C_Aktivitas::class, 'setPageDataAktivitas'])->name('setPageDataAktivitas');
    Route::get('/redirect/aktivitas/lahan/{id}', [C_Aktivitas::class, 'getPageListAktivitasLahan'])->name('getPageListAktivitasLahan');

    Route::get('/aktivitas/lahan/{id}', [C_ListAktivitas::class, 'setPageListAktivitasLahan'])->name('setPageListAktivitasLahan');
    Route::get('/redirect/aktivitas/lahan/{id}/tanggapan/{tanggapan}', [C_ListAktivitas::class, 'getPageDetailAktivitas'])->name('getPageDetailAktivitas');
    Route::get('/redirect/aktivitas/lahan/{id}/create', [C_ListAktivitas::class, 'getFormDataAktivitas'])->name('getFormDataAktivitas');
    Route::get('/redirect/aktivitas/lahan/{id}/edit', [C_ListAktivitas::class, 'getFormEditAktivitas'])->name('getFormEditAktivitas');

    Route::get('/aktivitas/lahan/{id}/create', [C_TambahAktivitas::class, 'setFormDataAktivitas'])->name('setFormDataAktivitas');
    Route::post('/aktivitas/lahan/{id}', [C_TambahAktivitas::class, 'simpan'])->name('simpanAktivitas');

    Route::get('/aktivitas/lahan/{id}/tanggapan/{tanggapan}', [C_DetailAktivitas::class, 'setPageDetailAktivitas'])->name('setPageDetailAktivitas');
    Route::post('/aktivitas/lahan/{id}/tanggapan/{tanggapan}', [C_DetailAktivitas::class, 'simpan'])->name('simpanKomentar');

    Route::get('/aktivitas/lahan/{id}/edit', [C_EditAktivitas::class, 'setPageEditAktivitas'])->name('setPageEditAktivitas');
    Route::put('/aktivitas/lahan/{id}', [C_EditAktivitas::class, 'update'])->name('updateAktivitas');

    //Permintaan
    Route::get('/permintaan',[C_Permintaan::class,'setPagePermintaan'])->name('setPagePermintaan');
    Route::get('/redirect/permintaan/rekap/{id}',[C_Permintaan::class,'getPageRekapPermintaan'])->name('getPageRekapPermintaan');

    Route::get('/permintaan/rekap/{id}',[C_RekapPermintaan::class,'setPageRekapPermintan'])->name('setPageRekapPermintan');
    Route::get('/redirect/permintaan/rekap/{id}/create',[C_RekapPermintaan::class,'getFormDataPermintaan'])->name('getFormDataPermintaan');
    Route::get('/redirect/permintaan/rekap/{id}/edit/{permintaan}',[C_RekapPermintaan::class,'getFormUbahDataPermintaan'])->name('getFormUbahDataPermintaan');
    Route::get('/permintaan/rekap/{id}/{permintaan}/status/{status}',[C_RekapPermintaan::class,'simpanStatusPermintaan'])->name('simpanStatusPermintaan');



    Route::get('/permintaan/rekap/{id}/create',[C_TambahPermintaan::class,'setFormDataPermintaan'])->name('setFormDataPermintaan');
    Route::post('/permintaan/rekap/{id}', [C_TambahPermintaan::class, 'simpan'])->name('simpanPermintaan');
    Route::get('/permintaan/rekap/{id}/edit/{permintaan}', [C_TambahPermintaan::class, 'setFormUbahDataPermintaan'])->name('setFormUbahDataPermintaan');
    Route::put('/permintaan/rekap/{id}/edit/{permintaan}', [C_TambahPermintaan::class, 'update'])->name('updatePermintaan');




});

//
//Route::get('/data-lahan/create',[C_TambahDataLahan::class,'setPageTambahDataLahan'] )->name('setPageTambahDataLahan');
//Route::post('/data-lahan/create',[C_TambahDataLahan::class,'simpan'] )->name('simpanLahan');
//
//Route::get('/data-lahan/edit/{id}',[C_EditDataLahan::class,'setPageEditDataLahan'] )->name('setPageEditDataLahan');
//Route::put('/data-lahan/edit/{id}',[C_EditDataLahan::class,'update'] )->name('updateLahan');
//
//Route::get('/data-lahan/show/{id}',[C_DataLahan::class,'setPageDetailDataLahan'])->name('setPageDetailDataLahan');





//
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');


//
////LAHAN
//Route::get('/lahan', [LahanController::class, 'index'])->middleware('auth'); //get = nampilin data lahan
//Route::get('/lahan/create', [LahanController::class, 'create'])->middleware('auth'); //get = nampilin form tambah lahan
//Route::get('/lahan/{lahan}', [LahanController::class, 'show'])->middleware('auth'); //get = nampilin detail dari setiap lahan
//Route::post('/lahan/store', [LahanController::class, 'store'])->middleware('auth'); //mengirim data ke store/ insert data ke database
//Route::delete('/lahan/{lahan}', [LahanController::class, 'destroy'])->middleware('auth');
//Route::get('/lahan/{lahan}/edit', [LahanController::class, 'edit'])->middleware('auth'); //get = nampilin detail dari setiap lahan yang ingin diedit
//Route::patch('/lahan/{lahan}', [LahanController::class, 'update'])->middleware('auth');
//
////AKTIVITAS
//Route::get('/aktivitas', [AktivitasController::class, 'index'])->middleware('auth');
//Route::get('/aktivitas/list/{aktivitas}', [AktivitasController::class, 'list'])->middleware('auth');
//Route::get('/aktivitas/create/{lahan}', [AktivitasController::class, 'create'])->middleware('auth');
//Route::get('/aktivitas/show/{aktivitas}', [AktivitasController::class, 'show'])->middleware('auth');
//
//Route::post('/aktivitas/store', [AktivitasController::class, 'store'])->middleware('auth');
//Route::get('/aktivitas/{aktivitas}/edit', [AktivitasController::class, 'edit'])->middleware('auth');
//Route::patch('/aktivitas/{aktivitas}', [AktivitasController::class, 'update'])->middleware('auth');
//
////PERMINTAAN
//Route::get('/permintaan', [PermintaanController::class, 'index'])->middleware('auth');
//Route::get('/permintaan/create', [PermintaanController::class, 'create'])->middleware('auth');
//Route::get('/permintaan/{permintaan}', [LahanController::class, 'show'])->middleware('auth');
