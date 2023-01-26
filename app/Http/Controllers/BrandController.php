<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Brand;
use App\Models\Store;
use App\Models\StoreFormat;

class BrandController extends Controller
{
    public function showBrand(Brand $brand)
    {
        $brand = Brand::all();
        $u = Auth::user();
        $e = StoreFormat::all();
        return view('posts/brand')->with(['brands' => $brand,'store_formats' => $e,'user'=>$u]);
    }

    public function formBrand ()
    {
      $u = Auth::user();
      $e = StoreFormat::all();
      return view ('posts/brand_form')->with(['store_formats' => $e,'user'=>$u]);
    }

    public function storeBrand (Request $request, Brand $brand)
    {
        $input = $request['brand'];
        $brand->fill($input)->save();
        return redirect()->route('shBrand');
    }

    public function detailBrand (Store $store, Brand $brand)
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        return view('posts/brand_detail')->with(['stores' => $brand->getByBrand(),'store_formats' => $e,'user'=>$u]);

    }

}
