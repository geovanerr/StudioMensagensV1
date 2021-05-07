<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nome',
        'logradouro',
        'numero',
        'bairro_id',
        'referencia',
        'phone',
        'celular',
        'nascimento',
        'genero',
        'obs',

    ];

    protected $dates = ['nascimento'];



    public function OrdensServicos() {

        return $this->hasMany('App\Models\OrdemServico', 'cliente_id', 'id');

    }

    public function bairro()
    {

        return $this->belongsTo('App\Models\Bairro', 'bairro_id', 'id');

    }
}
