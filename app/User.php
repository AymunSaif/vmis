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
        return $this->hasMany('App\VmisRequestToTransportOfficer','approvedby_user_id');
    }
    public function PlantripMember(){
        return $this->hasMany('App\PlantripMember');
    }
    public function UserDetail()
    {
      return $this->hasOne('App\UserDetail');
    }
}
