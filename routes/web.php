<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Painel\PainelController;
use App\Http\Controllers\UsuariosController;


Route::get('/', function () {
  return view('Home.index');
});




//Auth::routes();

//Route::get('/', [App\Http\Controllers\Home\HomeController::class, 'index'])->name('Home.index');

Auth::routes();



//Route::get('/home', [App\Http\Controllers\Home\HomeController::class, 'index'])->name('Home.index');


Route::get('/painel', [App\Http\Controllers\Painel\PainelController::class, 'index'])->name('Painel.index');
Route::get('/painel/usuarios', [App\Http\Controllers\Painel\Usuarios\UsuariosController::class, 'index'])->name('Painel.Usuarios.index');
Route::get('/painel/usuarios/cadastro', [App\Http\Controllers\Painel\Usuarios\UsuariosController::class, 'viewCadastro'])->name('Painel.Usuarios.viewCadastro');
Route::post('/painel/usuarios/store', [App\Http\Controllers\Painel\Usuarios\UsuariosController::class, 'store'])->name('Painel.Usuarios.store');



Route::get('/painel/servicos', [App\Http\Controllers\Painel\PainelController::class, 'viewServicos'])->name('Painel.Servicos.index');



?>


