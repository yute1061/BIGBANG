<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Admin\ArticleController;
Route::controller(ArticleController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('article/create', 'add')->name('article.add');
    Route::post('article/create', 'create')->name('article.create'); 
});

use App\Http\Controllers\Admin\UserController;
Route::controller(UserController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('user/create', 'add')->name('user.add');
    Route::post('user/create', 'create')->name('user.create');
    Route::get('user/edit', 'edit')->name('user.create'); 
    Route::post('user/edit', 'update')->name('user.create');     
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
