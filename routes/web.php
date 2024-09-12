<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'teste'])->name('site.principal');

Route::get('/contato', [PrincipalController::class, 'contato'])->name('site.contato');

Route::post('/contato', [PrincipalController::class, 'contato'])->name('site.contato');

Route::get('/welcome', [PrincipalController::class, 'bemvindo']);

Route::get('/login', function(){return 'Teste';})->name('site.login');

Route::fallback(function(){
    $message = "Você digitou uma rota que não existe, estamos retornando para o Menu";
    return view("site.principal", compact('message'));
});