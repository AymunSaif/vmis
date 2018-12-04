<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VmisVehicleRepairanceDate extends Model
{
    public function VmisVehicleDetail()
    {   
        return $this->belongsTo('App\VmisVehicleDetails');
    }
}
