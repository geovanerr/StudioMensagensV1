<?php

namespace App\Http\Controllers\Painel\OrdemServico;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Servico;
use App\Models\OrdemServico;
use App\Models\Mensagem;
use App\Models\Cobrador;
use App\Http\Requests\OSFormRequest;







use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


class OrdemServicoController extends Controller
{

    protected $model;

    public function __construct(OrdemServico $model){
        $this->model = $model;
    }

    public function index()
    {

        $ordens = $this->model->all();

        return view('Painel.OrdemServico.index', ['ordens' => $ordens]);
    }

    public function create()
    {

        $clientes = Cliente::all();
        $servicos = Servico::all();
        $mensagens = Mensagem::all();
        $cobradores = Cobrador::all();
        return view('Painel.OrdemServico.create', ['clientes' => $clientes, 'servicos' => $servicos, "mensagens" => $mensagens, 'cobradores' => $cobradores]);
    }

    public function store(OSFormRequest $request)
    {

        $cliente = Cliente::find($request->cliente_id);
        $servico = Servico::find($request->servico);
        $mensagem = Mensagem::find($request->mensagem_id);
        $cobrador = Cobrador::find($request->cobrador_id);


        if(!$cliente){

            return 'Erro ao selecionar cliente';
        } else


        $os = new OrdemServico;
        $os->cliente()->associate($cliente);
        $os->receptor = $request->receptor;
        $os->phone = $request->phone;
        $os->celular = $request->celular;
        $os->genero = $request->genero;

        $os->mensagem()->associate($mensagem);
        $os->dataos = $request->dataos;
        $os->horarioos = $request->horarioos;
        $os->status = $request->status;
        $os->cobrador()->associate($cobrador);
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



    public function showos($id)
    {
        $ordem = OrdemServico::find($id);
        $ordem['cliente'] = $ordem->cliente->nome;
        $ordem['mensagem'] = $ordem->mensagem->mensagem;
        $ordem['cobrador'] = $ordem->cobrador->cobrador;
        
        return response()->json($ordem);
    }

    public function edit($id)
    {
        $clientes = Cliente::all();
        $servicos = Servico::all();
        $mensagens = Mensagem::all();
        $cobradores = Cobrador::all();
        $ordem = OrdemServico::find($id);
      //  dd($ordem);
        if(!$ordem) {
        return redirect()->route('Painel.OrdemServico.index');
        }
        //  return view('Painel.OrdemServico.edit', compact('ordem'));
          return view('Painel.OrdemServico.edit', ['clientes' => $clientes, 'servicos' => $servicos, 'ordem' => $ordem, "mensagens" => $mensagens, "cobradores" => $cobradores]);
    }

    public function update(OSFormRequest $request) {
      $inputs = $request->all();
    //    dd($inputs);
      $ordem = OrdemServico::findOrFail($request->id);
    
      $ordem->update($inputs);
      $ordem->servicos()->sync($inputs['servico']);
        return redirect ('/painel/ordemservico')->with('msg', 'Ordem de Serviço alterada com sucesso.');

    }

    public function destroy($id) {

        OrdemServico::findOrFail($id)->delete();
        return redirect ('/painel/ordemservico')->with('msg', 'Ordem de Serviço removida com sucesso.');


    }




}
