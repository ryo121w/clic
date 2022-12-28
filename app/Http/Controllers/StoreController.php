<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function store(Request $request)
    {
      $item = $this->item->create([
        'name' => $request->get('name'),
      ]);
      $item->stores()->sync($request->get('stores_id', []));
    }


}
