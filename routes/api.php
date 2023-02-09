<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CitizenController;

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
Route::post('register', [AuthController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('citizens', [CitizenController::class, 'create']);
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::get('citizens', [CitizenController::class, 'allCitizens']);
Route::get('citizens/{citizen_id}', [CitizenController::class, 'getCitizen']);
Route::get('citizens/search/{citizen_name}', [CitizenController::class, 'getCitizenByName']);

