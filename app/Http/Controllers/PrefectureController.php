<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prefecture;
use App\Models\User;
use App\Models\StoreFormat;

class PrefectureController extends Controller
{
    public function searchArea(Prefecture $prefecture)
    {
        $prefecture = Prefecture::all();
        $u = Auth::user();
        $e = StoreFormat::all();
        return view ('posts/search_area')->with(['prefectures' => $prefecture,'store_formats' => $e,'user'=>$u]);
    }
}