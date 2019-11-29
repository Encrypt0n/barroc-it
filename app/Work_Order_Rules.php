<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_Order_Rules extends Model
{
    protected $fillable = ['work_order_id', 'supply_id', 'amount', 'ceated_at', 'updated_at'];


    public function work_orders()
    {

        return $this->belongsTo('\App\Work_Orders', 'work_order_id');
    }
}
