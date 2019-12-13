<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    protected $fillable = ['bkr', 'note'];

    protected $table = 'company_details';

    public function User()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }

   /* public function Quotation()
    {
        return $this->belongsTo('\App\Quotations', 'company_id');
    }*/

    public function quotations() {
        return $this->hasMany('\App\Quotations', 'company_id');
    }

    public function lease() {
        return $this->hasMany('\App\Lease', 'customer_id');
    }




}
