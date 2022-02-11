<?php

use App\Http\Controllers\Backend\PenggunaController;
use App\Http\Controllers\Backend\KriteriaController;
use App\Http\Controllers\Backend\SubKriteriaController;
use App\Http\Controllers\Backend\ProjectController;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['belum_login'])->group(function () {
    Route::get('/','App\Http\Controllers\Backend\PenggunaController@indexExt')->name('login');
    Route::get('/login','App\Http\Controllers\Backend\PenggunaController@indexExt');
    Route::post('aksilogin','App\Http\Controllers\Backend\PenggunaController@aksilogin')->name('login-admin');
    Route::post('/register-user','App\Http\Controllers\Backend\PenggunaController@aksiregister')->name('saveuser');
    Route::get('register','App\Http\Controllers\Backend\PenggunaController@register')->name('register');
});

Route::middleware(['sudah_login'])->group(function () {
    Route::get('logout','App\Http\Controllers\Backend\PenggunaController@logout')->name('logout');
    Route::get('home','App\Http\Controllers\Backend\HomeController@index')->name('home');
    // Route::post('carinilai', 'App\Http\Controllers\Backend\HomeController@cariNilai')->name('nilai.cari');

    //Pengguna
    Route::get('/pengguna','App\Http\Controllers\Backend\PenggunaController@index')->name('pengguna');
    Route::get('/pengguna/create','App\Http\Controllers\Backend\PenggunaController@create')->name('pengguna.create');
    Route::post('/pengguna','App\Http\Controllers\Backend\PenggunaController@store')->name('pengguna.store');
    Route::get('/pengguna/{pengguna}','App\Http\Controllers\Backend\PenggunaController@edit')->name('pengguna.edit');
    Route::put('/pengguna/{pengguna}','App\Http\Controllers\Backend\PenggunaController@update')->name('pengguna.update');
    Route::get('/pengguna/delete/{pengguna}','App\Http\Controllers\Backend\PenggunaController@destroy')->name('pengguna.delete');

    //kriteria
    Route::get('/kriteria',[KriteriaController::class, 'index'])->name('kriteria');
    Route::get('/kriteria/create',[KriteriaController::class, 'create'])->name('kriteria.create');
    Route::post('/kriteria',[KriteriaController::class, 'store'])->name('kriteria.store');
    Route::get('/kriteria/{kriteria}',[KriteriaController::class, 'edit'])->name('kriteria.edit');
    Route::put('/kriteria/{kriteria}',[KriteriaController::class, 'update'])->name('kriteria.update');
    Route::get('/kriteria/delete/{kriteria}',[KriteriaController::class, 'destroy'])->name('kriteria.delete');

    // sk
    Route::get('/sk',[SubKriteriaController::class, 'index'])->name('sk');
    Route::get('/sk/create',[SubKriteriaController::class, 'create'])->name('sk.create');
    Route::post('/sk',[SubKriteriaController::class, 'store'])->name('sk.store');
    Route::get('/sk/{sk}',[SubKriteriaController::class, 'edit'])->name('sk.edit');
    Route::put('/sk/{sk}',[SubKriteriaController::class, 'update'])->name('sk.update');
    Route::get('/sk/delete/{sk}',[SubKriteriaController::class, 'destroy'])->name('sk.delete');


});

