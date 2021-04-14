<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemServico extends Model
{
    use HasFactory;

    protected $dates = ['dataos'];

    protected $guarded = [];

    protected $casts = [
        'servicos' => 'array' 

    ];


    protected $table = "ordens";

   // protected $attributes = [ 'status' ];

    //protected $fillable = ['servico', 'servico', 'prop3'];


    public function cliente() {

        return $this->belongsTo('App\Models\Cliente');

    }

}
