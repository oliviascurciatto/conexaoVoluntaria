<?php

use App\Http\Controllers\Ong\CadastroOngController;
use App\Http\Controllers\Ong\CampanhaOngController;
use App\Http\Controllers\Ong\CriarCampanhaController;
use App\Http\Controllers\Ong\LoginOngController;
use App\Http\Controllers\Ong\OngController;
use App\Http\Controllers\Ong\PerfilOngController;
use App\Http\Controllers\Ong\VagaOngController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Voluntario\CadastroVoluntarioController;
use App\Http\Controllers\Voluntario\LoginVoluntarioController;
use App\Http\Controllers\Voluntario\PerfilVoluntarioController;
use App\Http\Controllers\Voluntario\VagaVoluntarioController;
use App\Http\Controllers\Voluntario\VoluntarioController;
use App\Models\Cidade;
use App\Models\Genero;
use App\Models\Vaga;
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

Route::controller(UserController::class)->group(function(){
    Route::get('/criar-login', 'create')->name('criar-login.create');
    Route::post('/criar-login', 'store')->name('criar-login.store');
    
    
});


/*----- Rotas Voluntario -----*/

Route::controller(PerfilVoluntarioController::class)->group(function () {
    Route::get('/perfil-voluntario/{id?}', 'index')->name('perfil-voluntario');
    Route::get('/edit-perfil-voluntario/{id?}', 'edit')->name('edit-perfil-voluntario');
});

Route::controller(LoginVoluntarioController::class)->group(function () {
    Route::get('/login-voluntario', 'create')->name('login-voluntario.create');
    Route::post('/login-voluntario', 'authVoluntario')->name('login-voluntario.authVoluntario');
});

Route::controller(CadastroVoluntarioController::class)->group(function () {
    Route::get('/criar-perfil-voluntario', 'index')->name('criar-perfil-voluntario.index');
});

Route::post('/criar-cadastro-voluntario', [CadastroVoluntarioController::class, 'store'])->name('criar-cadastro-voluntario.store');

Route::controller(VagaVoluntarioController::class)->group(function () {
    Route::get('/vaga-voluntario/{id?}', 'index')->name('vaga-voluntario');
    Route::get('/minhas-vagas/{id?}', 'show')->name('minhas-vagas');
    Route::get('/listar-vagas/{id?}', 'listar')->name('listar-vagas');
});

Route::controller(VoluntarioController::class)->group(function(){
    Route::get('/home-voluntario/{id?}', 'home')->name('home-voluntario');
    Route::get('/ong-voluntario/{id?}', 'verOng')->name('ong-voluntario');
    Route::get('/campanha-voluntario/{id?}', 'verCampanha')->name('campanha-voluntario');
});


/*----- Rotas Ong -----*/

Route::controller(LoginOngController::class)->middleware('ong')->group(function(){
    Route::get('/login-ong', 'loginOng')->name('login-ong');
    Route::post('/login-ong', 'authOng')->name('login-ong.authOng');
    
 });

Route::controller(CadastroOngController::class)->middleware('ong')->group(function(){
    Route::get('/criar-perfil-ong', 'create')->name('criar-cadastro-ong.create');
    
    
    
});

Route::controller(PerfilOngController::class)->middleware('ong')->group(function (){
    Route::get('/perfil-ong/{id?}', 'index')->name('perfil-ong');
    Route::get('/edit-perfil-ong/{id?}', 'show')->name('edit-perfil-ong.show');
    Route::post('/edit-perfil-ong/{id?}', 'edit')->name('edit-perfil-ong.edit');
    Route::get('/criar-perfil-ong', 'create')->name('criar-cadastro-ong.create');
    Route::post('/criar-perfil-ong', 'store')->name('criar-cadastro-ong.store');
});

Route::controller(VagaOngController::class)->middleware('ong')->group(function(){
    Route::get('/vaga-ong', 'index')->name('vaga-ong.index');
    Route::get('/criar-vaga', 'create')->name('criar-vaga.create');
    Route::post('/criar-vaga', 'store')->name('criar-vaga.store');
    Route::get('/edit-vaga/{id?}', 'edit')->name('edit-vaga');
});

Route::controller(CampanhaOngController::class)->middleware('ong')->group(function(){
    Route::get('/campanha-ong/{id?}', 'index')->name('campanha-ong');
    Route::get('/criar-campanha', 'create')->name('criar-campanha.create');
Route::post('/criar-campanha', 'store')->name('criar-campanha.store');
    Route::get('/edit-campanha', 'edit')->name('edit-campanha');
});


Route::controller(OngController::class)->middleware('ong')->group(function(){
    Route::get('/home-ong/{id?}', 'index')->name('home-ong');
});






/*----- Outas Rotas -----*/

Route::get('/vaga', function () {
    return view('vagas/vaga');
})->name('vaga');

Route::get('/campanha', function () {
    return view('campanhas/campanha');
})->name('campanha');
