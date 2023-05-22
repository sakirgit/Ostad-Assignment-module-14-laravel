<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AssignmentController;

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

/* ======= Module 14 | Assignment Question (1) ======= */
Route::post('/submit-form', [AssignmentController::class, 'submitForm']);


/* ======= Module 14 | Assignment Question (2) ======= */
Route::get('/headerUserAgent', [AssignmentController::class, 'headerUserAgent']);


/* ======= Module 14 | Assignment Question (3) ======= */
Route::get('/api/endpoint', [AssignmentController::class, 'api_endpoint']);


/* ======= Module 14 | Assignment Question (4) ======= */
Route::get('/api/json_user_data', [AssignmentController::class, 'json_user_data']);


/* ======= Module 14 | Assignment Question (5)   ======= */
Route::post('/upload', [AssignmentController::class, 'upload']);


/* ======= Module 14 | Assignment Question (6)   ======= */
Route::get('/retrieve-remember-token', [AssignmentController::class, 'retrieveRememberToken']);


/* ======= Module 14 | Assignment Question (7)   ======= */
Route::post('/submit', [AssignmentController::class, 'submit']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
