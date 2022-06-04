<?php

use App\http\Controllers\App\CommentController;
use App\http\Controllers\App\ContentController;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\MenuController;
use App\Http\Controllers\Panel\PageController;
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



Route::prefix('admin')->group(function(){

    Route::middleware('auth')->group(function(){
        //* INDEX
        Route::get('/',function(){return view('admin.pages.dashboard');})->name('admin.home');
        Route::get('menus',[MenuController::class,'index'])->name('admin.get.menu');
        Route::get('/page/{link}',[PageController::class,'index'])->name('admin.get.page');

        //* STORE
        Route::post('menus',[MenuController::class,'store'])->name('admin.store.menu');
        Route::post('page/{link}',[PageController::class,'store'])->name('admin.store.page');

        //* SHOW
        Route::get('page/{link}/{id}',[PageController::class,'show'])->name('admin.show.page');

        //* UPDATE
        Route::post('menu/name/{link}',[MenuController::class,'updateName'])->name('admin.update.menu.name');
        Route::post('menu/number/{id}',[MenuController::class,'updateNumber'])->name('admin.update.menu.number');
        Route::post('page/update/{link}/{id}',[PageController::class,'update'])->name('admin.update.page');

        //* DESTROY
        Route::get('menu/{link}',[MenuController::class,'delete'])->name('admin.delete.menu');
        Route::get('page/delete/{link}/{id}',[PageController::class,'delete'])->name('admin.delete.page');
    });

});

//? AUTH
Route::get('login',function(){return view('admin.auth.pages.login');})->name('get.login');
Route::get('register',function(){return view('admin.auth.pages.register');})->name('get.register');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::post('login',[AuthController::class,'login'])->name('post.login');
Route::post('register',[AuthController::class,'register'])->name('post.register');

//? APP

Route::get('/',function(){return view('app.pages.home');})->name('app.home');
Route::post('/comment',[CommentController::class,'createcomments'])->name('app.post.comment');
Route::get('/{link}',[ContentController::class,'index'])->name('app.get.content');
Route::get('/{link}/{id}',[ContentController::class,'show'])->name('app.get.content.detail');




Route::post('status/{link}/{id}',[PageController::class,'changeStatus']);


