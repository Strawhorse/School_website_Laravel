<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Directions;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\UserController;

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

Route::get('/', [Directions::class, "home"]);
Route::get('/about', [Directions::class, "about"]);
Route::get('/curriculum', [Directions::class, "curriculum"]);
Route::get('/contact', [Directions::class, "contact"]);
Route::get('/login', [Directions::class, "login"]);


// route for submitting queries to database
Route::post('/query', [QueryController:: class, "query"]);

// route to log in
Route::post('/login', [UserController::class, "login"]);





