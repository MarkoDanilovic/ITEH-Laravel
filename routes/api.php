<?php

use App\Http\Controllers\AFKontroler;
use App\Http\Controllers\IzdController;
use App\Http\Controllers\PisController;
use Illuminate\Http\Request;
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

Route::get('izdavac', [IzdController::class, 'index']);
Route::get('pisac', [PisController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('izdavac/{izdavac}', [IzdController::class, 'show']);
    Route::put('izdavac/{izdavac}', [IzdController::class, 'update']);
    Route::get('pisac/{pisac}', [PisController::class, 'show']);
    Route::delete('pisac/{pisac}', [PisController::class, 'destroy']);
    Route::post('logout', [AFKontroler::class, 'logout']);
});

Route::post('register', [AFKontroler::class, 'register']);
Route::post('login', [AFKontroler::class, 'login']);
