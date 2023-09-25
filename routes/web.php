<?php

use App\Http\Controllers\Voluntario\LoginVoluntarioController;
use App\Http\Controllers\Voluntario\PerfilVoluntarioController;
use App\Http\Controllers\Voluntario\VagaVoluntarioController;
use App\Http\Controllers\Voluntario\VoluntarioController;
use Illuminate\Auth\Events\Login;
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
Route::get('/', function(){
    return redirect()->route('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


/*----- Rotas Voluntario -----*/

Route::controller(PerfilVoluntarioController::class)->group(function () {
    Route::get('/perfil-voluntario/{id?}', 'index')->name('perfil-voluntario');
    Route::get('/edit-perfil-voluntario/{id?}', 'edit')->name('edit-perfil-voluntario');
});

Route::controller(LoginVoluntarioController::class)->group(function () {
    Route::get('/login-voluntario/{id?}', 'index')->name('login-voluntario');
    Route::get('criar-cadastro-voluntario', 'store')->name('criar-cadastro-voluntario');
});

Route::controller(VagaVoluntarioController::class)->group(function () {
    Route::get('/vaga-voluntario/{id?}', 'index')->name('vaga-voluntario');
});

Route::controller(VoluntarioController::class)->group(function(){
    Route::get('/home-voluntario/{id?}', 'home')->name('home-voluntario');
    Route::get('/ong-voluntario/{id?}', 'verOng')->name('ong-voluntario');
    Route::get('/campanha-voluntario/{id?}', 'verCampanha')->name('campanha-voluntario');
});


/*----- Rotas Ong -----*/


Route::get('/home-ong/{id?}', function () {
    return view('home-ong');
})->name('home-ong');

Route::get('/login-ong/{id?}', function () {
    return view('ong/login-ong');
})->name('login-ong');

Route::get('/perfil-ong/{id?}', function () {
    return view('ong/perfil-ong');
})->name('perfil-ong');

Route::get('/edit-perfil-ong', function () {
    return view('ong/edit-perfil-ong');
})->name('edit-perfil-ong');

Route::get('/criar-vaga', function () {
    return view('ong/criar-vaga');
})->name('criar-vaga');

Route::get('/vaga-ong', function () {
    return view('ong/vaga-ong');
})->name('vaga-ong');

Route::get('/criar-campanha', function () {
    return view('ong/criar-campanha');
})->name('criar-campanha');

Route::get('/campanha-ong', function () {
    return view('ong/campanha-ong');
})->name('campanha-ong');

Route::get('/criar-cadastro-ong', function () {
    return view('ong/criar-cadastro-ong');
})->name('criar-cadastro-ong');


/*----- Outas Rotas -----*/

Route::get('/vaga', function () {
    return view('vagas/vaga');
})->name('vaga');

Route::get('/campanha', function () {
    return view('campanhas/campanha');
})->name('campanha');
