<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoleAndPermission;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function VmisDriver(){
        return $this->hasOne('App\VmisDriver');
    }
    public function VmisRequestToTransportOfficer(){
        return $this->hasOne('App\VmisRequestToTransportOfficer','approvedby_user_id');
    }
    public function TransportOfficerUser(){
        return $this->hasOne('App\VmisRequestToTransportOfficer','transportOfficer_user_id');
    }

    public function RecommendedByUser(){
        return $this->hasOne('App\VmisRequestToTransportOfficer','recommendedby_user_id');
    }
    public function RemrksByUser(){
        return $this->hasMany('App\PlantripRemark','remarksby_user_id');
      }

    public function PlantripMember(){
        return $this->hasMany('App\PlantripMember');
    }
    public function UserDetail()
    {
      return $this->hasOne('App\UserDetail');
    }
}
