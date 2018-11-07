<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VmisVehicle extends Model
{
    public function VmisVehicleType()
    {   
        return $this->belongsTo('App\VmisVehicleType','vmis_vehicletype_id');
    }
    public function VmisVehicleDocument()
    {   
        return $this->hasMany('App\VmisVehicleDocument');
    }
    public function VmisVehicleDetails()
    {   
        return $this->hasOne('App\VmisVehicleDetails');
    }
}
