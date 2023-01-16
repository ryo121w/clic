<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Store;
use App\Models\Post;
use App\Models\StoreFormat;
use App\Models\User;
use App\Models\Review;

class PostController extends Controller
{

    public function view(Store $store, StoreFormat $storeformat)
    {
        $user = Auth::user();
        $store = Store::all();


        if($user===null){
        return redirect()->route('register');
        }else{
        return view ('posts/index')->with(['stores' => $store, 'user' => $user]);
        }



    }

    public function index(Post $post)
    {
      return view('posts/review_post')->with(['posts' => $post->get()]);
    }
}
?>