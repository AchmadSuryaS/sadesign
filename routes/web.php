<?php

use App\Http\Controllers\AuserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);

// Admin

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('admin');

Route::get('/dashboard/a-user', [AuserController::class, 'index'])->name('a-user')->middleware('admin');
Route::get('/dashboard/e-user/{id}', [AuserController::class, 'edit'])->name('e-user')->middleware('admin');
Route::post('/dashboard/e-user/{id}', [AuserController::class, 'update'])->name('u-user');
Route::delete('/dashboard/a-user/{id}', [AuserController::class, 'destroy'])->name('d-user');
