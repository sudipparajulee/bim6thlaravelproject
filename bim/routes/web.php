<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth')->name('dashboard');


Route::prefix('admin/')->middleware('auth')->group(function () {

    Route::middleware('isadmin')->group(function(){
        Route::resource('/category',CategoryController::class);
        Route::post('/category/delete',[CategoryController::class,'delete'])->name('category.delete');
    });

    //Notice
    Route::resource('/notice',NoticeController::class);
    Route::post('/notice/delete',[NoticeController::class,'delete'])->name('notice.delete');


    //Gallery
    Route::resource('/gallery',GalleryController::class);
    Route::post('/gallery/delete',[GalleryController::class,'delete'])->name('gallery.delete');


    //News
    Route::resource('/news',NewsController::class);
    Route::post('/news/delete',[NewsController::class,'delete'])->name('news.delete');

    //Users
    Route::resource('/user',UserController::class);
    Route::post('/user/delete',[UserController::class,'delete'])->name('user.delete');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';