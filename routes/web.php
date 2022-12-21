<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('posts/index');
});

// ログインページ
Route::get('/login', function(){
    return view('welcome');
});

// 評価一覧ページ
Route::get('/review',[ReviewController::class, 'showList'])->name('reviews');

// 評価詳細画面表示
Route::get('/posts/review/{id}', [ReviewController::class, 'showDetail'])->name('detail');

// 評価登録画面を表示
Route::get('/posts/create', [ReviewController::class, 'showCreate'])->name('create');

// 評価投稿ページ
Route::get('/post', [PostController::class, 'index']);

// 評価登録
Route::post('/posts/store', [ReviewController::class, 'store'])->name('store');


// 評価編集ページ
Route::get('/posts/review/edit/{id}', [ReviewController::class, 'showEdit'])->name('edit');

// 評価編集後の登録
Route::get('/post/update', [PostController::class, 'exeUpdate'])->name('update');

// 評価の削除
Route::post('/posts/delete/{id}', [ReviewController::class, 'exeDelete'])->name('delete');



// 新規登録ページ
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
