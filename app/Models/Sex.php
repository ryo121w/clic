<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;

class Sex extends Model
{
    use HasFactory;

    protected $table = 'sex';

    protected $fillable = [
        'sex'
        ];

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }

}
