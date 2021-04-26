<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $dates = ['dataos'];

    protected $guarded = [];


    protected $table = "ordens";

   // protected $attributes = [ 'status' ];

    //protected $fillable = ['servico', 'servico', 'prop3'];


    public function cliente()
    {

        return $this->belongsTo('App\Models\Cliente');

    }

    public function servicos()
    {
        return $this->belongsToMany('App\Models\Servico', 'ordem_servicos_servicos', 'ordem_id', 'servico_id');
    }

}
