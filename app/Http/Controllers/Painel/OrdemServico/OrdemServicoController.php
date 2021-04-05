<?php

namespace App\Http\Controllers\Painel\OrdemServico;
use App\Http\Controllers\Controller;



use Illuminate\Http\Request;

class OrdemServicoController extends Controller
{
    //


    public function index()
    {

       // $servicos = Servico::all();
        return view('Painel.OrdemServico.index');
    }


}
