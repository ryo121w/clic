<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Http\Requests\ReveiwRequest;

class ReviewController extends Controller
{
    public function showList()
    {
        $reviews = Review::all();
        return view('posts/review', ['reviews' => $reviews]);
    }

    public function showDetail($id)
    {
        $review = Review::find($id);
        return view('posts/review_detail', ['review' => $review]);
    }


    public function showCreate()
    {
        return view('posts/review_create');
    }


    public function store (Request $request, Review $review)
    {
      $input = $request['review'];
      $review->fill($input)->save();
      return redirect('/review');
    }


}
