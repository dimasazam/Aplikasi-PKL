<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Controller;

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

/*
Route::get('/', function () {
    return view('admin.layout.app');
});
*/

Route::get('/', [Controller::class,'index']);
Route::get('/data_barang', [Controller::class,'data_barang']);
Route::post('/tambahbarang', [Controller::class,'tambah_barang']);
Route::get('/{Databarang:namabarang}/{id}', [Controller::class,'item']);
