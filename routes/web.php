<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EquipesController;

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

Route::get('/teste', function () {
    echo 'ola URL';
});

Route::get('equipes', [EquipesController::class, 'index']);
Route::get('equipes/{equipe}', [EquipesController::class,'show']); 
Route::post('equipes',[EquipesController::class,'store']);
Route::put('equipes/{equipe}',[EquipesController::class,'update']);
Route::delete('equipes/{equipe}', [EquipesController::class,'delete']);
