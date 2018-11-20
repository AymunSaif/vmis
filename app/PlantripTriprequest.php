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
    public function PlantripPurpose(){
        return $this->hasMany('App\PlantripPurpose');
    }
    public function VmisRequestToTransportOfficer()
    {   
        return $this->hasOne('App\VmisRequestToTransportOfficer');
    }
}
