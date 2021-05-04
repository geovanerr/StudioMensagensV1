<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Painel\PainelController;
use App\Http\Controllers\Painel\Usuarios\UsuariosController;
use App\Http\Controllers\Painel\Servicos\ServicosController;
use App\Http\Controllers\Painel\OrdemServico\OrdemServicoController;
use App\Http\Controllers\Painel\Tabelas\TabelasController;


Route::get('/', function () {
  return view('Home.index');
});




Auth::routes();


Route::get('/painel', [PainelController::class, 'index'])->name('Painel.index');
Route::get('/painel/usuarios', [UsuariosController::class, 'index'])->name('Painel.Usuarios.index');
Route::get('/painel/usuarios/cadastrofuncionario', [UsuariosController::class, 'viewCadastro'])->name('Painel.Usuarios.viewCadastro');
Route::post('/painel/usuario/create', [UsuariosController::class, 'storefunc'])->name('Painel.Usuarios.storefunc');



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
Route::get('/painel/ordemservico/edit/{id}', [OrdemServicoController::class, 'edit'])->name('Painel.OrdemServico.edit');
Route::post('/painel/ordemservico/create', [OrdemServicoController::class, 'store'])->name('Painel.OrdemServico.store');
Route::put('/painel/ordemservico/update/{id}', [OrdemServicoController::class, 'update'])->name('Painel.OrdemServico.update');


Route::get('/painel/tabelas/bairros', [TabelasController::class, 'indexbairros'])->name('Painel.Tabelas.indexbairros');
Route::get('/painel/tabelas/createbairro', [TabelasController::class, 'createbairro'])->name('Painel.Tabelas.createbairro');
Route::post('/painel/tabelas/createbairro', [TabelasController::class, 'storebairro'])->name('Painel.Tabelas.storebairro');
Route::delete('/painel/tabelas/bairro/{id}', [TabelasController::class, 'destroybairro'])->name('Painel.Tabelas.destroybairro');
Route::get('/painel/tabelas/bairro/edit/{id}', [TabelasController::class, 'editbairro'])->name('Painel.Tabelas.editbairro');
Route::put('/painel/tabelas/bairro/update/{id}', [TabelasController::class, 'updatebairro'])->name('Painel.Tabelas.updatebairro');

Route::get('/painel/tabelas/msn', [TabelasController::class, 'indexmsn'])->name('Painel.Tabelas.indexmsn');
Route::get('/painel/tabelas/createmsn', [TabelasController::class, 'createmsn'])->name('Painel.Tabelas.createmsn');
Route::post('/painel/tabelas/createmsn', [TabelasController::class, 'storemsn'])->name('Painel.Tabelas.storemsn');
Route::delete('/painel/tabelas/mensagem/{id}', [TabelasController::class, 'destroymsn'])->name('Painel.Tabelas.destroymsn');
Route::get('/painel/tabelas/mensagem/edit/{id}', [TabelasController::class, 'editmsn'])->name('Painel.Tabelas.editmsn');
Route::put('/painel/tabelas/mensagem/update/{id}', [TabelasController::class, 'updatemsn'])->name('Painel.Tabelas.updatemsn');

Route::get('/painel/tabelas/cobradores', [TabelasController::class, 'indexcobradores'])->name('Painel.Tabelas.indexcobradores');
Route::get('/painel/tabelas/createcobrador', [TabelasController::class, 'createcobrador'])->name('Painel.Tabelas.createcobrador');
Route::post('/painel/tabelas/createcobrador', [TabelasController::class, 'storecobrador'])->name('Painel.Tabelas.storecobrador');
Route::delete('/painel/tabelas/cobrador/{id}', [TabelasController::class, 'destroycobrador'])->name('Painel.Tabelas.destroycobrador');
Route::get('/painel/tabelas/cobrador/edit/{id}', [TabelasController::class, 'editcobrador'])->name('Painel.Tabelas.editcobrador');
Route::put('/painel/tabelas/cobrador/update/{id}', [TabelasController::class, 'updatecobrador'])->name('Painel.Tabelas.updatecobrador');



Route::get('/dashboard', [OrdemServicoController::class, 'dashboard'])->name('dashboard');
Route::get('/painel/ordemservico/{id}', [OrdemServicoController::class, 'show'])->name('Painel.OrdemServico.show');
Route::get('/painel/ordemservico/{id}/add-servicos', [OrdemServicoController::class, 'addservicos'])->name('Painel.OrdemServico.addservicos');


///Route::post('/ordemservico/create', [OrdemServicoController::class, 'create']);
//Route::delete('/servicos/{id}', [ServicosController::class, 'destroy']);
//Route::get('/servicos/edit/{id}', [ServicosController::class, 'edit']);
//Route::put('/servicos/update/{id}', [ServicosController::class, 'update']);



Route::get('/painel/servicos', [App\Http\Controllers\Painel\PainelController::class, 'viewServicos'])->name('Painel.Servicos.index');


//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//  return view('dashboard');
//})->name('dashboard');

?>



