<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VmisAssignedVehiclesLog extends Model
{

    public function VmisRequestToTransportOfficerLog()
    {   
        return $this->belongsTo('App\VmisRequestToTransportOfficerLog','vmis_request_to_transport_officers_log_id');
    }
   
    public function VmisVehicle()
    {   
        return $this->belongsTo('App\VmisVehicle');
    }
}
