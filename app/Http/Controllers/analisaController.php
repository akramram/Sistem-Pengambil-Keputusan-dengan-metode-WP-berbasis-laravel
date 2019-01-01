<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use App\Alternatif;
use DB;

class analisaController extends Controller
{
    function get_kepentingan(){
        $kepentingan = DB::table('kriteria')->select()->get();
        
        // $b = kriteria::where('id_kriteria','=',1)->first();

        // $kep = ['id_kriteria','kriteria','kepentingan','cost_benefit'];

        // $convert = $kepentingan->kepentingan;



        // $i=0;
        // while ($row = $kepentingan->fetch_assoc()) {
        //     @$kep[$i] = $row["kepentingan"];
        //     $i++;
        // }
        return compact('kep');
    }
    
    function get_costbenefit(){
        $cb = kriteria::get()->toArray();
        // $i=0;
        // while ($row = $costbenefit->fetch_assoc()) {
        //     @$cb[$i] = $row["cost_benefit"];
        //     $i++;
        // }
        return $cb;
    }
    
    function get_alt_name(){ 
        $alt = kriteria::get()->toArray();
        // $i=0;
        // while ($row = $alternatif->fetch_assoc()) {
        //     @$alt[$i] = $row["alternatif"];
        //     $i++;
        // }
        return $alt;
    }
    
    function get_alternatif(){ 
        $alt = kriteria::get()->toArray();
        // $i=0;
        // while ($row = $alternatif->fetch_assoc()) {
        //     @$alt[$i][0] = $row["k1"];
        //     @$alt[$i][1] = $row["k2"];
        //     @$alt[$i][2] = $row["k3"];
        //     @$alt[$i][3] = $row["k4"];
        //     @$alt[$i][4] = $row["k5"];
        //     $i++;
        // }
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
                    
    public function analisa(){

        $alt = DB::table('alternatif')->select()->get();
        // DB::table('alternatif')->pluck('k1','k2','k3','k4','k5')->get();
        $alt_name = DB::table('alternatif')->pluck('alternatif')->all();
        // DB::table('alternatif')->pluck('alternatif')->all();
        end($alt_name); 
        $arl2 = key($alt_name)+1; //new
        
        $kep = self::get_kepentingan();
        // DB::table('kriteria')->pluck('kepentingan')->all();
        $cb = self::get_costbenefit();
        // DB::table('kriteria')->pluck('cost_benefit')->all();
        $k = kriteria::count();
        $a = alternatif::count();
        $tkep = 0;
        $tbkep = 0;
        
        // for($i=0;$i<$k;$i++){
        //     $tkep = $tkep + $kep[$i];  //180
        // }
        // for($i=0;$i<$k;$i++){
        //     $bkep[$i] = ($kep[$i]/$tkep); //5/18
        //     $tbkep = $tbkep + $bkep[$i]; //0,2778 + dst
        // }
        // for($i=0;$i<$k;$i++){
        //     if($cb[$i]=="cost"){
        //         $pangkat[$i] = (-1) * $bkep[$i];
        //     }
        //     else{
        //         $pangkat[$i] = $bkep[$i];
        //     }
        // }
        // for($i=0;$i<$a;$i++){
        //     for($j=0;$j<$k;$j++){
        //         $s[$i][$j] = pow(($alt[$i][$j]),$pangkat[$j]);
        //     }
        // $ss[$i] = $s[$i][0]*$s[$i][1]*$s[$i][2]*$s[$i][3]*$s[$i][4];
        
        // }
        // // echo "<b>Hasil Akhir</b></br>";
		// // 		echo "<table class='table table-striped table-bordered table-hover'>";
		// // 		echo "<thead><tr><th>Alternatif</th><th>V</th></tr></thead>";
		// 		$total = 0;
		// 		for($i=0;$i<$a;$i++){
		// 			$total = $total + $ss[$i];
		// 		}
		// 		for($i=0;$i<$a;$i++){
		// 			echo "<tr><td><b>".$alt_name[$i]."</b></td>";
		// 			$v[$i] = round($ss[$i]/$total,6);
		// 			echo "<td>".$v[$i]."</td></tr>";
		// 		}
		// 		echo "</table><hr>";
		// 		// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> vektor S <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< //
		// 		uasort($v,'cmp');
		// 					for($i=0;$i<$arl2;$i++){ //new for 8 lines below
		// 						if($i==0)
		// 							echo "<div class='alert alert-dismissible alert-info'><b><i>Dari tabel tersebut dapat disimpulkan bahwa ".$alt_name[array_search((end($v)), $v)]." mempunyai hasil paling tinggi, yaitu ".current($v);
		// 						elseif($i==($arl2-1))
		// 							echo "</br>Dan terakhir ".$alt_name[array_search((prev($v)), $v)]." dengan nilai ".current($v).".</i></b></div>";
		// 						else
		// 							echo "</br>Lalu diikuti dengan ".$alt_name[array_search((prev($v)), $v)]." dengan nilai ".current($v);
        //                     }
                            
        return view('analisa',compact('ss','alt','alt_name','kep'));
    }

    function analisis(){
        $alternatif = DB::table('alternatif')->select()->get();
        $alt_name = DB::table('alternatif')->pluck('alternatif')->all();
        $kriteria = DB::table('kriteria')->select()->get();
        $kcount = kriteria::count();
        $altcount = alternatif::count();
        $kep = DB::table('kriteria')->pluck('kepentingan')->all();
        $tkep = 0;
        $tbkep = 0;
        $cb = DB::table('kriteria')->pluck('cost_benefit')->all();
        
        foreach($alternatif as $alt=>$alternatifs){
            $id_alternatif    = $alternatifs->id_alternatif;
            $nalternatif       = $alternatifs->alternatif;
            $k1    = $alternatifs->k1;
            $k2    = $alternatifs->k2;
            $k3    = $alternatifs->k3;
            $k4    = $alternatifs->k4;
            $k5    = $alternatifs->k5;
        }

        for($i=0;$i<$kcount;$i++){
            $tkep = $tkep + $kep[$i];  
        }

        for($i=0;$i<$kcount;$i++){
            $bkep[$i] = ($kep[$i]/$tkep); //5/18
            $tbkep = $tbkep + $bkep[$i]; //0,2778 + dst
        }
        for($i=0;$i<$kcount;$i++){
            if($cb[$i]=="cost"){
                $pangkat[$i] = (-1) * $bkep[$i];
            }
            else{
                $pangkat[$i] = $bkep[$i];
            }
        }
        for($i=0;$i<$altcount;$i++){
            for($j=0;$j<$kcount;$j++){
                $s[$i][$j] = pow(($alt[$i][$j]),$pangkat[$j]);
            }
        $ss[$i] = $s[$i][0]*$s[$i][1]*$s[$i][2]*$s[$i][3]*$s[$i][4];
        }

        $total = 0;
        for($i=0;$i<$altcount;$i++){
            $total = $total + $ss[$i];
        }
        
        for($i=0;$i<$altcount;$i++){
            echo "<tr><td><b>".$alt_name[$i]."</b></td>";
            $v[$i] = round($ss[$i]/$total,6);
            echo "<td>".$v[$i]."</td></tr>";
        }

        return view('analisa', compact('alternatif','kriteria','altcount','kcount','ss','alt_name'));
    }
}
    function jum_kep(){
        $i=0;
        $alternatif = DB::table('alternatif')->select()->get();
        foreach($alternatif as $tkep){
            $tkep = $tkep + $tkep[$i];
            $i++;
        }
        return $tkep;
    }
    function hitung(){
        
        for($i=0;$i<$k_count;$i++){
            $bkep[$i] = ($kep[$i]/$tkep); //5/18
            $tbkep = $tbkep + $bkep[$i]; //0,2778 + dst
        }
    }

