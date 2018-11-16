<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VmisDriver extends Model
{
    // protected $table="vmis_drivers";
    public function VmisDocument()
    {   
        return $this->hasMany('App\VmisDriverDocument');
    }
    public function Users()
    {   
        return $this->belongsTo('App\Users');
    }
    public function VmisRequestToTransportOfficer()
    {   
        return $this->hasMany('App\VmisRequestToTransportOfficer');
    }
    
}
