<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\VaccinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * Routing to LogIn for Admin - Nurse - Pharm
 *
 */
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::get('/login/nurse', [LoginController::class,'showNurseLoginForm']);
Route::post('/login/nurse', [LoginController::class,'nurseLogin']);
Route::get('/login/pharm', [LoginController::class,'showPharmLoginForm']);
Route::post('/login/pharm', [LoginController::class,'pharmLogin']);

/**
 * Routing to Register for Admin - Nurse - Pharm
 *
 */
Route::get('/register/nurse', [RegisterController::class,'showNurseRegisterForm']);
Route::post('/register/nurse', [RegisterController::class,'createNurse']);
Route::get('/register/pharm', [RegisterController::class,'showPharmRegisterForm']);
Route::post('/register/pharm', [RegisterController::class,'createPharm']);

/**
 * Routing for Authentication.
 */
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});
Route::group(['middleware' => 'auth:nurse'], function () {
    Route::view('/nurse', 'nurse');
});
Route::group(['middleware' => 'auth:pharm'], function () {
    Route::view('/pharm', 'pharm');
});

/** Routing for LogOut */
Route::get('logout', [LoginController::class,'logout']);

/** Route de Sarah */
Route::get('/map', function () {
    return view('app');
});

Route::get('/pharmacie', function () {
    return view('pharmacie/pharmacie');
});

Route::get('/news', function () {
    return view('news');
});

Route::resource('vaccins','App\Http\Controllers\VaccinController');
Route::get('fullcalender', [FullCalenderController::class, 'index']);
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);
