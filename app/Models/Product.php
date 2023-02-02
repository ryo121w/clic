<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Product extends Model
{
   protected $table = 'product';
    protected $fillable = [
        'name',
        'image_path'
        ];
    public function reviews() {
        return $this->hasMany(\App\ProductRebiew::class, 'product_id', 'id');
    }

    public function stores(){
        return $this->belongsToMany(Store::class);
    }
}
