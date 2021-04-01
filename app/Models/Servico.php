<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $dates = ['date'];

    protected $guarded = [];

    public function cliente() {

        return $this->belongsTo('App\Models\Cliente');

    }

}
