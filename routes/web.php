<?php

use App\Http\Controllers\HealthDashboard;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Need to be both authenticated and verified for these.
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/health', HealthCheckResultsController::class)->name('health');
    Route::get('/dashboard', HealthDashboard::class)->name('dashboard');
});

// You can get to your profile without being verified.
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name(
        'profile.edit'
    );
    Route::patch('/profile', [ProfileController::class, 'update'])->name(
        'profile.update'
    );
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name(
        'profile.destroy'
    );
});


//
// Laravel Breeze's pile of routes.  ToDo: prune to those we use.
require __DIR__ . '/auth.php';
