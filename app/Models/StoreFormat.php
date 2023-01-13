<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class StoreFormat extends Model
{
    use HasFactory;

    protected $table = 'store_formats';

    protected $fillable = [
        'name',
        ];

    public function stores()
    {
        return $this->hasMany(Store::class);
    }

    public function getByFormat (int $limit_count=10)
    {
        return $this->stores()->with('store_format')->paginate($limit_count);
    }
}
