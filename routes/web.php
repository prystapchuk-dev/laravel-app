<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\PostController;


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
    return view('welcome');
});

Route::get('/rest', function () {
    return view('welcome');
});

Route::prefix('blog')->group(function () {
    Route::resource('/posts', PostController::class)->names('posts');
});
