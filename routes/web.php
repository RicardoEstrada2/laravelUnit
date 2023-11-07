<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(PagesController::class) -> group(function (){
    Route::get('/', [PagesController::class, 'index']);
    Route::get('/user/{name?}/{lastName?}', [PagesController::class, 'user'])->where(['name' => '[A-Za-z]+', 'lastName' => '[A-Za-z]+']);
    Route::get('/operacion/{operation}/{num1}/{num2}', [PagesController::class, 'operations'])->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);
});
