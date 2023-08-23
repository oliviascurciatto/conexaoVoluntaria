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

Route::get('/home-user/{id?}', function () {
    return view('home-user');
})->name('home-user');

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
