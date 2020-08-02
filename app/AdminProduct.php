<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminProduct extends Model
{
    protected $table = 'products';
    
    public function scopeProducts($query, $nameproduct)
    {
        if($nameproduct){
            return $query->where('product_name', 'like', "%$nameproduct%");
        }
    }
}
