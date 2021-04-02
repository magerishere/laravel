<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminMetaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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


/*  Group routes for middleware of admin   */
Route::middleware('auth:admin')->group(function() {

    /*  Resource routes   */
    Route::resource('/admin',AdminController::class);
    Route::resource('/post',PostController::class);
    Route::resource('/category',CategoryController::class);


    /*  Post routes   */
    Route::post('/admin-change-password',[AdminController::class,'changePassword'])->name('admin.changePassword');
    Route::post('/post/multidestroy',[PostController::class,'multiDestroy'])->name('post.multiDestroy');
    Route::post('/post/multitrashdelete',[PostController::class,'multiTrashDelete'])->name('post.multiTrashDelete');
    Route::post('/post/multirestore',[PostController::class,'multiRestore'])->name('post.multiRestore');
    Route::post('/category/multidestroy',[CategoryController::class,'multiDestroy'])->name('category.multiDestroy');
    Route::post('/category/multitrashdelete',[CategoryController::class,'multiTrashDelete'])->name('category.multiTrashDelete');
    Route::post('/category/multirestore',[CategoryController::class,'multiRestore'])->name('category.multiRestore');

    /*  Delete routes   */
    Route::delete('/post/trash/{id}',[PostController::class,'trashDelete'])->name('post.trashDelete');
    Route::delete('/category/trash/{id}',[CategoryController::class,'trashDelete'])->name('category.trashDelete');

    /*  Get routes   */
    Route::get('/post/restore/trash/{id}',[PostController::class,'restore'])->name('post.restore');
    Route::get('/post/all/trash',[PostController::class,'trash'])->name('post.trash');
    Route::get('/category/restore/trash/{id}',[CategoryController::class,'restore'])->name('category.restore');
    Route::get('/category/all/trash',[CategoryController::class,'trash'])->name('category.trash');
    Route::get('/category/parent/{id}',[CategoryController::class,'parent'])->name('category.parent');
    Route::get('/dashboard',function(){
        return view('admin.dashboard');
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


