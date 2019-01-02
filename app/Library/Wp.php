<?php

namespace App\Library;

use Illuminate\Database\Eloquent\Model;

class Wp extends Model
{
    public $alternatif;
    public $kriteria;


    public function __construct( $alternatif, $kriteria){

        $this->alternatif = $alternatif;
        $this->kriteria = $kriteria;
    }

    public function make(){

        $hasil = $this->alternatifPangkat($this->alternatif);
        return $hasil;
    }

    public function pangkatBobot($kriteria){


        $value = 0;

        foreach ($this->kriteria as $key => $v){
            $value = $value + $v->kepentingan;
        }

        foreach($this->kriteria as $key => $v){
            $pangkatBobot[$key] = $v->kepentingan / $value;
        }

        return $pangkatBobot;
    }
    
    

    public function alternatifPangkat($alternatif){

        $pangkatBobot = $this->pangkatBobot($this->kriteria);
        
        foreach($alternatif as $key => $value){
            dd($value);
            $alternatifBobot[$key][0] = pow($value[0], (-1 * ($pangkatBobot[0])));
        
            $alternatifBobot[$key][1] = pow($value[1],  ($pangkatBobot[1]));
            
            $alternatifBobot[$key][2] = pow($value[2], (-1 * ($pangkatBobot[2])));

            $alternatifBobot[$key][3] = pow($value[3],  ($pangkatBobot[3]));
            
            $alternatifBobot[$key][4] = pow($value[4], (-1 * ($pangkatBobot[4])));

            
            // foreach($value as $i => $v){
            //     if($i %2 == 0)  $alternatifBobot[$key][$i] = pow($v, (-1 * ($pangkatBobot[$i])));

            //     else $alternatifBobot[$key][$i] = pow($v,  ($pangkatBobot[$i]));

            // }
        }

        

        $alt_sum = [1, 1, 1, 1, 1];

        foreach($alternatifBobot as $key => $value){
           foreach($value as $k => $v){
            $alt_sum[$key] = $alt_sum[$key] * $v;
           }

           $alt_sums = $alt_sums + $alt_sum;
        }

        foreach($alternatifBobot as $key => $value){

            $final[$key] = $value / $alt_sums;
        }

        return $final;

    }
}
