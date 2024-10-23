<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PaymentController;

Route::get('/', [AuthController::class, 'index'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('students', StudentController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('classes', ClassController::class);
    Route::resource('schedules', ScheduleController::class);
    Route::resource('payments', PaymentController::class);
});


// Bawaan Laravel Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
