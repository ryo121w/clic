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
use App\Models\Owner;

class PostController extends Controller
{

    public function view(Store $store, StoreFormat $store_format, Sex $sex,Owner $owner,Review $review)
    {

        $user = Auth::user();
        $store = Store::all();
        $sex_men = Sex::find($id=1);
        $sex_women = Sex::find($id=2);
        $store_format = StoreFormat::all();


            foreach($store as $s)
            {
                $review_stars[] = $review->where('store_id', $s->id)->avg('stars');
            }
            $storeRank = $s->rankStar();
            $store_format_select = $storeRank->where('store_format_id', 1)->all();
            $store_format_used = $storeRank->where('store_format_id', 2)->all();
            $store_format_ec = $storeRank->where('store_format_id', 3)->all();


        if($user===null){
        return redirect('/select');
        }else{
        return view ('posts/index')->with(['stores' => $store, 'user' => $user,'store_formats' => $store_format,'sex_mens' => $sex_men,
        'sex_womens' => $sex_women,'owner'=>$owner, 'select' => $store_format_select,'used' => $store_format_used,
        'ec' => $store_format_ec]);
        }





    }


    public function logSelect()
    {
        return view('posts/select_log');
    }

    public function index(Post $post, )
    {
      return view('posts/review_post')->with(['posts' => $post->get()]);
    }

    public function menStore(User $user, Store $store, Sex $sex, Review $review)
    {
        $sex_men = Sex::find($id=1);
        $sex_women = Sex::find($id=2);
        $user = Auth::user();
        $store_format = StoreFormat::all();
        $store = Store::all();
        foreach($store as $s)
        {
            $review_stars[] = $review->where('store_id', $s->id)->avg('stars');
        }

        $storeRank = $s->rankStar();
        $store_format_select = $storeRank->where('store_format_id', 1)->all();
        $store_format_used = $storeRank->where('store_format_id', 2)->all();
        $store_format_ec = $storeRank->where('store_format_id', 3)->all();
        return view('posts/index_men')->with(['stores' => $store, 'user' => $user,'store_formats' => $store_format,'sex_mens' => $sex_men,
        'sex_womens' => $sex_women,'sex' => $sex, 'select' => $store_format_select,'used' => $store_format_used,'ec' => $store_format_ec]);
    }

    public function womenStore(User $user, Store $store, Sex $sex, Review $review)
    {
        $sex_men = Sex::find($id=1);
        $sex_women = Sex::find($id=2);
        $user = Auth::user();
        $store_format = StoreFormat::all();
        $store = Store::all();
        foreach($store as $s)
        {
            $review_stars[] = $review->where('store_id', $s->id)->avg('stars');
        }

        $storeRank = $s->rankStar();
        $store_format_select = $storeRank->where('store_format_id', 1)->all();
        $store_format_used = $storeRank->where('store_format_id', 2)->all();
        $store_format_ec = $storeRank->where('store_format_id', 3)->all();
        return view('posts/index_women')->with(['stores' => $store, 'user' => $user,'store_formats' => $store_format,'sex_mens' => $sex_men,
        'sex_womens' => $sex_women,'sex' => $sex, 'select' => $store_format_select,'used' => $store_format_used,'ec' => $store_format_ec]);
    }
}
?>