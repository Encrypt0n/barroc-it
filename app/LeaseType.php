<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaseType extends Model
{
    protected $fillable = ['type'];

    protected $table = 'lease_types';

    public function leases(){
        return $this->hasMany('\App\Lease', 'lease_type_id');
    }
}
