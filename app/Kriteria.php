<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table='kriteria';
    protected $fillable = [
        'kriteria',
        'kepentingan',
        'cost_benefit'
    ];

    // public function nilai(){
    //     return $this->hasMany('App\Nilai','id_kriteria','id');
    // }
}
