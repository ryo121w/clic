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

    public function storeFormatRank(Store $s, Review $review, StoreFormat $store_format)
    {

        $u = Auth::user();
        $e = StoreFormat::all();
        $stores = Store::all();
        $review_stars = [];
        foreach($stores as $store)
        {
            $review_stars[] = $review->where('store_id', $store->id)->avg('stars');
        }

        $storeRank = $store->rankStar();
        $storeFormatRank = $storeRank->where('store_format_id', $store_format->id)->all();



        return view('posts/rank_format')->with(['user' => $u,'stores' => $storeFormatRank, 'reviews' => $review, 'store_formats' => $e ]);
    }
}
