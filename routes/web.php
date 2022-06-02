<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\FrontEndController;

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

/* Test Route */

/* Route::get('/test', function(){
   return App\Models\User::find(1)->profile;
}); */

/* Home Route */
Route::get('/', [
   FrontEndController::class, 'index'
])->name('index');

/* Single Page Route */
Route::get('/post/{slug}', [
   FrontEndController::class, 'singlePost'
])->name('post.single');

/* Single Category Post */
Route::get('/category/{id}', [
   FrontEndController::class, 'category'
])->name('category.single');


/* Actual Route */
Route::get('/dashboard', function () {
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

      Route::get('/post/edit/{id}', [
         PostsController::class, 'edit'
      ])->name('post.edit');

      Route::post('/post/update/{id}', [
         PostsController::class, 'update'
      ])->name('post.update');

      Route::get('/posts/trashed', [
         PostsController::class, 'trashed'
      ])->name('posts.trashed');

      Route::get('/post/removed/{id}', [
         PostsController::class, 'removed'
      ])->name('post.removed');

      Route::get('/post/restore/{id}', [
         PostsController::class, 'restore'
      ])->name('post.restore');

     
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


     // Tags
     Route::get('/tags', [
      TagsController::class, 'index'
   ])->name('tags');

   Route::get('/tag/create', [
      TagsController::class, 'create'
   ])->name('tag.create');

   Route::post('/tag/store', [
      TagsController::class, 'store'
   ])->name('tag.store');

   Route::get('/tag/edit/{id}', [
      TagsController::class, 'edit'
   ])->name('tag.edit');

   Route::post('/tag/update/{id}', [
      TagsController::class, 'update'
   ])->name('tag.update');

   Route::get('/tag/delete/{id}', [
      TagsController::class, 'destroy'
   ])->name('tag.delete');

   Route::get('/users', [
      UsersController::class, 'index'
   ])->name('users');

   Route::get('/user/create', [
      UsersController::class, 'create'
   ])->name('user.create');

   Route::post('/user/store', [
      UsersController::class, 'store'
   ])->name('user.store');

   Route::get('/user/admin/{id}', [
      UsersController::class, 'admin'
   ])->name('user.admin');

   Route::get('/user/not-admin/{id}', [
      UsersController::class, 'not_admin'
   ])->name('user.not.admin');

   Route::get('/user/profile', [
      ProfilesController::class, 'index'
   ])->name('user.profile');

   Route::get('/user/delete/{id}', [
      UsersController::class, 'destroy'
   ])->name('user.delete');

   Route::post('/user/profile/update', [
      ProfilesController::class, 'update'
   ])->name('user.profile.update');

   Route::get('/settings', [
      SettingsController::class, 'index'
   ])->name('settings');

   Route::post('/settings/update', [
      SettingsController::class, 'update'
   ])->name('settings.update');

});

