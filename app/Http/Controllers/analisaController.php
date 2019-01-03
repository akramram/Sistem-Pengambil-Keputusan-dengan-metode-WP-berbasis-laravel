<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Library\Wp as Wp;
use App\Kriteria;
use App\Alternatif;
use DB;

class analisaController extends Controller
{

    function analisis(){

        $alternatif = DB::table('alternatif')->select()->get();
        $alt = DB::table('alternatif')->select('k1','k2','k3','k4','k5')->get();
        $altn = DB::table('alternatif')->select('alternatif')->get();
        $kriteria = DB::table('kriteria')->select()->get();
        $kcount = kriteria::count();
        $altcount = alternatif::count();
        $kepentingan = DB::table('kriteria')->select('kepentingan')->get();
        $tkep = 0;
        $tbkep = 0;
        $cb = DB::table('kriteria')->select('cost_benefit')->get();
        
        foreach($altn as $key => $value){
            foreach($value as $v){

                $alt_name[$key] = $v;
                
            }
            
        }
        foreach($kepentingan as $nama => $value){
            foreach($value as $isi){
                
                $tkep = $tkep + $isi;
            }
            
        }
        // for($i=0;$i<$kcount;$i++){
        //     $tkep = $tkep + $kep[$i];  //18
        // }
        
        foreach($kepentingan as $nama => $value){
            foreach($value as $v){
                
                $bkep[$nama] = ($v/$tkep);
                
            }
            
            
            $tbkep = $tbkep+$bkep[$nama];
        }
        

        // for($i=0;$i<$kcount;$i++){
        //     $bkep[$i] = ($kep[$i]/$tkep); //5/18
        //     $tbkep = $tbkep + $bkep[$i]; //0,2778 + dst
        // }

        foreach($cb as $nama => $isi){
            if($isi=="COST"){
                $pangkat[$nama] = (-1) * $bkep[$nama];
            }
            else{
                $pangkat[$nama] = $bkep[$nama];
            }
            
        }
        
        // for($i=0;$i<$kcount;$i++){
        //     if($cb[$i]=="cost"){
        //         $pangkat[$i] = (-1) * $bkep[$i];
        //     }
        //     else{
        //         $pangkat[$i] = $bkep[$i];
        //     }
        // }
        foreach($alt as $nama => $isi){
            $i=0;
            foreach($isi as $v){
                
                $s[$nama][$i] = pow($v,$pangkat[$nama]);
                $i++;
            }
            // dd($s[0][0]);
            $ss[$nama] = $s[$nama][0]*$s[$nama][1]*$s[$nama][2]*$s[$nama][3]*$s[$nama][4];
        }
        // dd($ss);
        // for($i=0;$i<$altcount;$i++){
        //     for($j=0;$j<$kcount;$j++){
        //         $s[$i][$j] = pow(($alt[$i][$j]),$pangkat[$j]);
        //     }
        // $ss[$i] = $s[$i][0]*$s[$i][1]*$s[$i][2]*$s[$i][3]*$s[$i][4];
        // }


        $total = 0;
        // for($i=0;$i<$altcount;$i++){
        //     $total = $total + $ss[$i];
        // }
        
        foreach($ss as $key){
            
            $total = $total + $ss[$key];
        }
        //  dd($ss);
        foreach($ss as $key => $value){
            
            $vs[$key] = $ss[$key]/$total;
        }
        
        // for($i=0;$i<$altcount;$i++){
        //     // echo "<tr><td><b>".$alt_name[$i]."</b></td>";
        //     $v[$i] = round($ss[$i]/$total,6);
        //     // echo "<td>".$v[$i]."</td></tr>";
        // }

        return view('analisa', compact('alternatif','kriteria','altcount','kcount','ss','alt_name','vs'));
    }
    

    function fix (){

        // $alternatif = DB::table('alternatif')->select('k1', 'k2', 'k3', 'k4', 'k5')->get();
        $alternatif = alternatif::get(['k1', 'k2', 'k3', 'k4', 'k5'])->toArray();
        $kriteria = DB::table('kriteria')->select('kepentingan')->get();
        
        
        $wp = new Wp($alternatif, $kriteria);
        $hasil = $wp->make();


        foreach($hasil as $key => $value){

            $res[$key] = [
                'id' => $key + 1,
                'hasil' => $value
            ]; 
        }

        DB::table('hasil')->insert($res);

        return view('analisa',compact('res'));
    }
    
    
}