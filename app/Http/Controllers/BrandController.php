<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Brand;
use App\Models\Store;
use App\Models\StoreFormat;

class BrandController extends Controller
{
// ブランドの一覧表示
    public function showBrand(Brand $brand)
    {
        $brand = Brand::paginate(100);
        $u = Auth::user();
        $e = StoreFormat::all();
        return view('posts/brand')->with(['brands' => $brand,'store_formats' => $e,'user'=>$u]);
    }

// もしない場合のブランド登録画面表示
    public function formBrand ()
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        return view ('posts/brand_form')->with(['store_formats' => $e,'user'=>$u]);
    }

//ブランド登録処理
    public function storeBrand (Request $request, Brand $brand)
    {
        $input = $request['brand'];
        $brand->fill($input)->save();
        return redirect('/');
    }

// ブランド詳細ページ
    public function detailBrand (Store $store, Brand $brand)
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        return view('posts/brand_detail')->with(['stores' => $brand->getByBrand(),'store_formats' => $e,'user'=>$u, 'brand' => $brand]);

    }

}
