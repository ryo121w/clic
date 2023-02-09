<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use App\Models\User;
use App\Models\StoreFormat;
use App\Models\Store;

class ReviewController extends Controller
{
     public function showList()
    {
        $reviews = Review::all();
        return view('posts/review', ['reviews' => $reviews]);
    }

    public function showDetail(Review $review, User $user,Store $store)
    {
        $user = Auth::user();
        $store_format = StoreFormat::all();
        $user_name = $user->name;
        return view('posts/review_detail')->with(['review' => $review, 'user'=>$user,'store_formats' => $store_format]);
    }


    public function showCreate()
    {

        return view('posts/review_create');
    }


    public function exeStore (ReviewRequest $request, Review $review, User $user)
    {
      $user = Auth::user();
      $id = Auth::id();
      $input = $request['review'];
      $input += ['user_id' => $user->id];
      $input += ['user_name' => $user->name];
      $review->fill($input)->save();
    //   return redirect('posts/review_detail', $review->id);
    }

    public function showEdit (Review $review)
    {
        $user = Auth::user();
        $store_format = StoreFormat::all();
        return view('posts/review_edit')->with(['review' => $review, 'user' => $user, 'store_formats' => $store_format]);
    }

    public function exeUpdate(ReviewRequest $request, Review $review)
    {
        $input_review = $request['review'];
        $review->fill($input_review)->save();
        return redirect('/posts/review/'.$review->id);
    }

    public function exeDelete(Review $review)
    {
        $review->delete();
        return redirect('/posts/store');
    }

    public function reviewStore(User $user, Store $store)
    {
        $user = Auth::user();
        $store_format = StoreFormat::all();
        return view('posts/review_store')->with(['user' => $user, 'store' => $store, 'store_formats' => $store_format, 'store' => $store]);
    }

    public function detailReview(User $user, Store $store)
    {
        $user = Auth::user();
        $store_format = StoreFormat::all();
        return view('posts/review_store_detail')->with(['user' => $user, 'store' => $store, 'store_formats' => $store_format]);
    }

    public function exeDetailStore(ReviewRequest $request, Review $review, Store $store)
    {
       $user = Auth::user();
       $input_review = $request['review'];
       $input_review += ['user_id' => $user->id];
       $input_review += ['user_name' => $user->name];
       $input_review += ['store_id' => $store->id];
       $review->fill($input_review)->save();
       $review_star = $review->where('store_id', $store->id)->avg('stars');
       $store->stars = $review_star;
       $store->save();
       return redirect('/posts/thank');
    }


}
