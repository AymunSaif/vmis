<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantripTriprequest extends Model
{
    public function PlantripTriptype(){
        return $this->belongsTo('App\PlantripTriptype');
    }
    public function User(){
        return $this->belongsTo('App\User');
    }
    public function PlantripPurposes(){
        return $this->belongsTo('App\PlantripPurposes');
    }
    public function vmis_requesttotransportofficer()
    {   
        return $this->hasMany('App\vmis_requesttotransportofficer');
    }
}
