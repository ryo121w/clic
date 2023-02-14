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
use App\Models\Product;


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
        'building',
        'station',
        'min',
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

    public function isLike($user_id)
    {
        return $this->users()->where('user_id',$user_id)->exists();
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    public function sexes()
    {
        return $this->belongsToMany(Sex::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function holder ()
    {
        return $this->belongsToMany(Holder::class);
    }

    public function rankStar ()
    {
        return $this->orderBy('stars', 'DESC')->get();
    }

    public function owner()
    {
        return $this->belongsToMany(Owner::class);
    }

   public function getByLimit(int $limit_count = 5)
   {
       return $this->limit($limit_count)->get();
   }












}
