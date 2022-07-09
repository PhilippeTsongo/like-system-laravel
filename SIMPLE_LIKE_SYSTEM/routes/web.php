<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return redirect()->route('post.list');
});



Route::get('/post-list',[PostController::class,'postList'])->name('post.list');
Route::post('/like-post/{id}',[PostController::class,'likePost'])->name('like.post');
Route::post('/unlike-post/{id}',[PostController::class,'unlikePost'])->name('unlike.post');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
