<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kriteriaController extends Controller
{
    public function showKriteria(){
        $results = DB::select('select * from kriteria');
    }
}
