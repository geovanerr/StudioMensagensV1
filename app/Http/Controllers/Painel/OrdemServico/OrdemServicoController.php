<?php

namespace App\Http\Controllers\Painel\OrdemServico;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Servico;
use App\Models\OrdemServico;



use Illuminate\Http\Request;

class OrdemServicoController extends Controller
{

    public function index()
    {

        $ordens = OrdemServico::all();

        return view('Painel.OrdemServico.index', ['ordens' => $ordens]);
    }

    public function create()
    {

        $clientes = Cliente::all();
        $servicos = Servico::all();
        return view('Painel.OrdemServico.create', ['clientes' => $clientes, 'servicos' => $servicos]);
    }

    public function store(Request $request)
    {

        $cliente = Cliente::find($request->cliente);
        $servico = Servico::find($request->servico);

        if(!$cliente){

            return 'Erro ao selecionar cliente';
        } else


        $os = new OrdemServico;
        $os->cliente()->associate($cliente);
        $os->receptor = $request->receptor;
        $os->phone = $request->phone;
        $os->celular = $request->celular;
        $os->genero = $request->genero;


        $os->mensagem = $request->mensagem;
        $os->dataos = $request->dataos;
        $os->horarioos = $request->horarioos;
        $os->status = $request->status;
        $os->obs = $request->obs;
        $os->obscobrador = $request->obscobrador;

        $os->save();

        $os->servicos()->attach($servico);
        return redirect ('/painel/ordemservico')->with('msg', 'Ordem de Serviço criada com sucesso.');


    }

    public function dashboard()
    {
        $ordens = OrdemServico::all();
        return view('dashboard', ['ordens' => $ordens]);
    }

    public function show($id)
    {
       //$ordens = OrdemServico::where('id', $id)->first();

       $ordem = OrdemServico::find($id);
       $servicos = $ordem->servicos()->get();


       if(!$ordem) {

        return redirect()->route('Painel.OrdemServico.index');
       }
          return view('Painel.OrdemServico.show', compact('ordem', 'servicos'));
    }

    public function edit($id)
    {


        $clientes = Cliente::all();
        $servicos = Servico::all();

        $ordem = OrdemServico::find($id);

        if(!$ordem) {

        return redirect()->route('Painel.OrdemServico.index');
        }
        //  return view('Painel.OrdemServico.edit', compact('ordem'));
          return view('Painel.OrdemServico.edit', ['clientes' => $clientes, 'servicos' => $servicos, 'ordem' => $ordem]);
    }

    public function update(Request $request) {


        
        OrdemServico::findOrFail($request->id)->update($request->all());
        
        
      
    
        return redirect ('/painel/ordemservico')->with('msg', 'Ordem de Serviço alterada com sucesso.');


    }




}
