<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', [ClienteController::class, 'index']);

Route::get('cliente', [ClienteController::class, 'create']);

Route::post('clientecad', [ClienteController::class, 'store']);

Route::get('cliente/{id}',[ClienteController::class, 'edit']);

Route::post('clienteedt/{id}',[ClienteController::class, 'update']);
