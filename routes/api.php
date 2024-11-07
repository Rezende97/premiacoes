<?php

use App\Http\Controllers\Authentication\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// endpoint de autenticação
Route::post('/authentication', [AuthenticationController::class, 'authentication'])->name('gambler.login');
Route::post('/registerGambler', [AuthenticationController::class, 'registerGambler'])->name('gambler.registerGambler');
