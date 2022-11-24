<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\FinalController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [FinalController::class, 'index']);

Auth::routes(['verify' => true]);

Route::prefix('dashboard')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');

    Route::post('/dashboard', [ProductController::class, 'store'])->name('products.store');

    Route::get('/dashboard/{id}', [ProductController::class, 'show'])->name('products.show');

    Route::delete('/dashboard/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class , 'index'])->name('products.index');


Route::get('/redirect/{service}' , [SocialController::class , 'redirect']);

Route::get('/callback/{service}' , [SocialController::class , 'callback']);

Route::post("/add_to_cart" , [ProductController::class , 'addToCart']);

Route::get('/search' , [ProductController::class , 'search']);

Route::get('/profile' , [ProfileController::class , 'index'])->middleware('auth');

