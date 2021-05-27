<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OSFormRequest extends FormRequest
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
            'cliente_id' => 'required',
            'receptor' => 'required',
            'celular' => 'required',
            'servico' => ['required', 'array'],      
            'mensagem_id' => 'required',
            'dataos' => 'required',            
            'horarioos' => 'required',  
            'cobrador_id' => 'required',                        
        ];
    }

    public function messages()
    {
        return [
            'cliente_id.required' => 'É obrigatório informar o Cliente!',
            'receptor.required' => 'O Receptor é obrigatório!',
            'celular.required' => 'O Celular é obrigatório!',
            'servico.required' => 'É obrigatório informar algum serviço!',
            'mensagem_id.required' => 'É obrigatório informar alguma mensagem!',
            'dataos.required' => 'A data da OS é obrigatória!',
            'horarioos.required' => 'O Horário da OS é obrigatório!',
            'cobrador_id.required' => 'O Cobrador é obrigatório!',
        ]; 
    }
}
