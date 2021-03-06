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

    protected $fillable = [
        'cliente_id',
        'receptor',
        'phone',
        'celular',
        'genero',
        'mensagem_id',
        'dataos',
        'horarioos',
        'status',
        'cobrador_id',
        'obs',
        'obscobrador',
        'valoros'
    ];


    public function cliente()
    {

        return $this->belongsTo('App\Models\Cliente', 'cliente_id', 'id');

    }

    public function mensagem()
    {

        return $this->belongsTo('App\Models\Mensagem', 'mensagem_id', 'id');

    }
    public function cobrador()
    {

        return $this->belongsTo('App\Models\Cobrador', 'cobrador_id', 'id');

    }



    public function servicos(){

        return $this->belongsToMany('App\Models\Servico', 'ordem_servicos','ordem_id', 'servico_id');

        }

}
