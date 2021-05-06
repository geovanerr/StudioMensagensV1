<?php

namespace App\Http\Controllers\Painel\Usuarios;
use App\Http\Controllers\Controller;



use App\Models\User;
use App\Models\Cliente;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use App\Models\Roles\Roles;


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
      //  $roles = Roles::all();
        return view('Painel.Usuarios.viewCadastro', compact('user','urlAtual'));

    }

    public function storefunc (Request $request)

    {
        $userr = $request->all();
        $funcionario = new User;
        $funcionario->name = $request->name;
        $funcionario->cpf = $request->cpf;
        $funcionario->email = $request->email;
        $funcionario->logradouro = $request->logradouro;
        $funcionario->numero = $request->numero;
        $funcionario->bairro = $request->bairro;
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



    public function viewCliente()
    {
        //Controla a rota do usuário.

        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[2];

        $title = 'Painel de Cadastro';
      //  $roles = Roles::all();
        return view('Painel.Usuarios.viewCliente', compact('user','urlAtual'));

    }

    public function listaclientes()
    {

        $clientes = Cliente::all();
        return view('Painel.Usuarios.listaclientes', [ 'clientes' => $clientes]);
    }

    public function clientestore (Request $request)

    {
        $cliente = new Cliente;

        $cliente->nome = $request->nome;
        $cliente->logradouro = $request->logradouro;
        $cliente->numero = $request->numero;
        $cliente->bairro = $request->bairro;
        $cliente->referencia = $request->referencia;
        $cliente->phone = $request->phone;
        $cliente->celular = $request->celular;
        $cliente->nascimento = $request->nascimento;
        $cliente->genero = $request->genero;
        $cliente->obs = $request->obs;

        $cliente->save();

        return redirect ('/painel/usuarios/listaclientes')->with('msg', 'Cliente cadastrado com sucesso.');

    }



}
