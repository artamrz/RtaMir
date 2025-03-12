<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('/', [PageController::class,'getIndex']);

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class,'getAbout']);
Route::get('/contact', [PageController::class,'getContact']);
Route::post('/contact', [PageController::class,'postContact'])->('contact.store');
Route::get('/webapp', [ServiceController::class,'getWebApp']);
Route::get('/seo', [ServiceController::class,'getSeo']);
Route::get('/content', [ServiceController::class,'getContent']);

Route::get('rlog/{slug}',[BlogController::class, 'getSingle']) ->name('rlogs.single')->where('slug','[\w\d\-\_]+');
Route::get('rlog',[BlogController::class, 'getIndex'])->name('rlog.index');

Route::resource('posts', PostController::class);

