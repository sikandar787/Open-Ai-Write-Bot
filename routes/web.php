<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageGenerateController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [ImageGenerateController::class, 'index'])->name('home');
Route::get('/generate', [ImageGenerateController::class, 'generate'])->name('generate');
Route::group(['middleware' => 'auth'],function(){
    Route::post('/generate', [ImageGenerateController::class, 'ImageGeneration'])->name('imagegen');
});

Route::get('/signup', [AuthController::class,'signup'])->name('signup');
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/register/user', [AuthController::class,'registerUser'])->name('register.user');
Route::post('/auth/user', [AuthController::class,'authenticateUser'])->name('auth.user');
