<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Store extends Model
{
    use HasFactory;
     protected $table = 'stores';
     protected $fillable = [
        'name',
        'phone',
        'prefecture_id',
        'body',
        'image_path',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

     public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }







}
