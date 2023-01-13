<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Post;
use App\Models\StoreFormat;

class PostController extends Controller
{

    public function view(Store $store, StoreFormat $storeformat)
    {
        $store = Store::all();
        return view ('posts/index')->with(['stores' => $store]);
    }

    public function index(Post $post)
    {
      return view('posts/review_post')->with(['posts' => $post->get()]);
    }
}
?>