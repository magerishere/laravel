<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentReplyController;
use App\Http\Controllers\MessageController;
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


/*  Group routes for middleware of user   */
Route::middleware('auth')->group(function() {

    /*  Resource routes   */
    Route::resource('/user',UserController::class);
    Route::resource('/post',PostController::class);
    Route::resource('/category',CategoryController::class);
    Route::resource('/comment',CommentController::class);
    Route::resource('/comment-reply',CommentReplyController::class);
    Route::resource('/message',MessageController::class);

    /*  Post routes   */
    Route::post('/user-change-password',[UserController::class,'changePassword'])->name('user.changePassword');
    Route::post('/post/multidestroy',[PostController::class,'multiDestroy'])->name('post.multiDestroy');
    Route::post('/post/multitrashdelete',[PostController::class,'multiTrashDelete'])->name('post.multiTrashDelete');
    Route::post('/post/multirestore',[PostController::class,'multiRestore'])->name('post.multiRestore');
    Route::post('/category/multidestroy',[CategoryController::class,'multiDestroy'])->name('category.multiDestroy');
    Route::post('/category/multitrashdelete',[CategoryController::class,'multiTrashDelete'])->name('category.multiTrashDelete');
    Route::post('/category/multirestore',[CategoryController::class,'multiRestore'])->name('category.multiRestore');
    Route::post('/message/multidestroy',[MessageController::class,'multiDestroy'])->name('message.multiDestroy');
    Route::post('/message/multi/unread',[MessageController::class,'multiUnread'])->name('message.multiUnread');
    Route::post('/message/important',[MessageController::class,'important'])->name('message.important');
    Route::post('/message/multi/important',[MessageController::class,'multiImportant'])->name('message.multiImportant');
    Route::post('/message/search',[MessageController::class,'search'])->name('message.serach');
    Route::post('/message/get/image/user',[MessageController::class,'getImageUser'])->name('message.getImageUser');
    Route::post('/message/multi/send',[MessageController::class,'multiSend'])->name('message.multiSend');
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
        return view('user.dashboard');
    })->name('user.dashboard');

    
});

/*  Resource routes   */
Route::resource('/blog',BlogController::class);


/*  Post routes   */
Route::post('/login',[UserController::class,'login'])->name('login');

/*  Get routes   */
Route::get('/comment/{id}/like',[CommentController::class,'like'])->name('comment.like');
Route::get('/comment/{id}/dislike',[CommentController::class,'dislike'])->name('comment.dislike');
Route::get('/comment-reply/{id}/like',[CommentReplyController::class,'like'])->name('comment-reply.like');
Route::get('/comment-reply/{id}/dislike',[CommentReplyController::class,'dislike'])->name('comment-reply.dislike');
Route::get('/', function () {
    return view('layouts.frontend.index');
});

Route::get('/login',function(){
    return view('user.login');
})->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');


