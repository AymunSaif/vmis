<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantripVisitreason extends Model
{
    public function PlantripPurpose(){
        return $this->hasOne('App\PlantripPurpose');
    }
}
