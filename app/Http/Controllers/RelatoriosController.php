<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Bairro;
use App\Models\Cliente;
use App\Models\OrdemServico;
use App\Models\Servico;




class RelatoriosController extends Controller
{
    public function generateFuncReport(Request $request){
     //   $funcionarios = User::all();
        $funcionarios = new User;

        if($request->dateinicialreport != ''){
            $dateinicial = Carbon::parse($request->dateinicialreport)->startOfDay();
            $funcionarios = $funcionarios->where('created_at', '>=', $dateinicial);

        }

        if($request->datefinalreport != ''){
            $datefinal = Carbon::parse($request->datefinalreport)->endOfDay();
            $funcionarios = $funcionarios->where('created_at', '<=', $datefinal);

        }

        $funcionarios = $funcionarios->get();
        return view('Painel.Relatorios.Funcionarios', compact('funcionarios'));
    }

    public function generateFuncionario($id){

        $user = User::findOrFail($id);
        $bairros = Bairro::all();
        return view('Painel.Relatorios.impfunc', ['user' => $user, 'bairros' => $bairros]);
    }
    public function generateCliente($id){

        $cliente = Cliente::findOrFail($id);
        $bairros = Bairro::all();
        return view('Painel.Relatorios.impcliente', ['cliente' => $cliente, 'bairros' => $bairros]);

    }
    public function generateOrdens($id){

        $ordem = OrdemServico::findOrFail($id);
        return view('Painel.Relatorios.impordem', ['ordem' => $ordem]);

    }

    public function generatePdfservicos(Request $request){

        $servicos = Servico::all();
        return view('Painel.Relatorios.gerapdfservicos', compact('servicos'));


    }

    public function generatePdfordens(){
        $ordens = OrdemServico::all();
        return view('Painel.Relatorios.gerapdfordens', compact('ordens'));

    }

    public function historicoCliente($id){

        $cliente = Cliente::findOrFail($id);
        $bairros = Bairro::all();
        $ordens = $cliente->OrdensServicos()->get();

        return view('Painel.Relatorios.historicocliente', ['cliente' => $cliente, 'bairros' => $bairros, 'ordens' => $ordens]);

    }
       public function indexclientes()
       {
           $clientes = Cliente::all();
           return view('Painel.Relatorios.indexclientes', [ 'clientes' => $clientes]);
       }

       public function dataCliente(Request $request){
           $clientes = new Cliente;

           if($request->dateinicialreport != ''){
               $dateinicial = Carbon::parse($request->dateinicialreport)->startOfDay();
               $clientes = $clientes->where('created_at', '>=', $dateinicial);

           }

           if($request->datefinalreport != ''){
               $datefinal = Carbon::parse($request->datefinalreport)->endOfDay();
               $clientes = $clientes->where('created_at', '<=', $datefinal);
           }

           $clientes = $clientes->get();
           return view('Painel.Relatorios.dataCliente', compact('clientes'));
       }


       public function indexordens()
       {
           $ordens = OrdemServico::all();
           return view('Painel.Relatorios.indexordens', [ 'ordens' => $ordens]);
       }

       public function dataOS(Request $request){
        $ordens = new OrdemServico();

        if($request->dateinicialreport != ''){
            $dateinicial = Carbon::parse($request->dateinicialreport)->startOfDay();
            $ordens = $ordens->where('created_at', '>=', $dateinicial);

        }

        if($request->datefinalreport != ''){
            $datefinal = Carbon::parse($request->datefinalreport)->endOfDay();
            $ordens = $ordens->where('created_at', '<=', $datefinal);
        }

        if($request->status != 'Todas'){
            $status = $request->status;
            $ordens = $ordens->where('status', '=', $status);
        }

        $ordens = $ordens->get();
        return view('Painel.Relatorios.dataOS', compact('ordens'));
    }

    public function indexniver()
    {
        $clientes = OrdemServico::all();
        $funcionarios = User::all();
        return view('Painel.Relatorios.indexniver', [ 'clientes' => $clientes, 'funcionarios' => $funcionarios]);
    }

    public function dataNiverClientes(Request $request){
        $clientes = new Cliente();
        $bairros = Bairro::all();

        if($request->has('mes')){
            $clientes = $clientes->whereMonth('nascimento', '=', $request->mes);
        }

        $clientes = $clientes->get();
        return view('Painel.Relatorios.dataNiverClientes', compact('clientes'));
    }
    public function dataNiverFuncionarios(Request $request){
        $funcionarios = new User();
        $bairros = Bairro::all();

        if($request->has('mes')){
            $funcionarios = $funcionarios->whereMonth('nascimento', '=', $request->mes);
        }

        $funcionarios = $funcionarios->get();
        return view('Painel.Relatorios.dataNiverFuncionarios', compact('funcionarios'));
    }

    public function contosrealizada (Request $request){
        $osrealizadas = OrdemServico::all();

        $osrealizadas = $osrealizadas->where('status', '=', 'Realizada');

        $osrealizadas = $osrealizadas->get();
      //  dd($osrealizadas);
      return view('dashboard', compact('osrealizadas'));

    }
}

