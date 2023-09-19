<?php

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


Route::get('/home-voluntario/{id?}', function () {
    return view('home-voluntario');
})->name('home-voluntario');

Route::get('/home-ong/{id?}', function () {
    return view('home-ong');
})->name('home-ong');

Route::get('/login-voluntario/{id?}', function () {
    return view('logins/login-voluntario');
})->name('login-voluntario');

Route::get('/login-ong/{id?}', function () {
    return view('logins/login-ong');
})->name('login-ong');


Route::get('/perfil-voluntario/{id?}', function () {
    return view('perfis/perfil-voluntario');
})->name('perfil-voluntario');

Route::get('/perfil-ong/{id?}', function () {
    return view('perfis/perfil-ong');
})->name('perfil-ong');

Route::get('/edit-perfil-voluntario', function () {
    return view('perfis/edit-perfil-voluntario');
})->name('edit-perfil-voluntario');

Route::get('/edit-perfil-ong', function () {
    return view('perfis/edit-perfil-ong');
})->name('edit-perfil-ong');

Route::get('/criar-vaga', function () {
    return view('vagas/criar-vaga');
})->name('criar-vaga');

Route::get('/vaga', function () {
    return view('vagas/vaga');
})->name('vaga');

Route::get('/vaga-ong', function () {
    return view('vagas/vaga-ong');
})->name('vaga-ong');

Route::get('/vaga-voluntario', function () {
    return view('vagas/vaga-voluntario');
})->name('vaga-voluntario');

Route::get('/criar-campanha', function () {
    return view('campanhas/criar-campanha');
})->name('criar-campanha');

Route::get('/campanha', function () {
    return view('campanhas/campanha');
})->name('campanha');

Route::get('/campanha-ong', function () {
    return view('campanhas/campanha-ong');
})->name('campanha-ong');

Route::get('/campanha-voluntario', function () {
    return view('campanhas/campanha-voluntario');
})->name('campanha-voluntario');

Route::get('/criar-cadastro-ong', function () {
    return view('cadastros/criar-cadastro-ong');
})->name('criar-cadastro-ong');

Route::get('/criar-cadastro-voluntario', function () {
    return view('cadastros/criar-cadastro-voluntario');
})->name('criar-cadastro-voluntario');