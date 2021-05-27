<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CobFormRequest extends FormRequest
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
            'cobrador' => 'required',
            'preco' => 'required',
                 
        ];
    }

    public function messages()
    {
        return [
            'cobrador.required' => 'O nome do Cobrador é obrigatório!',
            'preco.required' => 'O Preço do Cobrador é obrigatório!',        
        ]; 
    }
}
