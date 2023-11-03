<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/operacion/{operation}/{num1}/{num2}', function (string $operation, int $num1, int $num2){
    switch ($operation){
        case 'suma':
            return $num1 + $num2;
        case 'multi':
            return $num1 * $num2;
        case 'division':
            return $num1 / $num2;
        case 'resta':
            return $num1 - $num2;
    }
    return 'ingresa tu operacion: suma, rest, multiplicacion o division y los numeros';
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/user/{name?}/{lastName?}', function ($name = null,  $lastName = null) {
    return view('user', ['name' => $name, 'lastName' => $lastName]);
})->where(['name'=>'[A-Za-z', 'lastName'=>'[A-Za-z']);
//Route::view('/user', 'user');


Route::get('/multi/{num1}/{num2}', function (int $num1, int $num2){
    return $num2 * $num1;
});
