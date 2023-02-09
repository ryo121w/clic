<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\StoreFormat;
use App\Models\Store;
use App\Models\Prefecture;

class SearchController extends Controller
{
    public function index (Request $request,Store $store,Prefecture $prefecture)
{        $user = Auth::user();
        $store_format = StoreFormat::all();
        $keyword = $request->input('cond_title');
        $spaceConversion = mb_convert_kana($keyword, 's');
        $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);

        if(!empty($keyword))
        {
            foreach($wordArraySearched as $value)
            $store = Store::query()
                            ->where('name', 'LIKE', "%{$value}%");
        }
        $stores = $store->get();




        if($stores->isEmpty())
        {
           foreach($wordArraySearched as $value)
            $prefecture = Prefecture::query()
                                      ->where('name','LIKE',"%{$value}%")
                                      ->first();
            $pre = $prefecture->getByPrefecture();
            if($pre->isNotEmpty()){
                return view('posts/search_prefecture')->with(['stores' => $pre]);
            }
        }

        return view('posts/search')->with(['stores' => $stores, 'prefectures' => $prefecture,'user'=>$user,'store_formats' => $store_format]);

    }



}
