<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\UserProjectController;
use App\Http\Controllers\ProjectEventController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Project Routes
Route::resource('projects', ProjectController::class);

// Category Routes
Route::resource('categories', CategoryController::class);

// User Routes
Route::resource('users', UserController::class);

// Project Category Routes
Route::resource('project-categories', ProjectCategoryController::class);

// User Project Routes
Route::resource('user-projects', UserProjectController::class);

// Project Event Routes
Route::resource('project-events', ProjectEventController::class);
