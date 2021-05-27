<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'nome' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro_id' => 'required',
            'celular' => 'required',
            'nascimento' => 'required',            
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome do Cliente é obrigatório!',
            'logradouro.required' => 'O endereço é obrigatório!',
            'numero.required' => 'O número é obrigatório!',
            'bairro_id.required' => 'O Bairro é obrigatório!',
            'celular.required' => 'O Celular é obrigatório!',
            'nascimento.required' => 'A data de Nascimento é obrigatório!',
        
        ]; 
    }
}
