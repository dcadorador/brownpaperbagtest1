<?php

use App\Http\Controllers\Api\V1\Controllers\Auth\LoginController;
use App\Http\Controllers\Api\V1\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Api\V1\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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



Route::post('login', [LoginController::class, 'login']);
Route::get('tasks', [TaskController::class, 'tasks']);
Route::post('tasks', [TaskController::class, 'create']);
Route::get('chart', [TaskController::class, 'chart']);
Route::post('register',[RegistrationController::class, 'register']);
