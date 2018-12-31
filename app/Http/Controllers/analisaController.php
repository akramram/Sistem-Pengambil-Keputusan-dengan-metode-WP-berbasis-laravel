<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use App\Alternatif;
use DB;

class analisaController extends Controller
{
    
                    
    public function analisa(){

        $alt = DB::table('alternatif')->select()->get();
        $alt_name = DB::table('alternatif')->select('alternatif')->get();
        // end($alt_name); $arl2 = key($alt_name)+1; //new
        $kep = DB::table('kriteria')->select('kepentingan')->get();
        $cb = DB::table('kriteria')->select('cost_benefit')->get();
        $k = kriteria::count();
        $a = alternatif::count();
        $tkep = 0;
        $tbkep = 0;

        for($i=0;$i<$k;$i++){
            $tkep = $tkep + $kep[$i];  //18
        }
        for($i=0;$i<$k;$i++){
            $bkep[$i] = ($kep[$i]/$tkep); //5/18
            $tbkep = $tbkep + $bkep[$i]; //0,2778 + dst
        }
        for($i=0;$i<$k;$i++){
            if($cb[$i]=="cost"){
                $pangkat[$i] = (-1) * $bkep[$i];
            }
            else{
                $pangkat[$i] = $bkep[$i];
            }
        }
        for($i=0;$i<$a;$i++){
            for($j=0;$j<$k;$j++){
                $s[$i][$j] = pow(($alt[$i][$j]),$pangkat[$j]);
            }
        $ss[$i] = $s[$i][0]*$s[$i][1]*$s[$i][2]*$s[$i][3]*$s[$i][4];
        }
        return view('analisa',compact('ss','a'));
    }


    public function get_kepentingan(){
        $kepentingan=DB::table('kriteria')->get();
        $i=0;
        while ($row = $kepentingan->fetch_assoc()) {
        @$kep[$i] = $row["kepentingan"];
        $i++;
        }
        return $kep;
    }

    
    function get_costbenefit(){
        $costbenefit=DB::table('kriteria')->get();
        $i=0;
        while ($row = $costbenefit->fetch_assoc()) {
            @$cb[$i] = $row["cost_benefit"];
            $i++;
        }
        return $cb;
    }
    
    function get_alt_name(){
        $alternatif=DB::table('alternatif')->get();
        $i=0;
        while ($row = $alternatif->fetch_assoc()) {
            @$alt[$i] = $row["alternatif"];
            $i++;
        }
        return $alt;
    }
    
    public function get_alternatif(){
        $alternatif=DB::table('alternatif')->get();
        $i=0;
        while ($row = $alternatif->fetch_assoc()) {
            $alt[$i][0] = $row["k1"];
            $alt[$i][1] = $row["k2"];
            $alt[$i][2] = $row["k3"];
            $alt[$i][3] = $row["k4"];
            $alt[$i][4] = $row["k5"];
            $i++;
        }
        return $alt;
    }
    
    function cmp($a, $b){
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }

    function print_ar(array $x){	//just for print array
        echo "<pre>";
        print_r($x);
        echo "</pre></br>";
    }

    public function anal(){
        $alternatif=DB::table('alternatif')->get();
        $kriteria=DB::table('kriteria')->get();
        $kep = DB::table('kriteria')->select('kepentingan');
        $keps=0;
        // $kep = array_map(function($keps){
        //     return(array)$keps;
        // },$kep);

        $a_count=DB::table('alternatif')->count();
        $k_count=DB::table('kriteria')->count();

        $tkep = 0;
        $tbkep = 0;
        return view('analisa',
        compact('alternatif',
                'kriteria',
                'k_count',
                'a_count',
            'tkep','tbkep'),array('kep'=>$kep));
    }
    

}
