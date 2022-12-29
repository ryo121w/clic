<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prefecture;

class PrefectureController extends Controller
{
    public function create(){
        $prefectures = Prefecture::all();

        return view()
    }
}