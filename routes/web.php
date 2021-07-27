<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [RegistrationController::class, 'register'])->middleware('isAlreadyLoggedIn');;
Route::get('login', [LoginController::class, 'login'])->middleware('isAlreadyLoggedIn');;
Route::get('forget-pass', [ForgetPasswordController::class, 'forget_pass']);
// Route::get('dashboard', [DashboardController::class, 'dashboard']);

Route::post('registration-success', [RegistrationController::class, 'postRegistrationData'])->name('registration-success');
Route::post('login-success', [LoginController::class, 'postloginData'])->name('login-success');

Route::get('dashboard', [DashboardController::class, 'showdashboard'])->middleware('isLoggedIn');
Route::get('logout', [LogoutController::class, 'logout']);

Route::get('update', [RegistrationController::class, 'update']);
