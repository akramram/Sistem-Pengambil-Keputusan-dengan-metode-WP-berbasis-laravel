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
// Route::get('/analisa', function () {
//     $alternatif=DB::table('alternatif')->get();
//     $kriteria=DB::table('kriteria')->get();
//     $kep = DB::table('kriteria')->select('kepentingan')->get();
//     $keps=0;
//     // $kep = array_map(function($keps){
//     //     return(array)$keps;
//     // },$kep);

//     $a_count=DB::table('alternatif')->count();
//     $k_count=DB::table('kriteria')->count();

//     $tkep = 0;
//     $tbkep = 0;
//     return view('analisa',
//     compact('alternatif',
//             'kriteria',
//             'k_count',
//             'a_count',
//         'tkep','tbkep'),array('kep'=>$kep));
// });
Route::get('/analisa','analisaController@fix');