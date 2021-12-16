<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\dealerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocietyController;
use App\Http\Controllers\userSettingsController;
use App\Http\Controllers\WhereController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'index'])->name('register');
    Route::get('/login', [AuthenticatedSessionController::class, 'index'])->name('login');
    Route::get('/users', [userSettingsController::class, 'index'])->name('users');
});


Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/society', [SocietyController::class, 'index'])->name('society');
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/dealer', [dealerController::class, 'index'])->name('dealer');
    Route::get('/account', [AccountController::class, 'index'])->name('account');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/where', [WhereController::class, 'index'])->name('where');
});

require __DIR__.'/auth.php';
