<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Store;
use App\Models\User;
use App\Models\Store;
use App\Models\Prefecture;
use App\Models\Brand;
use App\Models\StoreFormat;
use App\Models\Review;
use App\Models\User;
use App\Models\Sex;

class RankController extends Controller
{
    public function rankStore(User $user, Review $review, Store $store)
    {
        $store = Store::all();
        $review_star = $store->reviews->avg('stars');
        $avg_star = $review_star->orderby($review_star, 'desc');
        return view('posts/rank')->with(['user' => $user,'store' => $store, 'review_star' => $avg_star]);
    }
}
