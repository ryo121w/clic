<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;


class Prefecture extends Model
{
    use HasFactory;

    protected $table = 'prefecture';

    protected $fillable = [
        'name',
        ];

    public function stores()
    {
        return $this->hasMany(Store::class);
    }

     public function getByPrefecture (int $limit_count=10)
    {
        return $this->stores()->with('prefecture')->paginate($limit_count);
    }
}
