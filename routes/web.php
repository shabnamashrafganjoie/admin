<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermissionController;
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
 Route::delete('/destroy/{user}', [AdminDashboardController::class, 'destroy'])->name('destroy');



 //login
 Route::get('/login', [LoginController::class, 'index'])->name('index');

 Route::get('/checkLogin', [LoginController::class, 'login'])->name('login');
 Route::get('/logout', [LoginController::class, 'logout'])->name('logout');






   //role
   Route::prefix('role')->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('role.index');
    Route::get('/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/store', [RoleController::class, 'store'])->name('role.store');
    Route::get('/edit/{role}', [RoleController::class, 'edit'])->name('role.edit');
    Route::put('/update/{role}', [RoleController::class, 'update'])->name('role.update');
    Route::delete('/destroy/{role}', [RoleController::class, 'destroy'])->name('role.destroy');
    Route::get('/permission-form/{role}', [RoleController::class, 'permissionForm'])->name('role.permission-form');
    Route::put('/permission-update/{role}', [RoleController::class, 'permissionUpdate'])->name('role.permission-update');
});

//permission
Route::prefix('permission')->group(function () {
    Route::get('/', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('/create', [PermissionController::class, 'create'])->name('permission.create');
    Route::post('/store', [PermissionController::class, 'store'])->name('permission.store');
    Route::get('/edit/{permission}', [PermissionController::class, 'edit'])->name('permission.edit');
    Route::put('/update/{permission}', [PermissionController::class, 'update'])->name('permission.update');
    Route::delete('/destroy/{permission}', [PermissionController::class, 'destroy'])->name('permission.destroy');
});








