<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $table = 'owner';

    protected $fillable = [
        'store_name',
        'store_address',
        'owner_name',
        'owner_email',
        'phone',
        'user_id'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }


}
