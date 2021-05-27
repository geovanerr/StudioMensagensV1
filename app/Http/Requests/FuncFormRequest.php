<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro_id' => 'required',
            'password' => 'required',
            'nascimento' => 'required',          
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório!',
            'cpf.required' => 'O CPF é obrigatório!',
            'email.required' => 'O e-mail é obrigatório!',
            'logradouro.required' => 'O endereço é obrigatório!',
            'numero.required' => 'O número é obrigatório!',
            'bairro_id.required' => 'O Bairro é obrigatório!',
            'password.required' => 'A senha é obrigatória!',
            'nascimento.required' => 'A data de Nascimento é obrigatório!',
        
        ]; 
    }
}
