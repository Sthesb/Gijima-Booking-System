<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\UserDashboardController;
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
// Admin
// login
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');

// Users


Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin');
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
Route::get('/admin/users/{user:name}/show', [UserController::class, 'show'])->name('user.show');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/admin/users/store', [UserController::class, 'store'])->name('user.store');

// Team
Route::get('/admin/teams', [TeamsController::class, 'index']);
Route::post('/admin/teams', [TeamsController::class, 'store'])->name('teams.store');

// Role
Route::get('/admin/roles', [RolesController::class, 'index']);
Route::post('/admin/roles', [RolesController::class, 'store'])->name('roles.store');

// Location
Route::get('/admin/locations', [LocationsController::class, 'index']);
Route::post('/admin/locations', [LocationsController::class, 'store'])->name('locations.store');




// User
Route::get('/user', [UserDashboardController::class,'index'])->name('user');

Route::get('/', function () {
    return view('welcome');
});
