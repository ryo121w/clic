<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Prefecture;

class SearchController extends Controller
{
    public function index (Request $request,Store $store,Prefecture $prefecture)
    {
        $keyword = $request->input('cond_title');

        $store = Store::query();
        // $prefecture = Prefecture::query();

        if(!empty($keyword))
        {
            $store->where('name', 'LIKE', "%{$keyword}%");
        }
        $stores = $store->get();


        if($stores->isEmpty())
        {
            // $prefecture->where('name', 'LIKE', "%{$keyword}%");
            $prefecture = Prefecture::where('name','=',$keyword)->first();
            $pre = $prefecture->getByPrefecture();
            if($pre->isNotEmpty()){
                // dd($pre);
                return view('posts/search_prefecture')->with(['stores' => $pre]);
            }
        }
        // dd($stores);




        return view('posts/search')->with(['stores' => $stores, 'prefectures' => $prefecture]);

    }
    public function indexSearch()
    {
        $keyword = $request->input('cond_title2');

        $prefecture = Prefecture::query();

        if(!empty($keyword))
        {
            $prefecture->where('name', 'LIKE', "%{$keyword}%");
        }
        $prefectures = $prefecture->get();

    }


}
