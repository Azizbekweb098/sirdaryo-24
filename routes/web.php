<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\PostController;
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




Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/lang/{lang}', function($lang){
    session(['lang' => $lang]);
    
    return redirect()->back();
   });
Route::get('/', [FrontentController::class, 'index'])->name('home');
Route::get('/category/{slug}', [FrontentController::class, 'categoryPost'])->name('categoryPost');
Route::get('/post/{slug}', [FrontentController::class, 'postS'])->name('post');


Route::prefix('/dashboard')->name('dashboard.')->group( function() {
    Route::resource('categories', CategoryController::class)->names('categoris');
    Route::resource('posts', PostController::class);
    Route::resource('tags', TagsController::class);

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
