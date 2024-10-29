<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('single-project', 'single-project')->name('single-project');
Route::view('projects', 'projects')->name('projects');
Route::view('nonprofit', 'nonprofit')->name('nonprofit');
Route::view('org', 'org')->name('org');



Route::middleware('guest')->group(function(){
    
    Route::view('login', 'auth.login')->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::view('register', 'auth.register')->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function(){
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('application', 'application')->name('application');
});