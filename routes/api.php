<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EquipesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('equipes', [EquipesController::class, 'index']);
Route::get('equipes/{equipe}', [EquipesController::class,'show']); 
Route::post('equipes',[EquipesController::class,'store']);
Route::put('equipes/{equipe}',[EquipesController::class,'update']);
Route::delete('equipes/{equipe}', [EquipesController::class,'delete']); 
