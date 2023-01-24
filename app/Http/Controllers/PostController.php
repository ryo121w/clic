<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Store;
use App\Models\Post;
use App\Models\StoreFormat;
use App\Models\User;
use App\Models\Review;
use App\Models\Sex;

class PostController extends Controller
{

    public function view(Store $store, StoreFormat $store_format, Sex $sex)
    {

        $user = Auth::user();
        $store = Store::all();
        $sex_men = Sex::find($id=1);
        $sex_women = Sex::find($id=2);
        $store_format = StoreFormat::all();


        if($user===null){
        return redirect()->route('register');
        }else{
        return view ('posts/index')->with(['stores' => $store, 'user' => $user,'store_formats' => $store_format,'sex_mens' => $sex_men,
        'sex_womens' => $sex_women]);
        }



    }

    public function index(Post $post, )
    {
      return view('posts/review_post')->with(['posts' => $post->get()]);
    }

    public function menStore(User $user, Store $store, Sex $sex)
    {
        $sex_men = Sex::find($id=1);
        $sex_women = Sex::find($id=2);
        $user = Auth::user();
        $store_format = StoreFormat::all();
        return view('posts/index_men')->with(['stores' => $store, 'user' => $user,'store_formats' => $store_format,'sex_mens' => $sex_men,
        'sex_womens' => $sex_women]);
    }

    public function womenStore(User $user, Store $store, Sex $sex)
    {
        $sex_men = Sex::find($id=1);
        $sex_women = Sex::find($id=2);
        $user = Auth::user();
        $store_format = StoreFormat::all();

        return view('posts/index_women')->with(['stores' => $store, 'user' => $user,'store_formats' => $store_format,'sex_mens' => $sex_men,
        'sex_womens' => $sex_women]);
    }
}
?>