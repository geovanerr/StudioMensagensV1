<?php

namespace App\Http\Controllers\Painel\OrdemServico;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Servico;
use App\Models\OrdemServico;



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

        $clientes = Cliente::all();
        $servicos = Servico::all();
        return view('Painel.OrdemServico.create', ['clientes' => $clientes, 'servicos' => $servicos]);
    }

    public function store(Request $request)
    {

        $cliente = Cliente::find($request->cliente_id);
      
        if(!$cliente){

            return 'Erro ao selecionar cliente';
        } else


        $os = new OrdemServico;
        $os->cliente_id = $request->cliente_id;
        $os->receptor = $request->receptor;
        $os->phone = $request->phone;
        $os->celular = $request->celular;
        $os->genero = $request->genero;
        $os->servico_id = $request->servico_id;
        $os->mensagem = $request->mensagem;
        $os->dataos = $request->dataos;
        $os->horarioos = $request->horarioos;
        $os->status = $request->status;
        $os->obs = $request->obs;
        $os->obscobrador = $request->obscobrador;
        
        $os->save();

        return redirect ('/painel/ordemservico')->with('msg', 'Ordem de Serviço criada com sucesso.');


    }

 

}
