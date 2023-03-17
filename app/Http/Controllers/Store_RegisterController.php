<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\OwnerRequest;
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
// ストア一覧表示
    public function showStore(Store $store,Request $request )
    {
        $store = Store::paginate(15);
        $store_format = StoreFormat::all();
        $user = Auth::user();
        return view ('posts/store')->with(['stores' => $store,'store_formats' => $store_format,
                                            'user' => $user]);
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
        if($user->owner !== null)
        {
            return view ('posts/shop_register')->with(['prefectures' => $prefecture , 'brands' => $brand,
            'store_formats' => $storeformat, 'sexes' => $sex, 'user' => $user ]);
        }elseif($user->owner ===null){
            return redirect('/posts/owner/register/{user->id}');
        }

    }

//店舗の登録処理（画像アップロード処理）
    public function upStore(StoreRequest $request, Store $store,StoreFormat $storeformat, Brand $brand, Product $product,User $user)
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input_product = $request->input($product);
        $input_brands = $request->brands_array;
        $input_sex = $request->sex;
        $owner_id = $user->owner;
        $input = $request['store'];
        $input += ['image_path' => $image_url];
        $store->fill($input)->save();
        for($i=0; $i<10; $i++)
        {
            if($image = $request->file('images'.$i)){
            $product  = new Product;
            $img_product = Cloudinary::upload($request->file('images'.$i)->getRealPath())->getSecurePath();
            $name = 'name'.$i;
            $price = 'price'.$i;
            $product->name = $request->$name;
            $product->price = $request->$price;
            $product->image_path = $img_product;
            $product->save();
            $store->products()->attach($product);}
        }


        $store->brands()->attach($input_brands);
        $store->sexes()->attach($input_sex);
        $store->products()->attach($input_product);
        $store->owner()->attach($owner_id);
        return redirect('/posts/thank');

    }

// 検索店舗表示
    public function showSarch(Request $request, Store $store,)
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        return view('post/search_pref')->width(['store_formats' => $e,'user'=>$u]);
    }

// 地域検索表示
    public function searchPrefecture(Prefecture $prefecture)
    {
        $u = Auth::user();
        $e = StoreFormat::all();
       return view('posts/search_pref')->with(['stores' => $prefecture->getByPrefecture(),'store_formats' => $e,'user'=>$u,'prefecture'=>$prefecture]);
    }

// 店舗形態区別処理
    public function storeSelect(StoreFormat $store_format,)
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        if($store_format->id === 1){
            return view('posts/store_format_select')->with(['stores' => $store_format->getByFormat(),'user' => $u, 'store_formats' => $e ]);}
        elseif($store_format->id === 2){
            return view('posts/store_format_used')->with(['stores' => $store_format->getByFormat(),'user' => $u, 'store_formats' => $e ]);
        }elseif($store_format->id === 3){
            return view('posts/store_format_ec')->with(['stores' => $store_format->getByFormat(),'user' => $u, 'store_formats' => $e ]);
        }

    }

// 店舗の詳細表示
    public function storeDetail(User $user,Store $store, Review $review,){
        $review_star = $store->reviews->avg('stars');
        $review_math = floor($review_star);
        $user = Auth::user();
        $store_format = StoreFormat::all();
        $store_product = $store->products()->get();

        if($store->store_format_id !==3)
        {
            return view('posts/store_detail')->with(['store' => $store, 'user' =>$user,'user' => $user, 'star' => $review_star,
                                                     'store_formats' =>$store_format,'review_math' => $review_math,'store_products' => $store_product]);
        }
        elseif($store->store_format_id === 3){
            return view('posts/store_detail_ec')->with(['store' => $store, 'user' =>$user,'user' => $user, 'star' => $review_star,
                                                     'store_formats' =>$store_format,'review_math' => $review_math,'store_products' => $store_product]);
        }
    }

// お気に入り機能実装
    public function holderStore(Store $store)
    {
        $user_id = Auth::id();
        if($store->isLike($user_id)){

        }else{
            $store->users()->attach($user_id);
        }
    }

// お気に入りした店舗の詳細
    public function holderDeleteStore(Store $store)
    {
        $user_id = Auth::id();
        if($store->isLike($user_id)){
        $store->users()->detach(Auth::id());
        }else{

        }
    }

// お気に入り店舗の一覧表示
    public function holdStore(Store $store, User $user, Holder $holder)
    {
        $user=Auth::user();
        $store_format = StoreFormat::all();
        $store = Store::paginate(15);
        return view('posts/store_holder')->with(['stores' => $store, 'user' => $user, 'store_formats' => $store_format]);
    }

// ajaxを用いた非同期住所検索処理
    public function getAddressByPostalCode($postalcode)
    {
        $addresses = Address::where('zip', $postalcode)->first();
        return response()->json($addresses);
    }

// 店舗会員登録フォーム
    public function userStore()
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        return view('posts/register_owner')->with(['store_formats' => $e, 'user' => $u]);

    }

// 店舗会員登録処理
    public function storeOwner(OwnerRequest $request, Owner $owner)
    {
        $user = Auth::user();
        $input = $request['owner'];
        $input += ['user_id' => $user->id];
        $owner->fill($input)->save();
        return redirect('/posts/thank');
    }

// 店舗会員登録予定のユーザー表示
    public function allOwner(Owner $owner,User $user)
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        $owner = Owner::all();
        return view('/posts/owner_register')->with(['owners' => $owner,'store_formats' => $e, 'user' => $u,'users'=>$user]);
    }

// 店舗会員登録処理
    public function conectOwner(Request $request,Owner $owner)
    {
       $user_id = $owner->user->id;
       $user = User::find($user_id);
       $user->owner = $owner->id;
       $user->save();
    }


// 運営店舗一覧（オーナーユーザー専用）
    public function showOwnerStore(Owner $owner, User $user,Store $store)
    {
       $u = Auth::user();
       $e = StoreFormat::all();
       $owner_id =  $user->owner;
       $user_owner = Owner::where('id',$owner_id)->get();
       $store_owner = Owner::find($owner_id)->stores()->get();

       return view('posts/store_edit')->with(['stores'=> $store_owner,'store_formats' => $e, 'user' => $u]);
    }

// 店舗編集画面（オーナーユーザー専用）
    public function ownerEditStore(Store $store)
    {
        $prefecture = Prefecture::all();
        $brand = Brand::all();
        $storeformat = StoreFormat::all();
        $sex = Sex::all();
        $user = Auth::user();
        return view('posts/owner_edit')->with(['prefectures' => $prefecture , 'brands' => $brand,
            'store_formats' => $storeformat, 'sexes' => $sex, 'user' => $user,'store' => $store ]);
    }

// 店舗登録情報の更新処理
    public function ownerUpdateStore(StoreRequest $request, Store $store,StoreFormat $storeformat, Brand $brand, Product $product,User $user)
    {
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input_brands = $request->brands_array;
        $input_sex = $request->sex;
        $input = $request['store'];
        $input += ['image_path' => $image_url];
        $store->fill($input)->save();
        $store->brands()->sync($input_brands);
        $store->sexes()->sync($input_sex);
        return redirect('posts/thank');
    }

// 運営店舗消去（店舗ユーザー専用）
    public function ownerDeleteStore(Store $store)
    {
        $store->delete();
        return redirect('/posts/store');
    }


// 店舗登録やコメント登録をしてもらった時に表示される
    public function thank ()
    {
        $u = Auth::user();
        $e = StoreFormat::all();
        return view('posts/thank')->with(['user' => $u, 'store_formats' => $e]);
    }





}