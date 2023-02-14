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
       'user_name',
       'store_id'
    ];


    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

   public function avgStar(int $limit_count = 10)
   {
     return $this->stores()->with('reviews')->avg('stars')->paginate($limit_count);
   }

}
