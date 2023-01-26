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
use App\Models\Prefecture;


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
        'zip',
        'pref',
        'city',
        'town',
        'house_number',
        'building'
    ];


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

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

    public function holder ()
    {
        return $this->belongsToMany(Holder::class);
    }

    public function rankStar (int $limit_count = 10)
    {
        return $this->orderBy('stars', 'DESC')->limit($limit_count)->get();
    }












}
