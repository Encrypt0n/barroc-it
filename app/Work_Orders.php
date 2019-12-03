<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_Orders extends Model
{
    protected $fillable = ['user_id', 'maintenance_id', 'repaired_item', 'note', 'created_at', 'updated_at'];
}
