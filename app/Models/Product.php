<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function reviews() {
        return $this->hasMany(\App\ProductRebiew::class, 'product_id', 'id');
    }
}
