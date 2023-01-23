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
        $sex = Sex::all();
        $store_format = StoreFormat::all();
        if($user===null){
        return redirect()->route('register');
        }else{
        return view ('posts/index')->with(['stores' => $store, 'user' => $user, 'sexes' => $sex, 'store_formats' => $store_format]);
        }



    }

    public function index(Post $post, )
    {
      return view('posts/review_post')->with(['posts' => $post->get()]);
    }

    public function menStore(User $user, Store $store, Sex $sex)
    {
        $id = 1;
        $sex_men = Sex::find($id=1);
        $sex_mens = Sex::all();
        return view('posts/index_men')->with(['stores' => $store, 'user' => $user, 'sexes' => $sex, 'sex_men' => $sex_men, 'sex_mens' => $sex_mens]);
    }

    public function womenStore(User $user, Store $store, Sex $sex)
    {
        $id = 2;
        $sex_women = Sex::find($id);
        $sex_womens = Sex::all();

        return view('posts/index_women')->with(['stores' => $store, 'user' => $user,'sexes'=>$sex, 'sex_women' => $sex_women, 'sex_womens' => $sex_womens]);
    }
}
?>