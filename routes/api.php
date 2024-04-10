<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::controller(\App\Modules\User\Controllers\UserController::class)->group(function(){
   Route::post('/users', 'createANewUser');
   Route::get('/users', 'getAllUsers');
});
