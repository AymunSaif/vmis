<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantripSubcitytype extends Model
{
    public function PlantripPurpose(){
        return $this->hasMany('App\PlantripPurpose');
    }
}
