<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */

 Route::get('/', [AdminDashboardController::class, 'index'])->name('home');
 Route::get('/create', [AdminDashboardController::class, 'create'])->name('create');
 Route::post('/store', [AdminDashboardController::class, 'store'])->name('store');
 Route::get('/edit/{user}', [AdminDashboardController::class, 'edit'])->name('edit');
 Route::put('/update/{user}', [AdminDashboardController::class, 'update'])->name('update');




