<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    protected $table = 'leases';

    protected $fillable = ['lease_type_id', 'customer_id', 'finance_id'];

    public function leaseType(){
        return $this->belongsTo('\App\LeaseType', 'lease_type_id');
    }

    public function customer(){
        return $this->belongsTo('\App\User', 'customer_id');
    }

    public function finance(){
        return $this->belongsTo('\App\User', 'finance_id');
    }

    public function invoice() {
        return $this->hasOne('\App\Invoice', 'lease_id');
    }
}
