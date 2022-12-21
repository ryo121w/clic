<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
      return view('posts/review_post')->with(['posts' => $post->get()]);
    }
}
?>