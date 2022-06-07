<?php

use Illuminate\Support\Facades\Route;

//Importanto o Controle Cliente.
use App\Http\Controllers\ClienteController;


Route::get('/', [ClienteController::class, 'index']);

Route::get('cadcliente/store', [ClienteController::class, 'create']);
