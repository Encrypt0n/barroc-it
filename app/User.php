<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function companydetail() {
        return $this->hasOne('\App\CompanyDetail', 'user_id');
    }






    public function invoice() {
        return $this->hasMany('\App\Invoice', 'lease_id');
    }

    public function lease() {
        return $this->hasMany('\App\Lease', 'customer_id');
    }

    public function Role(){
        return $this->Hasone('\App\Role', 'id');
    }

    public function customers(){
        return $this->hasMany('\App\Lease', 'customer_id');
    }


    public function finances(){
        return $this->hasMany('\App\Lease', 'finance_id');

    }
}
