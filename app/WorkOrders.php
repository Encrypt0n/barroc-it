<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOrders extends Model
{
    protected $fillable = ['calendar_id', 'supply_id', 'note', 'finished'];
}
