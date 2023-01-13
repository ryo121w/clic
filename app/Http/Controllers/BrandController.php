<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Store;

class BrandController extends Controller
{
    public function showBrand(Brand $brand)
    {
        $brand = Brand::all();
        return view('posts/brand')->with(['brands' => $brand]);
    }

    public function formBrand ()
    {
      return view ('posts/brand_form');
    }

    public function storeBrand (Request $request, Brand $brand)
    {
        $input = $request['brand'];
        $brand->fill($input)->save();
        return redirect()->route('shBrand');
    }

    public function detailBrand (Store $store, Brand $brand)
    {
        return view('posts/brand_detail')->with(['stores' => $brand->getByBrand()]);

    }

}
