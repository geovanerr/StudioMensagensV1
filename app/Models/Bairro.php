<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    use HasFactory;

    protected $table = 'bairros';

    protected $dates = ['date'];

    protected $guarded = [];

    public function ordens(){

  //  return $this->belongsToMany('App\Models\OrdemServico', 'ordem_servicos','servico_id', 'ordem_id');

    }

}
