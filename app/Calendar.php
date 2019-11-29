<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    public function CalendarType()
    {
        return $this->belongsTo('\App\CalendarType', 'type_id');
    }

    public function Company()
    {
        return $this->belongsTo('\App\CompanyDetail', 'company_id');
    }

    public function User()
    {
        return $this->belongsTo('\App\User', 'maintenance_id');
    }
}
