<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

// Rota para a página do Chef
Route::get('/chef', [PrincipalController::class, 'chef']);

// Rota para a página do Cartão de Visita
Route::get('/cartao-visita', [PrincipalController::class, 'cartaoVisita']);

// Rota para a página do Perfil Online
Route::get('/perfil-online', [PrincipalController::class, 'perfilOnline']);