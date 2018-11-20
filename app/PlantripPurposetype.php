<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantripPurposetype extends Model
{
    public function PlantripPurpose(){
        return $this->hasOne('App\PlantripPurpose');
    }
}
