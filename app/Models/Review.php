<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Store;


class Review extends Model
{

    use HasFactory;


    protected $table = 'reviews';

    protected $fillable =
    [
       'title',
       'body',
       'stars',
       'user_id',
       'user_name'
    ];


        public function users()
    {
        return $this->belongsTo(User::class);
    }

        public function stores()
    {
        return $this->belongsToMany(Store::class);
    }


}
