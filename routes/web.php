<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mekanik;
use App\Http\Controllers\Sparepart;
use App\Http\Controllers\Pembelian;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Petugas;
use App\Http\Controllers\AuthController;


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

Route::get('/', function(){
	return view('layouts/newlogin');
});

//login
Route::get('/newlogin', [AuthController::class, 'login']);

//register
Route::get('/newregister', [AuthController::class, 'register']);

//logout
Route::get('/logout', [AuthController::class, 'logout']);

//postlogin
Route::POST('/postlogin', [AuthController::class, 'postlogin']);

//reject
Route::get('/reject', [AuthController::class, 'reject'])->name('reject');

//rejectrole
Route::get('/rejectrole', [AuthController::class, 'rejectrole'])->name('rejectrole');


Route::group(['middleware' => 'auth'], function(){

	//dashboard
	Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth');

	//role dosen
	Route::group(['middleware' => 'CheckRole:kasir,admin'], function(){
		//Route dashboard
		Route::get('/dashboard', [Dashboard::class, 'dashb']);

		//Route Mekanik
		Route::get('/mekanik', [Mekanik::class, 'index']);
		//Route Mekanik Show
		Route::get('/mekanik/show/{id}', [Mekanik::class, 'show']);
		//Route mekanik Search
		Route::post('/mekanik/search', [Mekanik::class, 'search']);

		//Route Sparepart
		Route::get('/sparepart', [Sparepart::class, 'index']);
		//Route Sparepart Search
		Route::post('/sparepart/search', [Sparepart::class, 'search']);

		//Route pembelian
		Route::get('/pembelian', [Pembelian::class, 'index']);
		//form create data pembelian
		Route::get('/pembelian/create', [Pembelian::class, 'create']);
		//simpan Data pembelian
		Route::post('/pembelian/store', [Pembelian::class, 'store']);
		//delete data pembelian
		Route::get('/pembelian/delete/{id}', [Pembelian::class, 'destroy']);
		//Route pembelian Search
		Route::post('/pembelian/search', [Pembelian::class, 'search']);
		
	});

	//role admin
	Route::group(['middleware' => 'CheckRole:admin'], function(){
		//form create data Mekanik
		Route::get('/mekanik/create', [Mekanik::class, 'create']);
		//simpan Data Mekanik
		Route::post('/mekanik/store', [Mekanik::class, 'store']);
		//form edit data Mekanik
		Route::get('/mekanik/edit/{id}', [Mekanik::class, 'edit']);
		//simpan edit Data Mekanik
		Route::post('/mekanik/update/{id}', [Mekanik::class, 'update']);
		//delete data Mekanik
		Route::get('/mekanik/delete/{id}', [Mekanik::class, 'destroy']);

		//form create data sparepart
		Route::get('/sparepart/create', [Sparepart::class, 'create']);

		//simpan Data sparepart
		Route::post('/sparepart/store', [Sparepart::class, 'store']);
		//form edit data sparepart
		Route::get('/sparepart/edit/{id}', [Sparepart::class, 'edit']);
		//simpan edit Data sparepart
		Route::post('/sparepart/update/{id}', [Sparepart::class, 'update']);
		//delete data sparepart
		Route::get('/sparepart/delete/{id}', [Sparepart::class, 'destroy']);
		//Route sparepart Search
		Route::post('/sparepart/search', [Sparepart::class, 'search']);

		
		//Route Cetak PDF
		Route::get('/pembelian/cetakpdf', [Pembelian::class, 'printpdf']);
		//Route Export Excel
		Route::get('/pembelian/exportexcel', [Pembelian::class, 'printexcel']);
		//Route petugas
		Route::get('/petugas', [Petugas::class, 'index']);
		//form edit data petugas
		Route::get('/petugas/edit/{id}', [Petugas::class, 'edit']);
		//simpan edit Data petugas
		Route::post('/petugas/update/{id}', [Petugas::class, 'update']);
		//delete data petugas
		Route::get('/petugas/delete/{id}', [Petugas::class, 'destroy']);
	});
});