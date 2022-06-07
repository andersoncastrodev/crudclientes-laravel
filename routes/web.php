<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', [ClienteController::class, 'index']);

Route::get('cadcliente/create', [ClienteController::class, 'create']);

Route::post('cadcliente/store', [ClienteController::class, 'store']);

