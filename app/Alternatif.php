<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    //
    protected $table ='alternatif';
    protected $fillable = [
       'alternatif',
       'k1',
       'k2',
       'k3',
       'k4',
       'k5'
   ];

}
