<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRequest;
use App\Models\Store;
use App\Models\Prefecture;
use App\Models\Brand;
use App\Models\StoreFormat;
use App\Models\Review;
use App\Models\User;
use App\Models\Sex;
use App\Models\Holder;
use App\Models\Address;
use App\Models\Product;
use App\Models\Owner;
use Cloudinary;

class Store_RegisterController extends Controller
{
    public function showStore(Store $store,Request $request )
    {
        $store = Store::all();
        $store_id =Store::find('id');
        $store_format = StoreFormat::all();
        $user = Auth::user();
        return view ('posts/store')->with(['stores' => $store, 'store_id' => $store_id, 'store_formats' => $store_format, 'user' => $user]);
    }

// 店舗登録フォーム
     public function registerStore(Store $store, Prefecture $prefecture, Brand $brand, StoreFormat $storeformat, Sex $sex)
    {
        $store = Store::all();
        $prefecture = Prefecture::all();
        $brand = Brand::all();
        $storeformat = StoreFormat::all();
        $sex = Sex::all();
        $user = Auth::user();
        if($user->owner = 1)
        {
            return view ('posts/shop_register')->with(['prefectures' => $prefecture , 'brands' => $brand,
            'store_formats' => $storeformat, 'sexes' => $sex, 'user' => $user ]);
        }elseif($user->owner = null){
            return redirect('/posts/owner/register/{{ $user->id }}');
        }

    }

// 画像アップロード処理
    public function upStore(Request $request, Store $store,StoreFormat $storeformat, Brand $brand, Product $product)
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();



        // for($i=0; $i<5; $i++){
        //     $product  = new Product;
        //     $files = $request->file('images'.$i);
        //     $img = $files->getRealPath();
        // 	$image = Cloudinary::upload($img)->getSecurePath();
        // 	$name = 'name' . $i;
        // 	$product->name = $request->$name;
        // 	$product->image_path = $img;
        // // 	$inputss += ['image_path' => $file];
        //     $product->save();
        // }

        $product = Product::all();

        $input_product = $request->input($product);
        $input_brands = $request->brands_array;
        $input_sex = $request->sex;
        $input = $request['store'];
        $input += ['image_path' => $image_url];
        $store->fill($input)->save();
        $store->brands()->attach($input_brands);
        $store->sexes()->attach($input_sex);
        $store->products()->attach($input_product);
        return redirect()->route('showStore');
    }

    public function showSarch(Request $request, Store $store,)
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        return view('post/search_pref')->width(['store_formats' => $e,'user'=>$u]);
    }

    public function search(Prefecture $prefecture)
    {
       return view('posts/search_pref')->with(['stores' => $prefecture->getByPrefecture()]);
    }

    public function storeSelect(StoreFormat $store_format,)
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        return view('posts/store_format_select')->with(['stores' => $store_format->getByFormat(),'user' => $u, 'store_formats' => $e ]);

    }

    public function storeDetail(User $user,Store $store, Review $review,){
        $review_star = $store->reviews->avg('stars');
        $user = Auth::user();
        $store_format = StoreFormat::all();
        return view('posts/store_detail')->with(['store' => $store, 'user' =>$user,'user' => $user, 'star' => $review_star,
                                                 'store_formats' =>$store_format]);
    }

    public function holderStore(Request $request, Store $store, User $user)
    {
        $store->users()->attach(Auth::id());
        return redirect('/posts/store');
    }

    public function holdStore(Store $store, User $user, Holder $holder)
    {
        $user=Auth::user();
        $store_format = StoreFormat::all();
        return view('posts/store_holder')->with(['stores' => $store, 'user' => $user, 'store_formats' => $store_format]);
    }

    public function getAddressByPostalCode($postalcode)
    {
        $addresses = Address::where('zip', $postalcode)->first();

        return response()->json($addresses);
    }

    public function userStore()
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        return view('posts/register_owner')->with(['store_formats' => $e, 'user' => $u]);

    }

    public function storeOwner(Request $request, Owner $owner)
    {
        $user = Auth::user();
        $input = $request['owner'];
        $input += ['user_id' => $user->id];
        $owner->fill($input)->save();
        return redirect('/');
    }


    public function allOwner(Owner $owner,User $user)
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        $owner = Owner::all();
        return view('/posts/owner_register')->with(['owners' => $owner,'store_formats' => $e, 'user' => $u,'users'=>$user]);
    }


    public function conectOwner(Request $request,Owner $owner)
    {
       $user_id = $owner->user->id;
       $user = User::find($user_id);
       $user->owner = 1;
       $user->save();
    }













}