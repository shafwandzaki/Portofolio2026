<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Datacontroller;
use App\Http\Controllers\PublikController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeContentController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CareerController;

Route::get('/', [PublikController::class, 'utama']);

// Route login (TIDAK di-protect, biar bisa diakses buat login)
Route::get('admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Semua route admin lain di-protect middleware admin.auth
Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('skills', SkillController::class);
    Route::resource('experience', ExperienceController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('career', CareerController::class);

    Route::get('home', [HomeContentController::class, 'edit'])->name('home.edit');
    Route::put('home', [HomeContentController::class, 'update'])->name('home.update');
});

// Route::get('/', function () {
//     return view('welcome');
// });
