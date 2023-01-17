<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\PotraitController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\KomersialController;
use App\Http\Controllers\CosplayController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PengeluaranController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('agenda')->group(function(){
	Route::get('/', [AgendaController::class, 'index'])->name('agenda');
	Route::post('/store', [AgendaController::class, 'store'])->name('agendaStore');
	Route::get('/create', [AgendaController::class, 'create'])->name('agendaCreate');
	Route::post('/destroy', [AgendaController::class, 'destroy'])->name('agendaDestroy');
	Route::get('/edit/{id}', [AgendaController::class, 'edit'])->name('agendaEdit');
	Route::get('/show/{id}', [AgendaController::class, 'show'])->name('agendaShow');
	Route::post('/update', [AgendaController::class, 'update'])->name('agendaUpdate');
	Route::post('/proses', [AgendaController::class, 'proses'])->name('agendaKu');
});

Route::prefix('dashboard')->group(function(){
	Route::get('/', [DashboardController::class, 'index'])->name('dashboard');	
});

Route::prefix('pelanggan')->group(function(){
	Route::get('/', [PelangganController::class, 'index'])->name('pelanggan');
	Route::post('/store', [PelangganController::class, 'store'])->name('pelangganStore');
	Route::get('/create', [PelangganController::class, 'create'])->name('pelangganCreate');
	Route::post('/destroy', [PelangganController::class, 'destroy'])->name('pelangganDestroy');
	Route::get('/edit/{id}', [PelangganController::class, 'edit'])->name('pelangganEdit');
	Route::get('/show/{id}', [PelangganController::class, 'show'])->name('pelangganShow');
	Route::post('/update', [PelangganController::class, 'update'])->name('pelangganUpdate');
	Route::post('/proses', [PelangganController::class, 'proses'])->name('pelangganKu');
});

Route::prefix('pengeluaran')->group(function(){
	Route::get('/', [PengeluaranController::class, 'index'])->name('pengeluaran');
	Route::post('/store', [PengeluaranController::class, 'store'])->name('pengeluaranStore');
	Route::get('/create', [PengeluaranController::class, 'create'])->name('pengeluaranCreate');
	Route::post('/destroy', [PengeluaranController::class, 'destroy'])->name('pengeluaranDestroy');
	Route::get('/edit/{id}', [PengeluaranController::class, 'edit'])->name('pengeluaranEdit');
	Route::get('/show/{id}', [PengeluaranController::class, 'show'])->name('pengeluaranShow');
	Route::post('/update', [PengeluaranController::class, 'update'])->name('pengeluaranUpdate');
	Route::post('/proses', [PengeluaranController::class, 'proses'])->name('pengeluaranKu');
});


Route::get('/', [AgendaController::class, 'indexHome']);

Route::prefix('wedding')->group(function(){
	Route::get('/', [WeddingController::class, 'index'])->name('wedding');
	Route::post('/store', [WeddingController::class, 'store'])->name('weddingStore');
	Route::get('/create', [WeddingController::class, 'create'])->name('weddingCreate');
	Route::post('/destroy', [WeddingController::class, 'destroy'])->name('weddingDestroy');
	Route::get('/edit/{id}', [WeddingController::class, 'edit'])->name('weddingEdit');
	Route::get('/show/{id}', [WeddingController::class, 'show'])->name('weddingShow');
	Route::get('/foto', [WeddingController::class, 'foto'])->name('weddingFoto');
	Route::post('/update', [WeddingController::class, 'update'])->name('weddingUpdate');
	Route::post('/proses', [WeddingController::class, 'proses'])->name('weddingKu');
});

Route::prefix('potrait')->group(function(){
	Route::get('/', [PotraitController::class, 'index'])->name('potrait');
	Route::post('/store', [PotraitController::class, 'store'])->name('potraitStore');
	Route::get('/create', [PotraitController::class, 'create'])->name('potraitCreate');
	Route::post('/destroy', [PotraitController::class, 'destroy'])->name('potraitDestroy');
	Route::get('/edit/{id}', [PotraitController::class, 'edit'])->name('potraitEdit');
	Route::get('/show/{id}', [PotraitController::class, 'show'])->name('potraitShow');
	Route::get('/foto', [PotraitController::class, 'foto'])->name('potraitFoto');
	Route::post('/update', [PotraitController::class, 'update'])->name('potraitUpdate');
	Route::post('/proses', [PotraitController::class, 'proses'])->name('potraitKu');
});

Route::prefix('studio')->group(function(){
	Route::get('/', [StudioController::class, 'index'])->name('studio');
	Route::post('/store', [StudioController::class, 'store'])->name('studioStore');
	Route::get('/create', [StudioController::class, 'create'])->name('studioCreate');
	Route::post('/destroy', [StudioController::class, 'destroy'])->name('studioDestroy');
	Route::get('/edit/{id}', [StudioController::class, 'edit'])->name('studioEdit');
	Route::get('/show/{id}', [StudioController::class, 'show'])->name('studioShow');
	Route::get('/foto', [StudioController::class, 'foto'])->name('studioFoto');
	Route::post('/update', [StudioController::class, 'update'])->name('studioUpdate');
	Route::post('/proses', [StudioController::class, 'proses'])->name('studioKu');
});

Route::prefix('komersial')->group(function(){
	Route::get('/', [KomersialController::class, 'index'])->name('komersial');
	Route::post('/store', [KomersialController::class, 'store'])->name('komersialStore');
	Route::get('/create', [KomersialController::class, 'create'])->name('komersialCreate');
	Route::post('/destroy', [KomersialController::class, 'destroy'])->name('komersialDestroy');
	Route::get('/edit/{id}', [KomersialController::class, 'edit'])->name('komersialEdit');
	Route::get('/show/{id}', [KomersialController::class, 'show'])->name('komersialShow');
	Route::get('/foto', [KomersialController::class, 'foto'])->name('komersialFoto');
	Route::post('/update', [KomersialController::class, 'update'])->name('komersialUpdate');
	Route::post('/proses', [KomersialController::class, 'proses'])->name('komersialKu');
});

Route::prefix('cosplay')->group(function(){
	Route::get('/', [CosplayController::class, 'index'])->name('cosplay');
	Route::post('/store', [CosplayController::class, 'store'])->name('cosplayStore');
	Route::get('/create', [CosplayController::class, 'create'])->name('cosplayCreate');
	Route::post('/destroy', [CosplayController::class, 'destroy'])->name('cosplayDestroy');
	Route::get('/edit/{id}', [CosplayController::class, 'edit'])->name('cosplayEdit');
	Route::get('/show/{id}', [CosplayController::class, 'show'])->name('cosplayShow');
	Route::get('/foto', [CosplayController::class, 'foto'])->name('cosplayFoto');
	Route::post('/update', [CosplayController::class, 'update'])->name('cosplayUpdate');
	Route::post('/proses', [CosplayController::class, 'proses'])->name('cosplayKu');
});

Route::prefix('group')->group(function(){
	Route::get('/', [GroupController::class, 'index'])->name('group');
	Route::post('/store', [GroupController::class, 'store'])->name('groupStore');
	Route::get('/create', [GroupController::class, 'create'])->name('groupCreate');
	Route::post('/destroy', [GroupController::class, 'destroy'])->name('groupDestroy');
	Route::get('/edit/{id}', [GroupController::class, 'edit'])->name('groupEdit');
	Route::get('/show/{id}', [GroupController::class, 'show'])->name('groupShow');
	Route::get('/foto', [GroupController::class, 'foto'])->name('groupFoto');
	Route::post('/update', [GroupController::class, 'update'])->name('groupUpdate');
	Route::post('/proses', [GroupController::class, 'proses'])->name('groupKu');
});

