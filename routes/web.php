<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;

Route::get('/',[HomeController::class,'home'])->name('home');

//categoy route

Route::get('/add-category',[CategoryController::class,'addcategory'])->name('add-category');
Route::post('/category-store',[CategoryController::class,'categorystore'])->name('category-store');
Route::get('/manage-category',[CategoryController::class,'managecategory'])->name('manage-category');
Route::get('/edit-category/{id}',[CategoryController::class,'editcategory'])->name('edit-category');
Route::post('/update-category/{id}',[CategoryController::class,'updatecategory'])->name('update-category');
Route::get('/delete-category/{id}',[CategoryController::class,'deletecategory'])->name('delete-category');

//blog route

Route::get('/add-blog',[BlogController::class,'addblog'])->name('add-blog');
Route::post('/store-blog',[BlogController::class,'storeblog'])->name('store-blog');
Route::get('/manage-blog',[BlogController::class,'manageblog'])->name('manage-blog');
Route::get('/edit-blog/{id}',[BlogController::class,'editblog'])->name('edit-blog');
Route::post('/update-blog/{id}',[BlogController::class,'updateblog'])->name('update-blog');
Route::get('/delete-blog/{id}',[BlogController::class,'deleteblog'])->name('delete-blog');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
