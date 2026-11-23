<?php

use App\Http\Controllers\CalculadoraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculadora', [CalculadoraController::class, 'index'])
    ->name('calculadora.index');

Route::post('/calculadora', [CalculadoraController::class, 'calcular'])
    ->name('calculadora.calcular');