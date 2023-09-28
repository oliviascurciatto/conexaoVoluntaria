<?php

use App\Http\Controllers\Ong\CampanhaOngController;
use App\Http\Controllers\Ong\LoginOngController;
use App\Http\Controllers\Ong\OngController;
use App\Http\Controllers\Ong\PerfilOngController;
use App\Http\Controllers\Ong\VagaOngController;
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

Route::controller(LoginOngController::class)->group(function(){
    Route::get('/login-ong/{id?}', 'index')->name('login-ong');
    Route::get('/criar-cadastro-ong/{id?}', 'store')->name('criar-cadastro-ong');
});

Route::controller(PerfilOngController::class)->group(function (){
    Route::get('/perfil-ong/{id?}', 'index')->name('perfil-ong');
    Route::get('/edit-perfil-ong/{id?}', 'edit')->name('edit-perfil-ong');
});

Route::controller(VagaOngController::class)->group(function(){
    Route::get('/vaga-ong/{id?}', 'index')->name('vaga-ong');
    Route::get('/criar-vaga/{id?}', 'create')->name('criar-vaga');
    Route::get('/edit-vaga/{id?}', 'edit')->name('edit-vaga');
});

Route::controller(CampanhaOngController::class)->group(function(){
    Route::get('/campanha-ong/{id?}', 'index')->name('campanha-ong');
    Route::get('/criar-campanha/{id?}', 'create')->name('criar-campanha');
    Route::get('/edit-campanha/{id?}', 'edit')->name('edit-campanha');
});

Route::controller(OngController::class)->group(function(){
    Route::get('/home-ong/{id?}', 'index')->name('home-ong');
});






/*----- Outas Rotas -----*/

Route::get('/vaga', function () {
    return view('vagas/vaga');
})->name('vaga');

Route::get('/campanha', function () {
    return view('campanhas/campanha');
})->name('campanha');
