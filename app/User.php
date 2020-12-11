<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'noHp', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*public function setTanggalLahirAttribute($value)
    {
      $this->attributes['tanggal_lahir'] = Carbon::createFormFormat('m/d/Y', $value)->format('Y-m-d');
    }*/

    public function roles(){
      return $this->belongsToMany('App\Role');
    }
    public function hasAnyRoles($roles){
      return null !== $this->roles()->whereIn('name', $roles)->first();
    }
    public function hasAnyRole($role){
      return null !== $this->roles()->where('name', $role)->first();
    }

    public function toko(){
      return $this->hasOne('App\Toko');
    }
}
