<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicosFormRequest extends FormRequest
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
            'servico' => 'required',
            'preco' => 'required',
                 
        ];
    }

    public function messages()
    {
        return [
            'servico.required' => 'O nome do Serviço é obrigatório!',
            'preco.required' => 'O Preço do Serviço é obrigatório!',        
        ]; 
    }
}
