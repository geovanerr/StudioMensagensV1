<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Bairro;


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
    public function generateClientesReport(){


    }

    public function generateServicosReport(){


    }

    public function generateOSReport(){

    }
}
