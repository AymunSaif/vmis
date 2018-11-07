<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VmisVehicleType extends Model
{
    protected $table='vmis_vehicletypes';
    public function VmisVehicle()
    {   
        return $this->hasMany('App\VmisVehicle');
    }
}
