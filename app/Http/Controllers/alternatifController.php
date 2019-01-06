<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alternatif;

class alternatifController extends Controller
{
    public function add(){
      return view('addalternatif');
    }

    public function edit($id_alternatif){
      $data = Alternatif::find($id_alternatif);
      return view('editAlternatif',compact('data'));
    }

    public function destroy($id_alternatif){
     $data = Alternatif::find($id_alternatif);
     $data->delete();

     return redirect('/alternatif')->with('success', 'Data has been deleted Successfully');
    }

    public function addAlternatif(Request $req){
      $book = new Alternatif;
      $book->alternatif = $req->namaAlternatif;
      $book->k1 = $req->bahan;
      $book->k2 = $req->jenis;
      $book->k3 = $req->bentuk;
      $book->k4 = $req->berat;
      $book->k5 = $req->harga;
      $book->save();
      return redirect()->back()
      ->withSuccess(sprintf('Penambahan alternatif baru berhasil'));
    }

}
