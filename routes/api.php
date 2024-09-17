<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Api\ApiController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Auth\PasswordResetController;
// Routes for authentication
Route::post('/login', [ApiController::class, 'login']);
Route::post('/register', [ApiController::class, 'register']);

// Routes for authenticated users
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/logout', [ApiController::class, 'logout']);

    Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLinkEmail']);
    Route::post('/reset-password', [PasswordResetController::class, 'reset'])->name('password.reset');

});

// Routes for admin users
Route::middleware(['auth:sanctum', AdminMiddleware::class])->group(function () {
    Route::get('/admin', function (Request $request) {
        return $request->user();
    });
});

// Routes for courses
Route::middleware('api')->group(function () {
    Route::post('/courses/store', [CourseController::class, 'store']);
    Route::put('/courses/update/{id}', [CourseController::class, 'update']);
    Route::delete('/courses/destroy/{id}', [CourseController::class, 'destroy']);
});



