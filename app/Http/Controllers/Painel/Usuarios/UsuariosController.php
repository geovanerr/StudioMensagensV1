<?php

namespace App\Http\Controllers\Painel\Usuarios;
use App\Http\Controllers\Controller;



use App\Models\User;
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

    public function store (Request $request)
    {
        $store = User::create ($request->all());
        if($store)
            return redirect()->route('Painel.Usuarios.index')->with('success', 'Usuário Cadastrado com sucesso!');
        
        return redirect()->back()->with('error', 'Houve um erro ao cadastrar o usuário.');
    }


}
