<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;

class PrefectureController extends Controller
{
    public function searchArea(Prefecture $prefecture)
    {
        $prefecture = Prefecture::all();
        return view ('posts/search_area')->with(['prefectures' => $prefecture]);
    }
}