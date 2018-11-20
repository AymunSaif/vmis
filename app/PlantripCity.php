<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantripCity extends Model
{
     public function District()
     {
        return $this->belongsTo('App\District');
    }    //
    public function PlantripTriplocation()
    {
       return $this->hasMany('App\PlantripTriplocation');
   }  
}
