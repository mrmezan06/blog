<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;

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
   return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    // Post
    Route::get('/post/create', [
        PostsController::class, 'create'
     ])->name('post.create');

     Route::get('/posts', [
      PostsController::class, 'index'
   ])->name('posts');

     
     Route::post('/post/store', [
         PostsController::class, 'store'
      ])->name('post.store');

      Route::get('/post/delete/{id}', [
         PostsController::class, 'destroy'
      ])->name('post.delete');

        // Category view show create.blade.php
      Route::get('/category/create', [
        CategoriesController::class, 'create'
     ])->name('category.create');

     //passing data to view
     Route::get('/categories', [
        CategoriesController::class, 'index'
     ])->name('categories');

    // Saving data to databse  create.blade.php form
     Route::post('/category/store', [
        CategoriesController::class, 'store'
     ])->name('category.store');

     // Edit category
     Route::get('/category/edit/{id}', [
        CategoriesController::class, 'edit'
     ])->name('category.edit');

     // Delete category
     Route::get('/category/delete/{id}', [
        CategoriesController::class, 'destroy'
     ])->name('category.delete');

     // Update category
     Route::post('/category/update/{id}', [
        CategoriesController::class, 'update'
     ])->name('category.update');


});

