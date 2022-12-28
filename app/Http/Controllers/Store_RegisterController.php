<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class Store_RegisterController extends Controller
{
     public function registerStore(Store $store)
    {
      return view ('posts/store_register');
    }

    public function upStore(Request $request, Store $store)
    {
        $input = $request['store'];
        $store->fill($input)->save();


        // ディレクトリ名
        $dir = 'sample';

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('image')->storeAs('public/' . $dir, $file_name);

        // ファイル情報をDBに保存
        $store = new Store();
        $store->name = $file_name;
        $store->image_path = 'storage/' . $dir . '/' . $file_name;
        $store->save();

        return redirect('posts/store');
    }
}
