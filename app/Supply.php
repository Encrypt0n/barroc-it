<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    //
    protected $fillable = ['name', 'price', 'amount', 'supply_categories_id'];



    public function supplyCategory(){

        return $this->belongsTo('\App\SupplyCategory', 'supply_categories_id');

    }

}
