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

Route::resource('alternatif', 'AltController');

Route::get('/', function () {
    return view('home');
});
Route::get('/kriteria', function(){
    $kriteria=DB::table('kriteria')->get();

    return view('kriteria',['kriteria'=>$kriteria]);
});

Route::get('/alternatif', function(){
    $alternatif=DB::table('alternatif')->get();
    $kriteria=DB::table('kriteria')->get();

    return view('alternatif',compact('kriteria','alternatif'));
});

// Route::get('/editAlternatif', function(){
//     $alternatif=DB::table('kriteria')->get();
//
//     return view('alternatif', compact('alternatif'));
// });

Route::get('/addalternatif', 'alternatifController@add');
Route::get('/editAlternatif/{$id_alternatif}', 'alternatifController@edit')-> name('editAlternatif');
Route::post('/deletealternatif/{$id_alternatif}', 'alternatifController@destroy')->name('destroy');
Route::post('/addalter', 'alternatifController@addAlternatif');
Route::get('/analisa','analisaController@analisis');
