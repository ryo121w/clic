<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{

    use HasFactory;


    protected $table = 'reviews';

    protected $fillable =
    [
       'title',
       'body'
    ];


        public function users()
    {
        return $this->belongsTo('App\Models\User');
    }


}
