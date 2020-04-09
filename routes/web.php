<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas direcionadas somente ao ADMIN do sistema
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    });
});

/*
|--------------------------------------------------------------------------
| Rotas direcionadas somente aos GERENTES do sistema
|--------------------------------------------------------------------------
*/
Route::prefix('gerente')->group(function () {
    Route::get('dashboard', function () {
        return view('gerente.dashboard');
    });
});

/*
|--------------------------------------------------------------------------
| Rotas direcionadas somente aos GERENTES do sistema
|--------------------------------------------------------------------------
*/
Route::prefix('cambista')->group(function () {
    Route::get('dashboard', function () {
        return view('cambista.dashboard');
    });
});

/*
|--------------------------------------------------------------------------
| Rotas direcionadas a qualquer usuario do sistema
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    return view('login');
});

/*
|--------------------------------------------------------------------------
| Rotas direcionadas somente aos GERENTES do sistema
|--------------------------------------------------------------------------
*/
Route::post('/login', 'UsuarioController@logar');
