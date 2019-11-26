<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'amount', 'product_categories_id'];

    public function productCategory() {
        return $this->belongsTo('\App\Http\ProductCategory', 'product_categories_id');
    }

}
