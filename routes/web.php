<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Painel\PainelController;
use App\Http\Controllers\Painel\Usuarios\UsuariosController;
use App\Http\Controllers\Painel\Servicos\ServicosController;
use App\Http\Controllers\Painel\OrdemServico\OrdemServicoController;

Route::get('/', function () {
  return view('Home.index');
});




//Auth::routes();

//Route::get('/', [App\Http\Controllers\Home\HomeController::class, 'index'])->name('Home.index');

Auth::routes();



//Route::get('/home', [App\Http\Controllers\Home\HomeController::class, 'index'])->name('Home.index');


Route::get('/painel', [PainelController::class, 'index'])->name('Painel.index');
Route::get('/painel/usuarios', [UsuariosController::class, 'index'])->name('Painel.Usuarios.index');
Route::get('/painel/usuarios/cadastrofuncionario', [UsuariosController::class, 'viewCadastro'])->name('Painel.Usuarios.viewCadastro');



Route::get('/painel/usuarios/listaclientes', [UsuariosController::class, 'listaclientes'])->name('Painel.Usuarios.listaclientes');

Route::get('/painel/usuarios/cadastrocliente', [UsuariosController::class, 'viewCliente'])->name('Painel.Usuarios.viewCliente');
Route::post('/clientes', [UsuariosController::class, 'clientestore']);



Route::get('/painel/servicos/tiposServicos', [ServicosController::class, 'tipoServicos'])->name('Painel.Servicos.tipoServicos');
Route::get('/painel/servicos/cadastrotipos', [ServicosController::class, 'cadastrotipoS'])->name('Painel.Servicos.cadastrotipoS');
Route::post('/servicos', [ServicosController::class, 'cadastrotipostore'])->name('Painel.Servicos.cadastrotipostore');
Route::delete('/servicos/{id}', [ServicosController::class, 'destroy'])->name('Painel.Servicos.destroy');
Route::get('/servicos/edit/{id}', [ServicosController::class, 'edit'])->name('Painel.Servicos.edit');
Route::put('/servicos/update/{id}', [ServicosController::class, 'update'])->name('Painel.Servicos.update');


Route::get('/painel/ordemservico', [OrdemServicoController::class, 'index'])->name('Painel.OrdemServico.index');
Route::get('/painel/ordemservico/create', [OrdemServicoController::class, 'create'])->name('Painel.OrdemServico.create');
Route::post('/painel/ordemservico/create', [OrdemServicoController::class, 'store'])->name('Painel.OrdemServico.store');
Route::get('/dashboard', [OrdemServicoController::class, 'dashboard'])->name('dashboard');
Route::get('/painel/ordemservico/{id}', [OrdemServicoController::class, 'show'])->name('Painel.OrdemServico.show');

///Route::post('/ordemservico/create', [OrdemServicoController::class, 'create']);
//Route::delete('/servicos/{id}', [ServicosController::class, 'destroy']);
//Route::get('/servicos/edit/{id}', [ServicosController::class, 'edit']);
//Route::put('/servicos/update/{id}', [ServicosController::class, 'update']);



Route::get('/painel/servicos', [App\Http\Controllers\Painel\PainelController::class, 'viewServicos'])->name('Painel.Servicos.index');


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//  return view('dashboard');
//})->name('dashboard');

?>



