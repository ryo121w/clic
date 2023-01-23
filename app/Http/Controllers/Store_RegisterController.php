<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Store;
use App\Models\Prefecture;
use App\Models\Brand;
use App\Models\StoreFormat;
use App\Models\Review;
use App\Models\User;
use App\Models\Sex;
use App\Models\Holder;
use Cloudinary;

class Store_RegisterController extends Controller
{
    public function showStore(Store $store,Request $request)
    {
        $store = Store::all();
        $store_id =Store::find('id');
        return view ('posts/store')->with(['stores' => $store, 'store_id' => $store_id]);
    }

// 店舗登録フォーム
     public function registerStore(Store $store, Prefecture $prefecture, Brand $brand, StoreFormat $storeformat, Sex $sex)
    {
        $store = Store::all();
        $prefecture = Prefecture::all();
        $brand = Brand::all();
        $storeformat = StoreFormat::all();
        $sex = Sex::all();
        return view ('posts/shop_register')->with(['prefectures' => $prefecture , 'brands' => $brand, 'storeformats' => $storeformat, 'sexes' => $sex]);
    }

// 画像アップロード処理
    public function upStore(Request $request, Store $store,StoreFormat $storeformat, Brand $brand)
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input_brands = $request->brands_array;
        $input_sex = $request->sex;
        $input = $request['store'];
        $input += ['image_path' => $image_url];
        $store->fill($input)->save();
        $store->brands()->attach($input_brands);
        $store->sexes()->attach($input_sex);
        return redirect()->route('showStore');
    }

    public function showSarch(Request $request, Store $store)
    {
        return view('post/search_pref');
    }

    public function search(Prefecture $prefecture)
    {
       return view('posts/search_pref')->with(['stores' => $prefecture->getByPrefecture()]);
    }

    public function storeSelect(StoreFormat $store_format)
    {
        return view('posts/store_format_select')->with(['stores' => $store_format->getByFormat()]);

    }

    public function storeDetail(User $user,Store $store, Review $review){
        $review_star = $store->reviews->avg('stars');
        $user_id = Auth::id();
        return view('posts/store_detail')->with(['store' => $store, 'user' =>$user,'user_id' => $user_id, 'star' => $review_star]);
    }

    public function holderStore(Request $request, Store $store, User $user)
    {
        $store->users()->attach(Auth::id());
    }

    public function holdStore(Store $store, User $user, Holder $holder)
    {
        $user=Auth::user();
        return view('posts/store_holder')->with(['stores' => $store, 'user' => $user]);
    }










}