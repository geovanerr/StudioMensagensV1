<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Painel\PainelController;
use App\Http\Controllers\Painel\Usuarios\UsuariosController;
use App\Http\Controllers\Painel\Servicos\ServicosController;
use App\Http\Controllers\Painel\OrdemServico\OrdemServicoController;
use App\Http\Controllers\Painel\Tabelas\TabelasController;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\RelatoriosController;





Route::get('/', function () {
  return view('Home.index');
});




Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('Home.index');
Route::get('/adminfo', [HomeController::class, 'adminfo'])->name('Home.adminfo');



Route::get('/painel', [PainelController::class, 'index'])->name('Painel.index');
Route::get('/painel/usuarios', [UsuariosController::class, 'index'])->name('Painel.Usuarios.index');
Route::get('/painel/usuarios/cadastrofuncionario', [UsuariosController::class, 'viewCadastro'])->name('Painel.Usuarios.viewCadastro');
Route::post('/painel/usuario/create', [UsuariosController::class, 'storefunc'])->name('Painel.Usuarios.storefunc');
Route::get('/usuarios/show/{id?}', [UsuariosController::class, 'showfunc'])->name('Painel.Usuarios.showfunc');
Route::get('/usuarios/editfunc/{id}', [UsuariosController::class, 'editfunc'])->name('Painel.Usuarios.editfunc');
Route::put('/usuarios/updatefunc/{id}', [UsuariosController::class, 'updatefunc'])->name('Painel.Usuarios.updatefunc');
Route::get('/usuarios/{id}', [UsuariosController::class, 'destroyfunc'])->name('Painel.Usuarios.destroyfunc');


Route::match(['get', 'post'], '/logar', [FuncionariosController::class, 'logar'])
      ->name('logar');



Route::get('/painel/usuarios/listaclientes', [UsuariosController::class, 'listaclientes'])->name('Painel.Usuarios.listaclientes');

Route::get('/painel/usuarios/cadastrocliente', [UsuariosController::class, 'viewCliente'])->name('Painel.Usuarios.viewCliente');
Route::post('/clientes', [UsuariosController::class, 'clientestore']);
Route::get('/clientes/show/{id?}', [UsuariosController::class, 'showcliente'])->name('Painel.OrdemServico.showcliente');
Route::get('/usuarios/editcliente/{id}', [UsuariosController::class, 'editcliente'])->name('Painel.Usuarios.editcliente');
Route::put('/usuarios/updatecliente/{id}', [UsuariosController::class, 'updatecliente'])->name('Painel.Usuarios.updatecliente');
Route::get('/clientes/{id}', [UsuariosController::class, 'destroycliente'])->name('Painel.Usuarios.destroycliente');







Route::get('/painel/servicos/tiposServicos', [ServicosController::class, 'tipoServicos'])->name('Painel.Servicos.tipoServicos');
Route::get('/painel/servicos/cadastrotipos', [ServicosController::class, 'cadastrotipoS'])->name('Painel.Servicos.cadastrotipoS');
Route::post('/servicos', [ServicosController::class, 'cadastrotipostore'])->name('Painel.Servicos.cadastrotipostore');
Route::get('/servicos/{id}', [ServicosController::class, 'destroy'])->name('Painel.Servicos.destroy');
Route::get('/servicos/edit/{id}', [ServicosController::class, 'edit'])->name('Painel.Servicos.edit');
Route::put('/servicos/update/{id}', [ServicosController::class, 'update'])->name('Painel.Servicos.update');


Route::get('/painel/ordemservico', [OrdemServicoController::class, 'index'])->name('Painel.OrdemServico.index');
Route::get('/painel/ordemservico/create', [OrdemServicoController::class, 'create'])->name('Painel.OrdemServico.create');
Route::get('/painel/ordemservico/edit/{id}', [OrdemServicoController::class, 'edit'])->name('Painel.OrdemServico.edit');
Route::post('/painel/ordemservico/create', [OrdemServicoController::class, 'store'])->name('Painel.OrdemServico.store');
Route::put('/painel/ordemservico/update/{id}', [OrdemServicoController::class, 'update'])->name('Painel.OrdemServico.update');
Route::get('/ordemservico/{id}', [OrdemServicoController::class, 'destroy'])->name('Painel.OrdemServico.destroy');
Route::get('/ordemservico/processar/{id}', [OrdemServicoController::class, 'processaros'])->name('Painel.OrdemServico.processaros');


Route::get('/painel/tabelas/bairros', [TabelasController::class, 'indexbairros'])->name('Painel.Tabelas.indexbairros');
Route::get('/painel/tabelas/createbairro', [TabelasController::class, 'createbairro'])->name('Painel.Tabelas.createbairro');
Route::post('/painel/tabelas/createbairro', [TabelasController::class, 'storebairro'])->name('Painel.Tabelas.storebairro');
Route::get('/painel/tabelas/bairro/{id}', [TabelasController::class, 'destroybairro'])->name('Painel.Tabelas.destroybairro');
Route::get('/painel/tabelas/bairro/edit/{id}', [TabelasController::class, 'editbairro'])->name('Painel.Tabelas.editbairro');
Route::put('/painel/tabelas/bairro/update/{id}', [TabelasController::class, 'updatebairro'])->name('Painel.Tabelas.updatebairro');

Route::get('/painel/tabelas/msn', [TabelasController::class, 'indexmsn'])->name('Painel.Tabelas.indexmsn');
Route::get('/painel/tabelas/createmsn', [TabelasController::class, 'createmsn'])->name('Painel.Tabelas.createmsn');
Route::post('/painel/tabelas/createmsn', [TabelasController::class, 'storemsn'])->name('Painel.Tabelas.storemsn');
Route::get('/painel/tabelas/mensagem/{id}', [TabelasController::class, 'destroymsn'])->name('Painel.Tabelas.destroymsn');
Route::get('/painel/tabelas/mensagem/edit/{id}', [TabelasController::class, 'editmsn'])->name('Painel.Tabelas.editmsn');
Route::put('/painel/tabelas/mensagem/update/{id}', [TabelasController::class, 'updatemsn'])->name('Painel.Tabelas.updatemsn');

Route::get('/painel/tabelas/cobradores', [TabelasController::class, 'indexcobradores'])->name('Painel.Tabelas.indexcobradores');
Route::get('/painel/tabelas/createcobrador', [TabelasController::class, 'createcobrador'])->name('Painel.Tabelas.createcobrador');
Route::post('/painel/tabelas/createcobrador', [TabelasController::class, 'storecobrador'])->name('Painel.Tabelas.storecobrador');
Route::get('/painel/tabelas/cobrador/{id}', [TabelasController::class, 'destroycobrador'])->name('Painel.Tabelas.destroycobrador');
Route::get('/painel/tabelas/cobrador/edit/{id}', [TabelasController::class, 'editcobrador'])->name('Painel.Tabelas.editcobrador');
Route::put('/painel/tabelas/cobrador/update/{id}', [TabelasController::class, 'updatecobrador'])->name('Painel.Tabelas.updatecobrador');



Route::get('/dashboard', [OrdemServicoController::class, 'dashboard'])->name('dashboard');
Route::get('/painel/ordemservico/{id}', [OrdemServicoController::class, 'show'])->name('Painel.OrdemServico.show');
Route::get('/painel/ordemservico/{id}/add-servicos', [OrdemServicoController::class, 'addservicos'])->name('Painel.OrdemServico.addservicos');
//Dados da ordem.
Route::get('/ordens/show/{id?}', [OrdemServicoController::class, 'showos'])->name('Painel.OrdemServico.showos');

Route::get('/painel/servicos', [App\Http\Controllers\Painel\PainelController::class, 'viewServicos'])->name('Painel.Servicos.index');

//Rotas Relatorios
Route::get('relatorios/funcionarios', [RelatoriosController::class, 'generateFuncReport'])->name('Relatorios.Funcionarios');
Route::get('/usuarios/imprimir/{id}', [RelatoriosController::class, 'generateFuncionario'])->name('Relatorios.ImprimirFunc');
Route::get('/clientes/imprimir/{id}', [RelatoriosController::class, 'generateCliente'])->name('Relatorios.ImprimirCliente');
Route::get('/ordens/imprimir/{id}', [RelatoriosController::class, 'generateOrdens'])->name('Relatorios.ImprimirOrdens');
Route::get('relatorios/servicos', [RelatoriosController::class, 'generatePdfservicos'])->name('Relatorios.Servicos');
Route::get('relatorios/ordens', [RelatoriosController::class, 'generatePdfordens'])->name('Relatorios.Ordens');

Route::get('/relatorios/indexclientes', [RelatoriosController::class, 'indexclientes'])->name('Relatorios.indexclientes');
Route::get('/cliente/historico/{id}', [RelatoriosController::class, 'historicoCliente'])->name('Relatorios.historicoCliente');
Route::get('relatorios/dataclientes', [RelatoriosController::class, 'dataCliente'])->name('Relatorios.dataCliente');
Route::get('/relatorios/indexordens', [RelatoriosController::class, 'indexordens'])->name('Relatorios.indexordens');
Route::get('/relatorios/indexniver', [RelatoriosController::class, 'indexniver'])->name('Relatorios.indexniver');


Route::get('relatorios/dataos', [RelatoriosController::class, 'dataOS'])->name('Relatorios.dataOS');
Route::get('relatorios/dataniverclientes', [RelatoriosController::class, 'dataNiverClientes'])->name('Relatorios.dataNiverClientes');
Route::get('relatorios/dataniverfuncionarios', [RelatoriosController::class, 'dataNiverFuncionarios'])->name('Relatorios.dataNiverFuncionarios');
Route::get('relatorios/oscont', [RelatoriosController::class, 'contosrealizada'])->name('contosrealizada');


Route::get('/painel/indexaberta', [OrdemServicoController::class, 'indexaberta'])->name('Painel.OrdemServico.indexaberta');
Route::get('/painel/indexrealizada', [OrdemServicoController::class, 'indexrealizada'])->name('Painel.OrdemServico.indexrealizada');


Route::get('/pdf', [PdfController::class, 'geraPdf'])->name('PDF.ordens');
Route::get('/backup', [HomeController::class, 'backup'])->name('Painel.Backup.backup');






?>



