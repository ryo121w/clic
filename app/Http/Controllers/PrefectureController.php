<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prefecture;
use App\Models\User;
use App\Models\StoreFormat;
use App\Models\Store;
use App\Models\Address;

class PrefectureController extends Controller
{

    public function searchArea(Prefecture $prefecture,Store $store)
    {
        $prefecture = Prefecture::all();
        $u = Auth::user();
        $e = StoreFormat::all();
        return view ('posts/search_area')->with(['prefectures' => $prefecture,'store_formats' => $e,'user'=>$u]);
    }

    public function searchDetail(Prefecture $prefecture, Address $address)
    {
        $prefecture_name = $prefecture->name;
        $area = $address->where('pref',$prefecture_name)->orderBy('id',"DESC")->limit(4)->get();

    }
}