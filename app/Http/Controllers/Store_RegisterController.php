<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Prefecture;
use Cloudinary;

class Store_RegisterController extends Controller
{
    public function showStore()
    {
        $store = Store::all();
        return view ('posts/store')->with(['stores' => $store]);
    }

// 店舗登録フォーム
     public function registerStore(Store $store, Prefecture $prefecture)
    {
        $stores = Store::all();
        $prefecture = Prefecture::all();
        return view ('posts/shop_register')->with(['prefectures' => $prefecture]);
    }

// 画像アップロード処理
    public function upStore(Request $request, Store $store)
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input =$request['store'];
        $input += ['image_path' => $image_url];
        $store->fill($input)->save();
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



}