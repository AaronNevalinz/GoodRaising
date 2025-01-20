<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class, 'index_page'])->name('home');
Route::view('single-project', 'project.single-project')->name('single-project');
Route::get('projects', [WebController::class, 'index'])->name('projects');
Route::view('nonprofit', 'nonprofit')->name('nonprofit');
Route::get('billing/{project}', [ProjectController::class, 'billing'])->name('billing');
// Route::view('dashboard', 'org')->name('org');
// Route::view('billing', 'billing')->name('billing');
Route::post('donate/{project}', [DonationController::class, 'store'])->name('donate');

Route::resource('project', ProjectController::class);

Route::middleware('guest')->group(function(){
    
    Route::view('login', 'auth.login')->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::view('register', 'auth.register')->name('register');
    Route::post('register', [AuthController::class, 'register']);
    
});

Route::middleware('auth')->group(function(){
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('dashboard', OrgController::class);


    Route::resource('admin', AdminController::class);
    Route::get('adminorgs', [AdminController::class, 'get_orgs'])->name('admin.get_orgs');
    
    Route::resource('report', ReportController::class);
    Route::view('application', 'org.application')->name('application');
    Route::post('application', [OrgController::class, 'create']);
    Route::get('donations', [DonationController::class, 'index'])->name('donations');
    Route::get('organization', [UserDashboardController::class, 'get_org_details'])->name('organization');
});