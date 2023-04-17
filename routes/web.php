<?php

use App\Http\Controllers\CustomizationController;
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

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');

Route::resource('groups', 'App\Http\Controllers\GroupController');

Route::resource('links', 'App\Http\Controllers\LinkController');

Auth::routes();

Route::prefix('settings')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/customization', [CustomizationController::class, 'index'])->name('customization.index');
    Route::patch('/customization/background', [CustomizationController::class, 'updateBackgroundImage'])->name('customization.bgUpdate');
    Route::patch('/customization/background/remove', [CustomizationController::class, 'removeBackgroundImage'])->name('customization.bgRemove');
});

