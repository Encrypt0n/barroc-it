<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    public function supplies() {
        return $this->belongsToMany('\App\Supply', 'purchase_rule',
            'purchase_id', //relatie die ie wilt delen
            'supply_id'); //relatie mee aangaan
    }
}
