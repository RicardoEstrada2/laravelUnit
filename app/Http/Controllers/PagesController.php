<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function index():View
    {
        return view('main');
    }

    public function user(string $name = null, string $lastName = null):View
    {
        return view('user', ['name' => $name, 'lastName' => $lastName]);
    }

    public function operations(string $operation, int $num1, int $num2) {
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
    }
}
