<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = [
        'name'
        ];

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }

    public function getByBrand (int $limit_count= 10)
    {
        return $this->stores()->with('brands')->paginate($limit_count);
    }
}
