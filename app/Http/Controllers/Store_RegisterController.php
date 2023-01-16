<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Prefecture;
use App\Models\Brand;
use App\Models\StoreFormat;
use App\Models\Review;
use App\Models\User;
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
     public function registerStore(Store $store, Prefecture $prefecture, Brand $brand, StoreFormat $storeformat)
    {
        $store = Store::all();
        $prefecture = Prefecture::all();
        $brand = Brand::all();
        $storeformat = StoreFormat::all();
        return view ('posts/shop_register')->with(['prefectures' => $prefecture , 'brands' => $brand, 'storeformats' => $storeformat]);
    }

// 画像アップロード処理
    public function upStore(Request $request, Store $store,StoreFormat $storeformat, Brand $brand)
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input_brands = $request->brands_array;
        $input = $request['store'];
        $input += ['image_path' => $image_url];
        $store->fill($input)->save();
        $store->brands()->attach($input_brands);
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

    public function storeSelect(StoreFormat $storeformat)
    {
        $id = 1;
        $storeformat = StoreFormat::find($id);
        return view('posts/store_format_select')->with(['stores' => $storeformat->getByFormat()]);
    }

    public function storeDetail(User $user,Store $store){
        return view('posts/store_detail')->with(['store' => $store, 'user' =>$user]);
    }







}