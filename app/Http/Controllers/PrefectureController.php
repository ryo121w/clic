<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        $prefecture_1 = Prefecture::find(1);

        $prefecture_2=Prefecture::query()
                                  ->whereIn('prefecture.id', [2,3,4,5,6,7])->get();

        $prefecture_3=Prefecture::query()
                          ->whereIn('prefecture.id', [8,9,10,11,12,13,14])->get();

        $prefecture_4=Prefecture::query()
                                ->whereIn('prefecture.id', [15,16,17,18,19,20,21,22,23])->get();

        $prefecture_5=Prefecture::query()
                          ->whereIn('prefecture.id', [24,25,26,27,28,29,30])->get();

        $prefecture_6=Prefecture::query()
                          ->whereIn('prefecture.id', [31,32,33,34,35])->get();

        $prefecture_7=Prefecture::query()
                          ->whereIn('prefecture.id', [36,37,38,39])->get();

        $prefecture_8=Prefecture::query()
                          ->whereIn('prefecture.id', [40,41,42,43,44,45,46])->get();

        $prefecture_9=Prefecture::find(47);




        return view ('posts/search_area')->with(['prefectures' => $prefecture,'store_formats' => $e,'user'=>$u,
        'prefecture_1' => $prefecture_1,'prefecture_2' => $prefecture_2,'prefecture_3' => $prefecture_3,
        'prefecture_4' => $prefecture_4,'prefecture_5' => $prefecture_5,'prefecture_6' => $prefecture_6,
        'prefecture_7' => $prefecture_7,'prefecture_8' => $prefecture_8,'prefecture_9' => $prefecture_9]);
    }



    public function searchDetail(string $address)
    {
        $address = Store::select(DB::raw('CONCAT(pref,city,town)'))->get();
        if (preg_match('@^(.{2,3}?[都道府県])(.+?郡.+?[町村]|.+?市.+?区|.+?[市区町村])(.+)@u', $address, $matches) !== 1)
        {
            return [
                'pref' => null,
                'city' => null,
                'town' => null
            ];
        }

        return [
            'pref' => $matches[1],
            'city' => $matches[2],
            'town' => $matches[3],
        ];






          }




}