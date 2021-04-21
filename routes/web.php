<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\UserController;
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

// Users
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
Route::get('/admin/users/create', [UserController::class, 'create']);
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


Route::get('/', function () {
    return view('welcome');
});
