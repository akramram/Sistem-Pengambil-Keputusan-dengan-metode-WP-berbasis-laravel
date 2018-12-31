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
}
