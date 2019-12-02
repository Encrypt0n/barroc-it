<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplyCategory extends Model
{
    protected $fillable = ['name'];

    public function supplies(){
        return $this->hasMany('\App\Supply', 'supply_categories_id');
    }
}
