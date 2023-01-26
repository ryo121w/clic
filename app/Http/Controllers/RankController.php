<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use App\Models\Store;
use App\Models\User;
use App\Models\Rank;
use App\Models\StoreFormat;


class RankController extends Controller
{
    public function rankStore(User $user, Store $store, Review $review, Rank $rank)
    {
        $store = Store::all();
        $u = Auth::user();
        $e = StoreFormat::all();
        $review_star = [];
        foreach($store as $store){
        // $review_star = $store->reviews->avg('stars');
        $review_star[] = $review->where('store_id', $store->id)->avg('stars');
        }

        return view('posts/rank')->with(['user' => $u,'stores' => $store->rankStar(), 'reviews' => $review, 'store_formats' => $e ]);
    }
}
