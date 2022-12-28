<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class Store_RegisterController extends Controller
{
    public function showStore()
    {
        $store = Store::all();
        return view ('posts/store')->with(['stores' => $store]);
    }


     public function registerStore(Store $store)
    {
        $stores = Store::all();
      return view ('posts/shop_register');
    }


    public function upStore(Request $request, Store $store)
    {
        $input = $request['store'];
        $store->fill($input)->save();

         // 画像フォームでリクエストした画像を取得
        $img = $request->file('image');

        // 画像情報がセットされていれば、保存処理を実行
        if (isset($img))
        {
            // storage > public > img配下に画像が保存される
            $path = $img->store('img','public');

            // store処理が実行できたらDBに保存処理を実行
            if ($path)
            {
                // DBに登録する処理
                Store::create([
                    'image_path' => $path,
                ]);
            }

        }

        return redirect()->route('showStore');
    }

}