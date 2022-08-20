<?php

use App\Http\Controllers\EstudiantesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::middleware('api')->group(function () {
    Route::resource('estudiantes', EstudiantesController::class);
});*/


Route::get('estudiantes', [EstudiantesController::class, 'index']);

Route::group(['prefix' => 'estudiante'], function () {
    Route::post('store', [EstudiantesController::class, 'store']);
    Route::get('show/{estudiante}', [EstudiantesController::class, 'show']);
    Route::patch('update/{estudiante}', [EstudiantesController::class, 'update']);
    Route::delete('delete/{estudiante}', [EstudiantesController::class, 'destroy']);
});
