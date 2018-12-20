<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VmisRequestToTransportOfficerLog extends Model
{

    protected $table='vmis_request_to_transport_officers_logs';

    public function PlantripTriprequestLog()
    {   
        return $this->belongsTo('App\PlantripTriprequestLog','plantrip_triprequest_log_id');
    }
    public function PlantripTriprequest()
    {   
        return $this->belongsTo('App\PlantripTriprequest','plantrip_triprequest_id');
    }
    public function VmisVehicle()
    {   
        return $this->belongsTo('App\VmisVehicle');
    }
    public function VmisDriver()
    {   
        return $this->belongsTo('App\VmisDriver');
    }
    public function User()
    {   
        return $this->belongsTo('App\User','approvedby_user_id');
    }
    public function TransportOfficerUser()
    {   
        return $this->belongsTo('App\User','transportOfficer_user_id');
    }
    public function RecommendedByUser()
    {   
        return $this->belongsTo('App\User','recommendedby_user_id');
    }
    public function VmisAssignedVehicleLog()
    {   
        return $this->hasMany('App\VmisAssignedVehicleLog','vmis_request_to_transport_officers_log_id');
    }
    public function VmisAssignedDriverLog()
    {   
        return $this->hasMany('App\VmisAssignedDriverLog');
    }
}
