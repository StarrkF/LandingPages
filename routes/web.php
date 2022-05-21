<?php

use App\Http\Controllers\Panel\MenuController;
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

    //* INDEX
    Route::get('/',function(){return view('admin.pages.dashboard');})->name('admin.home');
    Route::get('menus',[MenuController::class,'index'])->name('admin.get.menu');

    //* STORE
    Route::post('menus',[MenuController::class,'store'])->name('admin.store.menu');

    //* UPDATE
    Route::post('menu/name/{link}',[MenuController::class,'updateName'])->name('admin.update.menu.name');
    Route::post('menu/number/{id}',[MenuController::class,'updateNumber'])->name('admin.update.menu.number');

    //* DESTROY
    Route::get('menu/{link}',[MenuController::class,'delete'])->name('admin.delete.menu');

});
