<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Store_RegisterController;
use App\Http\Controllers\PrefectureController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\StoreFormatController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\SearchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// CLICのメインページ
Route::get('/', [PostController::class, 'view'])->name('mainView');
// // ログインページ
// Route::get('/login', function(){
//     return view(‘welcome');
// });

// 評価一覧ページ
Route::get('/posts/review',[ReviewController::class, 'showList'])->name('reviews');

// 評価登録画面を表示
Route::get('/posts/create', [ReviewController::class, 'showCreate'])->name('create');

// 評価登録
Route::post('/posts/store', [ReviewController::class, 'exeStore'])->name('store');

// 検索機能（店舗名）
Route::get('/posts/search',[SearchController::class, 'index']);

// 検索機能（地域名）
Route::get('/posts/search_prefecture', [SearchController::class, 'indexSearch']);

// 評価詳細画面表示
Route::get('/posts/review/{id}', [ReviewController::class, 'showDetail'])->name('detail');

// 評価編集ページ
Route::get('/posts/review/edit/{id}', [ReviewController::class, 'showEdit'])->name('edit');

// 評価編集後の登録
Route::get('/posts/update', [ReviewController::class, 'exeUpdate'])->name('update');

// 評価の削除
Route::post('/posts/delete/{id}', [ReviewController::class, 'exeDelete'])->name('delete');

// 店舗一覧
Route::get('/posts/store',[Store_RegisterController::class, 'showStore'])->name('showStore');

// 店舗詳細
Route::get('/posts/store/detail/{store}', [Store_RegisterController::class, 'storeDetail'])->name('storeDetail');

//評価登録（店舗連携）
Route::get('/posts/review_store/{store}', [ReviewController::class, 'reviewStore']);

// 評価登録処理（店舗連携）
Route::post('/posts/store/{store}', [ReviewController::class, 'exeDetailStore'])->name('store');

// 評価一覧（店舗連携）
Route::get('/posts/review_detail/{store}', [ReviewController::class, 'detailReview']);

// 保存機能
Route::post('/posts/holder/{store}', [Store_RegisterController::class, 'holderStore']);

// 保存したストア一覧
Route::get('/posts/holder/{user_id}', [Store_RegisterController::class, 'holdStore']);

//メインページ（男性）
Route::get('/posts/store/men/{sex}', [PostController::class, 'menStore']);

// メインページ（女性）
Route::get('/posts/store/women/{sex}', [PostController::class, 'womenStore']);

Route::get('/posts/rank', [RankController::class, 'rankStore']);

// 店舗登録フォーム
Route::get('/register/store', [Store_RegisterController::class, 'registerStore'])->name('registerstore');

// 店舗登録
Route::post('/posts/upload', [Store_RegisterController::class, 'upStore'])->name('upload');


Route::get('/prefecture/{prefecture}', [Store_RegisterController::class, 'search'])->name('search');

Route::get('/search/area', [PrefectureController::class, 'searchArea']);

Route::get('/show/brand',[BrandController::class, 'showBrand'])->name('shBrand');

Route::get('/register/brand', [BrandController::class, 'formBrand']);

Route::post('/store/brand', [BrandController::class, 'storeBrand']);

Route::get('/brand/{brand}', [BrandController::class, 'detailBrand']);

Route::get('/posts/format_store/{store_format}', [Store_RegisterController::class, 'storeSelect']);







Route::get('/ee', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
