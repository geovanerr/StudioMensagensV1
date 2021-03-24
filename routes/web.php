<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Painel\PainelController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ServicosController;

Route::get('/', function () {
  return view('Home.index');
});




//Auth::routes();

//Route::get('/', [App\Http\Controllers\Home\HomeController::class, 'index'])->name('Home.index');

Auth::routes();



//Route::get('/home', [App\Http\Controllers\Home\HomeController::class, 'index'])->name('Home.index');


Route::get('/painel', [App\Http\Controllers\Painel\PainelController::class, 'index'])->name('Painel.index');
Route::get('/painel/usuarios', [App\Http\Controllers\Painel\Usuarios\UsuariosController::class, 'index'])->name('Painel.Usuarios.index');
Route::get('/painel/usuarios/cadastrofuncionario', [App\Http\Controllers\Painel\Usuarios\UsuariosController::class, 'viewCadastro'])->name('Painel.Usuarios.viewCadastro');
Route::get('/painel/usuarios/cadastrocliente', [App\Http\Controllers\Painel\Usuarios\UsuariosController::class, 'viewCliente'])->name('Painel.Usuarios.viewCliente');



Route::get('/painel/servicos/tiposServicos', [App\Http\Controllers\Painel\Servicos\ServicosController::class, 'tipoServicos'])->name('Painel.Servicos.tipoServicos');

Route::get('/painel/servicos/cadastrotipos', [App\Http\Controllers\Painel\Servicos\ServicosController::class, 'cadastrotipoS'])->name('Painel.Servicos.cadastrotipoS');
Route::post('/painel/servicos/cadastrotipos', [App\Http\Controllers\Painel\Servicos\ServicosController::class, 'store'])->name('Painel.Servicos.cadastrotipoS');


Route::get('/painel/servicos', [App\Http\Controllers\Painel\PainelController::class, 'viewServicos'])->name('Painel.Servicos.index');



?>


