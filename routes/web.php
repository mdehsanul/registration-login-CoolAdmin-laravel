<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\AddEducationController;
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

// showing registration form
Route::get('register', [RegistrationController::class, 'register'])->middleware('isAlreadyLoggedIn');

// showing login form
Route::get('login', [LoginController::class, 'login'])->middleware('isAlreadyLoggedIn');

// showing forget-password form
Route::get('forget-pass', [ForgetPasswordController::class, 'forget_pass']);

// showing dashboard
// Route::get('dashboard', [DashboardController::class, 'dashboard']);

// storing registration data
Route::post('registration-success', [RegistrationController::class, 'postRegistrationData'])->name('registration-success');

// login user
Route::post('login-success', [LoginController::class, 'postloginData'])->name('login-success');

// showing user information when user login
Route::get('dashboard', [DashboardController::class, 'showdashboard'])->middleware('isLoggedIn');

// log out
Route::get('logout', [LogoutController::class, 'logout']);

// showing user information update form
Route::get('updateform/{id}', [UpdateController::class, 'updateform']);

// storeing data for update user information
Route::post('update', [UpdateController::class, 'update'])->name('update');

// showing education form
Route::get('educationform/{id}', [AddEducationController::class, 'educationform']);

// storing education information
Route::post('addeducation', [AddEducationController::class, 'addeducation'])->name('addeducation');

// retrieve and display
Route::get('education/{user_id}/geteducationdata', [AddEducationController::class, 'geteducationdata']);

// verification of user
Route::get('verify/{token}', [RegistrationController::class, 'verifyEmail'])->name('verify');
