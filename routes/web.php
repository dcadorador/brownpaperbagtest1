<?php


use App\Http\Controllers\Web\Authentication\LoginController;
use App\Http\Controllers\Web\Authentication\RegistrationController;
use App\Http\Controllers\Web\DashboardController;
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

Route::redirect('/', '/login', 301);
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/register',[RegistrationController::class, 'index'])->name('register');


Route::group([
    'middleware' => ['web', 'auth']
], function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
});

