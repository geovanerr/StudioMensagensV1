<?php

namespace App\Http\Controllers\Painel;
use App\Http\Controllers\Controller;



use App\Models\User;
use Illuminate\Http\Request;

class PainelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @ return void
     */
        
     public $request;
     public $usuarios;

    public function __construct(Request $request, User $usuarios)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->usuarios = $usuarios;
    }

    /**
     * Show the application dashboard.
     *
     * @ return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth()->User();
        return view('dashboard', compact('user'));
    }

    public function rotabarra(){

        return view('Home.index');
    }


    public function viewServicos()
    {
        //Controla a rota do usuário.
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];

        return view('Painel.Servicos.index', compact('user', 'urlAtual'));
    }
    

}
