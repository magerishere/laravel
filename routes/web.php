<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RestoreController;
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


/*  Group routes   */
Route::middleware('auth:admin')->group(function() {

    /*  Resource routes   */
    Route::resource('/admin',AdminController::class);
    Route::resource('/post',PostController::class);
    Route::resource('/category',CategoryController::class);

     /*  Get routes   */
    Route::get('/post/restore/trash/{id}',[PostController::class,'restore'])->name('post.restore');
    Route::post('/post/multidelete',[PostController::class,'multiDelete'])->name('post.multiDelete');
    Route::get('/category/restore/trash/{id}',[CategoryController::class,'restore'])->name('category.restore');
    Route::get('/dashboard',function(){
        return view('admin.index');
    })->name('admin.dashboard');
});

/*  Post routes   */
Route::post('/login/admin',[AdminController::class,'login']);

/*  Get routes   */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login/admin',function(){
    return view('admin.login');
})->name('admin.login');
Route::get('/logout/admin',[AdminController::class,'logout'])->name('admin.logout');




