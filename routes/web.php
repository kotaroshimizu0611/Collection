<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {return view('welcome');});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// トップページとしての投稿一覧ページへのルート
Route::get('/', [PostController::class, 'index']);

// 投稿一覧ページへのルートに名前を付ける
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// 投稿作成ページへのルート
Route::get('/posts/create', [PostController::class, 'create']);

// 投稿詳細ページへのルート
Route::get('/posts/{post}', [PostController::class, 'show']);

// 投稿を保存するためのルート（既に名前付き）
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// 投稿編集ページへのルート
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

// 投稿更新処理のルート
Route::put('/posts/{post}', [PostController::class, 'update']);

// 投稿削除処理のルート
Route::delete('/posts/{post}', [PostController::class, 'delete']);