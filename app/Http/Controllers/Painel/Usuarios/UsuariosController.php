<?php

namespace App\Http\Controllers\Painel\Usuarios;
use App\Http\Controllers\Controller;



use App\Models\User;
use App\Models\Cliente;
use App\Models\Bairro;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use App\Models\Roles\Roles;
use App\Http\Requests\ClienteFormRequest;
use App\Http\Requests\FuncFormRequest;




class UsuariosController extends Controller
{

    protected $model;
    public $request;
    public $usuarios;

    public function __construct(Request $request, User $usuarios, User $model)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->usuarios = $usuarios;

        $this->model = $model;
    }

    public function index()
    {


        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];


        $title = 'Painel de Usuário';
        $usuarios = $this->model->where('id', '!=', 0)->get();
        return view('Painel.Usuarios.index', compact('user', 'urlAtual', 'title','usuarios' ));
    }



    public function viewCadastro()
    {
        //Controla a rota do usuário.
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[2];

        $title = 'Painel de Cadastro';
        $bairros = Bairro::all();
      //  $roles = Roles::all();
        return view('Painel.Usuarios.viewCadastro', ['user','urlAtual', 'bairros' => $bairros]);

    }

    public function storefunc (FuncFormRequest $request)

    {
        $userr = $request->all();
        $bairro = Bairro::find($request->bairro_id);


        $funcionario = new User;
        $funcionario->name = $request->name;
        $funcionario->cpf = $request->cpf;
        $funcionario->email = $request->email;
        $funcionario->logradouro = $request->logradouro;
        $funcionario->numero = $request->numero;
        $funcionario->bairro()->associate($bairro);
        $password = $request->password;
        $funcionario->password = \Hash::make($password);

        $funcionario->phone = $request->phone;
        $funcionario->celular = $request->celular;
        $funcionario->nascimento = $request->nascimento;
        $funcionario->genero = $request->genero;
        $funcionario->funcao = $request->funcao;


        $dbfuncionario = User::where("email", $funcionario->email)->first();
        if($dbfuncionario){
            return redirect ('/painel/usuarios')->with('err', 'email ja cadastrado no sistema.');
        }
        $funcionario->save();

        return redirect ('/painel/usuarios')->with('msg', 'Funcionário cadastrado com sucesso.');

    }

    public function showfunc($id)
    {
        $funcionario = User::find($id);
        $funcionario['bairro'] = $funcionario->bairro;

      //  $funcionario['nascimento'] = $this->setFormatData($funcionario['nascimento']);

        //dd($funcionario);

        return response()->json($funcionario);
    }


    public function editfunc($id) {

        $usuario = User::findOrFail($id);
        $bairros = Bairro::all();

      //  dd($usuario);
        return view ('Painel.Usuarios.editfunc', ['usuario' => $usuario, 'bairros' => $bairros]);

    }

    public function updatefunc(FuncFormRequest $request) {



      $inputs = $request->all();

      $funcionario = User::findOrFail($request->id);

      $funcionario->update($inputs);

      return redirect ('/painel/usuarios')->with('msg', 'Funcionário alterado com sucesso.');


    }

    public function destroyfunc($id) {

        User::findOrFail($id)->delete();
        return redirect ('/painel/usuarios')->with('msg', 'Funcionário removido com sucesso.');


    }


    public function listaclientes()
    {

        $clientes = Cliente::all();
        return view('Painel.Usuarios.listaclientes', [ 'clientes' => $clientes]);
    }

    public function viewCliente()
    {
        //Controla a rota do usuário.

        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[2];
        $bairros = Bairro::all();

        $title = 'Painel de Cadastro';
      //  $roles = Roles::all();
        return view('Painel.Usuarios.viewCliente', ['user','urlAtual','bairros' => $bairros]);

    }


    public function clientestore (ClienteFormRequest $request)

    {
  
        $cliente = new Cliente;
        $bairro = Bairro::find($request->bairro_id);

        $cliente->nome = $request->nome;
        $cliente->logradouro = $request->logradouro;
        $cliente->numero = $request->numero;
        $cliente->bairro()->associate($bairro);

        $cliente->referencia = $request->referencia;
        $cliente->phone = $request->phone;
        $cliente->celular = $request->celular;
        $cliente->nascimento = $request->nascimento;
        $cliente->genero = $request->genero;
        $cliente->obs = $request->obs;

        $cliente->save();

        return redirect ('/painel/usuarios/listaclientes')->with('msg', 'Cliente cadastrado com sucesso.');

    }

    public function showcliente($id)
    {
        $cliente = Cliente::find($id);
        $cliente['bairro'] = $cliente->bairro;

        return response()->json($cliente);
    }

    public function editcliente($id) {

        $cliente = Cliente::findOrFail($id);
        $bairros = Bairro::all();

       //dd($cliente);
        return view ('Painel.Usuarios.editcliente', ['cliente' => $cliente, 'bairros' => $bairros]);

    }

    public function updatecliente(ClienteFormRequest $request) {

        $inputs = $request->all();

      //  dd($inputs);
        $cliente = Cliente::findOrFail($request->id);

        $cliente->update($inputs);

        return redirect ('/painel/usuarios/listaclientes')->with('msg', 'Cliente alterado com sucesso.');


      }

      public function destroycliente($id) {

        Cliente::findOrFail($id)->delete();
        return redirect ('/painel/usuarios/listaclientes')->with('msg', 'Cliente removido com sucesso.');


    }




}
