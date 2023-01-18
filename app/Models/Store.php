<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Brand;
use App\Models\StoreFormat;
use App\Models\Review;
use App\Models\Sex;
use App\Models\Review_Store;


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
        'store_format_id'
    ];

    public function store_format()
    {
        return $this->belongsTo(StoreFormat::class);
    }

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

    public function sexes()
    {
        return $this->belongsToMany(Sex::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }








}
