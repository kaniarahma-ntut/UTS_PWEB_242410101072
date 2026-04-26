<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'showLogin'])->name('showLogin');
Route::post('/formLogin', [PageController::class, 'login'])->name('login');
Route::get('/dashboard', [PageController::class, 'showDashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'showPengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'showProfile'])->name('profile');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
