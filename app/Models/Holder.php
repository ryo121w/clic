<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holder extends Model
{
    use HasFactory;

   protected $table = 'holder';

   protected $fillable = [
       'hold',
       ];

   public function uers()
   {
       return $this->belongsToMany(User::class);
   }

      public function stores()
   {
       return $this->belongsToMany(Store::class);
   }                                                                       
}
