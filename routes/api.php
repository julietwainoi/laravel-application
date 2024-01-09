<?php
namespace App\Http\Controllers\Controller\Api;


use App\Http\Controllers\Api\employeeController;
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

Route::get('/employee',[employeeController::class,'index']);
Route::get('/employee/{id}',[employeeController::class,'show']);
Route::post('/employee',[employeeController::class,'store']);
Route::put('/employee/{id}',[employeeController::class,'update']);
Route::delete('/employee/{id}',[employeeController::class,'destroy']);
