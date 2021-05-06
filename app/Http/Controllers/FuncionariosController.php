<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class FuncionariosController extends Controller
{
    public function logar(Request $request){
        $data = [];

        if($request->isMethod("POST")){
            $email = $request->input("email");
            $password = $request->input("password");

            $credencial = ['email' => $email, 'password' => $password];
            
            if(Auth::attempt($credencial)){
                return redirect()->route("Painel.index");   

            }else{
                $request->session()->flash("err", "Usuário ou Senha inválido");
                return redirect()->route("logar");   
            }
        }


        return view ("logar", $data);
    }
}
