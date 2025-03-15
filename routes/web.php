<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Role;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// User 
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Admin
Route::middleware(['auth', 'verified', Role::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

/*Route::get('/admin/dashboard', function () {
    return Inertia::render('admin/dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');*/

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Pages
Route::get('/', [PageController::class,'getIndex']);
Route::get('/about', [PageController::class,'getAbout']);
Route::get('/contact', [PageController::class,'getContact']);
Route::post('/contact', [PageController::class, 'postContact'])->name('contact.store');
// Services
Route::get('/webapp', [ServiceController::class,'getWebApp']);
Route::get('/seo', [ServiceController::class,'getSeo']);
Route::get('/content', [ServiceController::class,'getContent']);
// Rlog
Route::get('rlog/{slug}',[BlogController::class, 'getSingle']) ->name('rlogs.single')->where('slug','[\w\d\-\_]+');
Route::get('rlog',[BlogController::class, 'getIndex'])->name('rlog.index');
// Posts
Route::resource('posts', PostController::class);

