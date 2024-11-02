<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserDashboardController;
use App\Models\Report;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('single-project', 'single-project')->name('single-project');
Route::view('projects', 'projects')->name('projects');
Route::view('nonprofit', 'nonprofit')->name('nonprofit');
Route::view('org', 'org')->name('org');
Route::view('billing', 'billing')->name('billing');



Route::middleware('guest')->group(function(){
    
    Route::view('login', 'auth.login')->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::view('register', 'auth.register')->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function(){
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('org', OrgController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('report', Report::class);
    Route::view('application', 'application')->name('application');
    Route::post('application', [OrgController::class, 'create']);
});