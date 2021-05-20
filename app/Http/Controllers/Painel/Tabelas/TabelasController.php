<?php

namespace App\Http\Controllers\Painel\Tabelas;
use App\Http\Controllers\Controller;



use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\Bairro;
use App\Models\Mensagem;
use App\Models\Cobrador;




class TabelasController extends Controller
{

    protected $model;
    public $request;
    public $usuarios;
    public $servicos;

    public function __construct(Request $request, User $usuarios, User $model)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->usuarios = $usuarios;

        $this->model = $model;
    }

    public function indexbairros()
    {

        $bairros = Bairro::all();
        return view('Painel.Tabelas.indexbairros', [ 'bairros' => $bairros]);
    }


    public function createbairro ()
    {
        //Controla a rota do usuário.
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[2];
        return view('Painel.Tabelas.createbairro', compact('user','urlAtual'));

    }

    public function storebairro (Request $request)
    {
        $bairro = new Bairro;
        $bairro->bairro = $request->bairro;
        $bairro->save();

        return redirect ('/painel/tabelas/bairros')->with('msg', 'Bairro criado com sucesso.');
    }

    public function destroybairro($id) {

        Bairro::findOrFail($id)->delete();
        return redirect ('/painel/tabelas/bairros')->with('msg', 'Bairro removido com sucesso.');
    }

    public function editbairro($id) {
        $bairro = Bairro::findOrFail($id);
        return view ('Painel.Tabelas.editbairro', ['bairro' => $bairro]);
    }

    public function updatebairro(Request $request) {
        Bairro::findOrFail($request->id)->update($request->all());
        return redirect ('/painel/tabelas/bairros')->with('msg', 'Bairro alterado com sucesso.');

    }



    public function indexmsn()
    {
        $mensagens = Mensagem::all();
        return view('Painel.Tabelas.indexmsn', [ 'mensagens' => $mensagens]);
    }


    public function createmsn ()
    {
        //Controla a rota do usuário.
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[2];
        return view('Painel.Tabelas.createmsn', compact('user','urlAtual'));

    }

    public function storemsn (Request $request)

    {
        $mensagem = new Mensagem;
        $mensagem->mensagem = $request->mensagem;

        $mensagem->save();

        return redirect ('/painel/tabelas/msn')->with('msg', 'Mensagem criada com sucesso.');

    }

    public function destroymsn($id) {

        Mensagem::findOrFail($id)->delete();
        return redirect ('/painel/tabelas/msn')->with('msg', 'Mensagem removida com sucesso.');


    }

    public function editmsn($id) {
        $mensagem = Mensagem::findOrFail($id);
        return view ('Painel.Tabelas.editmsn', ['mensagem' => $mensagem]);

    }

    public function updatemsn(Request $request) {
        Mensagem::findOrFail($request->id)->update($request->all());
        return redirect ('/painel/tabelas/msn')->with('msg', 'Mensagem alterada com sucesso.');

    }

    public function indexcobradores()
    {
        $cobradores = Cobrador::all();
        return view('Painel.Tabelas.indexcobradores', [ 'cobradores' => $cobradores]);
    }


    public function createcobrador ()
    {
        //Controla a rota do usuário.
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[2];
        return view('Painel.Tabelas.createcobrador', compact('user','urlAtual'));

    }

    public function storecobrador (Request $request)

    {
        $cobrador = new Cobrador;
        $cobrador->cobrador = $request->cobrador;
        $cobrador->preco = $request->preco;

        $cobrador->save();

        return redirect ('/painel/tabelas/cobradores')->with('msg', 'Cobrador criado com sucesso.');

    }

    public function destroycobrador($id) {

        Cobrador::findOrFail($id)->delete();
        return redirect ('/painel/tabelas/cobradores')->with('msg', 'Cobrador removido com sucesso.');


    }

    public function editcobrador($id) {
        $cobrador = Cobrador::findOrFail($id);
        return view ('Painel.Tabelas.editcobrador', ['cobrador' => $cobrador]);

    }

    public function updatecobrador(Request $request) {
        Cobrador::findOrFail($request->id)->update($request->all());
        return redirect ('/painel/tabelas/cobradores')->with('msg', 'Cobrador alterado com sucesso.');

    }


}
