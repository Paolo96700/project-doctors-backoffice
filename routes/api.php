<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\MessageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('doctors', [DoctorController::class, 'index'])->name('api.doctors.index');

Route::get('users', [UserController::class, 'index'])->name('api.users.index');

Route::get('messages', [MessageController::class, 'index'])->name('api.messages.index');

Route::get('reviews', [ReviewController::class, 'index'])->name('api.reviews.index');
