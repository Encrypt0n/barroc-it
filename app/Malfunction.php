<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malfunction extends Model
{
    public function companyDetail() {
        return $this->belongsTo('\App\CompanyDetail', 'company_id');
    }
}
