<?php

namespace App\Http\Controllers\Painel\OrdemServico;
use App\Http\Controllers\Controller;



use Illuminate\Http\Request;

class OrdemServicoController extends Controller
{
    //


    public function index()
    {
      
        return view('Painel.OrdemServico.index');
    }
    
    public function create()
    {

       // $servicos = Servico::all();
        return view('Painel.OrdemServico.create');
    }


}
