<?php

namespace App\Http\Controllers\Painel\Servicos;
use App\Http\Controllers\Controller;



use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Servico;
use App\Http\Requests\ServicosFormRequest;



class ServicosController extends Controller
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

    public function tipoServicos()
    {

        $servicos = Servico::all();
        return view('Painel.Servicos.tipoServicos', [ 'servicos' => $servicos]);
    }


    public function cadastrotipoS ()
    {
        //Controla a rota do usuário.
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[2];

        
        $title = 'Cadastro Serviço';
     
        return view('Painel.Servicos.cadastrotipoS', compact('user','urlAtual'));

    }

    public function cadastrotipostore (ServicosFormRequest $request)

    {
        $servico = new Servico;

        $servico->servico = $request->servico;
        $servico->preco = $request->preco;

        $servico->save();
  
        return redirect ('/painel/servicos/tiposServicos')->with('msg', 'Serviço criado com sucesso.');

    }

    
 
    public function store (ServicosFormRequest $request)
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

    public function update(ServicosFormRequest $request) {


        
        Servico::findOrFail($request->id)->update($request->all());
   
      
    
        return redirect ('/painel/servicos/tiposServicos')->with('msg', 'Serviço alterado com sucesso.');


    }




}
