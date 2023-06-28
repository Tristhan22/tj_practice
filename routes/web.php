<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'homePage'])->name('home');

Route::get('/profile', [PageController::class, 'profilePage'])->middleware('auth')->name('profile');

Route::get('/events', [PageController::class, 'eventsPage'])->middleware('auth')->name('events');

Route::get('/login', [PageController::class, 'loginPage'])->name('login');

Route::get('/register', [PageController::class, 'registerPage'])->name('register');

// User authentication

Route::post('/login', [AuthController::class, 'loginUser'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logoutUser'])->name('logout.user');
Route::post('/register', [AuthController::class, 'registerUser'])->name('register.submit');
