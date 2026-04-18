<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StitchPageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [StitchPageController::class, 'home'])->name('home');
Route::get('/listing', [StitchPageController::class, 'listing'])->name('listing');
Route::get('/about', [StitchPageController::class, 'about'])->name('about');
Route::get('/blog', [StitchPageController::class, 'blog'])->name('blog');
Route::get('/contact', [StitchPageController::class, 'contact'])->name('contact');

Route::get('/inertia-home', function () {
    return Inertia::render('Welcome');
})->name('inertia.home');

Route::redirect('/stitch-login', '/login')->name('stitch.login');

Route::get('/inertia-about', function () {
    return Inertia::render('About');
})->name('inertia.about');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
