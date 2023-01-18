<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReveiwRequest;
use App\Models\Review;
use App\Models\User;
use App\Models\Store;

class ReviewController extends Controller
{
     public function showList()
    {
        $reviews = Review::all();
        return view('posts/review', ['reviews' => $reviews]);
    }

    public function showDetail($id,Review $review, User $user)
    {
        $review = Review::find($id);
        $user = Auth::user();
        $user_name = $user->name;
        $user_icon = mb_substr($user_name,0,2);
        return view('posts/review_detail')->with(['review' => $review, 'users' => $user_icon]);
    }


    public function showCreate()
    {
        return view('posts/review_create');
    }


    public function exeStore (Request $request, Review $review, User $user)
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
        return view('posts/review_edit')->with(['review' => $review]);
    }

    public function exeUpdate(Request $request, Review $review)
    {
    $input_review = $request['review'];
    $review->fill($input_review)->save();
    // return redirect('posts/review_detail', $review->id);
    }

    public function reviewStore(User $user, Store $store)
    {
      return view('posts/review_store')->with(['user' => $user, 'store' => $store]);
    }

    public function detailReview(User $user, Store $store)
    {
        return view('posts/review_store_detail')->with(['user' => $user, 'store' => $store]);
    }

    public function exeDetailStore(Request $request, Review $review, Store $store)
    {
       $user = Auth::user();
       $input_review = $request['review'];
       $input_review += ['user_id' => $user->id];
       $input_review += ['user_name' => $user->name];
       $review->fill($input_review)->save();
       $store->reviews()->attach($review);
    }


}
