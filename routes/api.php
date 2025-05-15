<?php
 
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\UserController;
 
Route::get('/user', [UserController::class, 'getUser'])->middleware('auth:api');
 
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [LoginController::class, 'login']);
