<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;
use app\Http\Controllers\ContactController;

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

Route::get('/register/seeker', [App\Http\Controllers\UserController::class, 'createSeeker'])->name('create.Seeker');
Route::post('/register/seeker', [App\Http\Controllers\UserController::class, 'storeSeeker'])->name('store.Seeker');

Route::get('/register/employer', [App\Http\Controllers\UserController::class, 'createEmployer'])->name('create.employer');
Route::post('/register/employer', [App\Http\Controllers\UserController::class, 'storeemployer'])->name('store.employer');

Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\UserController::class, 'postLogin'])->name('login.post');

Route::post('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('verified')->name('dashboard');
// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Route::get('/users', function(){
//     return view('user.index');
// });

// Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);
// Route::get('/contact/store', [App\Http\Controllers\ContactController::class, 'store']);
//Route::get('/users', [App\Http\Controllers\TestController::class, 'index']);
