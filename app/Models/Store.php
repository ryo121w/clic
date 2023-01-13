<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Brand;
use App\Models\StoreFormat;


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
        'store_format_id',
    ];

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    public function store_format()
    {
        return $this->belongsTo(StoreFormat::class);
    }








}
