<?php

namespace App\Http\Controllers\Painel\Tabelas;
use App\Http\Controllers\Controller;



use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\Tabelas;



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

        $bairros = Servico::all();
        return view('Painel.Tabelas.indexbairros', [ 'servicos' => $bairros]);
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
        $bairro = new Tabelas;
        $bairro->bairro = $request->bairro;

        $bairro->save();

        return redirect ('/painel/Tabelas/bairros')->with('msg', 'Bairro criado com sucesso.');

    }



    public function store (Request $request)
    {
        $store = User::create ($request->all());
        if($store)
            return redirect()->route('Painel.Usuarios.index')->with('success', 'Usuário Cadastrado com sucesso!');

        return redirect()->back()->with('error', 'Houve um erro ao cadastrar o usuário.');
    }

    public function destroy($id) {

        Servico::findOrFail($id)->delete();
        return redirect ('/painel/servicos/tiposServicos')->with('msg', 'Serviço removido com sucesso.');


    }

    public function edit($id) {



        $servico = Servico::findOrFail($id);


        return view ('Painel.Servicos.edit', ['servico' => $servico]);


    }

    public function update(Request $request) {



        Servico::findOrFail($request->id)->update($request->all());



        return redirect ('/painel/servicos/tiposServicos')->with('msg', 'Serviço alterado com sucesso.');


    }




}
