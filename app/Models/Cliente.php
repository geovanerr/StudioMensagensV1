<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'logradouro',
        'numero',
        'bairro',
        'referencia',
        'phone',
        'celular',
        'nascimento',
        'genero',
        'obs',

    ];

    protected $dates = ['nascimento'];



    public function OrdensServicos() {

        return $this->hasMany('App\Models\OrdemServico');

    }
}
