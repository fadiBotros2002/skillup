<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Api\ApiController;

Route::post('/login', [ApiController::class, 'login']);


Route::post("register",[ApiController::class,"register"]);




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('api')->group(function () {
    Route::post('/courses/store', [CourseController::class, 'store']);
    Route::put('/courses/update/{id}', [CourseController::class, 'update']);
    Route::delete('/courses/destroy/{id}', [CourseController::class, 'destroy']);
});
