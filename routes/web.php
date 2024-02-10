<?php

use App\Models\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnvironmentController;

Route::get('/', function () {
    return view('loader');
});

Auth::routes();

Route::get('register', function () {
    return redirect()->route('home');
});
Route::get('/password/email', function () {
    return redirect()->route('home');
});
Route::get('/password/confirm', function () {
    return redirect()->route('home');
});
Route::get('/password/reset', function () {
    return redirect()->route('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'loading'])->name('loading');

Route::resource('environments', EnvironmentController::class);
Route::resource('supports', SupportController::class);
Route::resource('messages', MessageController::class);
Route::resource('dashboard', DashboardController::class);