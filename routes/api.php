<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('clients',[ClientController::class,'index']);
Route::post('clients',[ClientController::class,'store']);
Route::get('clients/{client}',[ClientController::class,'show']);
Route::put('clients/{client}',[ClientController::class,'update']);
Route::post('clients/{client}',[ClientController::class,'destroy']);