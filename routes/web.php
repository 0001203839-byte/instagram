<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ExplorarController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\LoginController;

Route::get('/', [FeedController::class, 'index']);
Route::get('/perfil', [PerfilController::class, 'index']);
Route::get('/mensagens', [MensagemController::class, 'index']);
Route::get('/explorar', [ExplorarController::class, 'index']);
Route::get('/videos', [VideoController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);