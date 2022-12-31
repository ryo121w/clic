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


     public function registerStore(Store $store, Prefecture $prefecture)
    {
        $stores = Store::all();
        $prefecture = Prefecture::all();
        return view ('posts/shop_register')->with(['prefectures' => $prefecture]);
    }


    public function upStore(Request $request, Store $store)
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input =$request['store'];
        $input += ['image_path' => $image_url];
        $store->fill($input)->save();
        return redirect()->route('showStore');


        //  // 画像フォームでリクエストした画像を取得
        // $img = $request->file('image');
        // // storage > public > img配下に画像が保存される
        // $path = $img->store('img','public');
        // // DBに登録する処理
        // Store::create([
        //     'image_path' => $path,
        // ]);

    }

}