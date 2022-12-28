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


    public function exeStore (Request $request, Review $review)
    {
      $input = $request['review'];
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


}
