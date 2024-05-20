<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\User\UserController;
use App\Http\Controllers\Web\Role\RoleController;
use App\Http\Controllers\Web\Admin\AdminController;
use App\Http\Controllers\Web\Brand\BrandController;
use App\Http\Controllers\Web\Category\CategoryController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('brands',BrandController::class)->names('brands')->except('show');

    Route::resource('categories',CategoryController::class)->names('categories')->except('show');

    Route::resource('roles',  RoleController::class)->names('roles')->except('show');

    // Route::resource('admins',  AdminController::class)->names('admins')->except('show,update,delete ');

    Route::resource('users',  UserController::class)->names('users')->except('show');
});

require __DIR__.'/auth.php';
