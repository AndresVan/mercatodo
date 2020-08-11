<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class AdminProduct extends Model
{
    protected $table = 'products';
    
    public function scopeProducts(Builder $query, string $nameproduct): Builder
    {
        if ($nameproduct) {
            return $query->where('product_name', 'like', "%$nameproduct%");
        }
        return $query;
    }
}
