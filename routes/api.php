<?php

use App\Http\Controllers\Authentication\AuthenticationController;
use App\Http\Controllers\Awards\AwardsController; 
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

// endpoint de criar usuário
Route::post('/registerGambler', [AuthenticationController::class, 'registerGambler'])->name('gambler.registerGambler');

// endpoint recuperar senha
Route::post('/recoverPasswordGamber', [AuthenticationController::class, 'recoverPasswordGamber'])->name('gambler.recoverPasswordGamber');

// endpoint cadastrar nova senha
Route::put('/newPasswordGamber', [AuthenticationController::class, 'newPasswordGamber'])->name('gambler.newPasswordGamber');

// endpoint que busca os numeros ja comprado ou reservado dos apostadores
Route::get('numberGambler', [AwardsController::class, 'getNumberGamblerPrize'])->name('award.numberGamblerPrize');

// endpoint listar todas prêmios disponiveis
Route::get('prizeAvailable', [AwardsController::class, 'getPrizeAvailable'])->name('award.prizeAvailable');

// endpoints com camada de segurança de middleware
Route::prefix('/')->middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthenticationController::class, 'logoutGamber'])->name('gambler.logoutGamber');
    Route::post('/registerPrize', [AwardsController::class, 'registerPrizes'])->name('award.registerPrize');
    Route::put('/updatePrize', [AwardsController::class, 'update'])->name('award.updatePrize');
});
