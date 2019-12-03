<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    protected $fillable = ['bkr'];

    public function User()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }
}
