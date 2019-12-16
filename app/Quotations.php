<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotations extends Model
{
    protected $fillable = ['accepted'];

    protected $table = 'quotations';
    protected $nullable = ['sales_id', 'company_id', 'accepted', 'contactpersonname', 'contactpersonemail', 'contactpersonphone', 'companyaddress', 'italian_light', 'italian', 'italian_deluxe', 'italian_deluxe_special', 'espresso_beneficio', 'yellow_bourbon_brasil', 'espresso_roma', 'red_honey_honduras'];


}


