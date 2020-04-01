<?php

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



Route::resource('/datapenyakits','DataPenyakitController');
Route::resource('/datadokters', 'DataDokterController');
Route::resource('/dataobats', 'DataObatController');
Route::resource('/datapasiens', 'DataPasienController');


// per Kelas
// Route::get('/daftarmhs/6A', 'DaftarMhsController@kelasA');
// Route::get('/daftarmhs/6B', 'DaftarMhsController@kelasB');
// Route::get('/daftarmhs/6C', 'DaftarMhsController@kelasC');
// Route::get('/daftarmhs/6D', 'DaftarMhsController@kelasD');

// Route::get('/pegawai/{nama}', 'PegawaiController@index');
