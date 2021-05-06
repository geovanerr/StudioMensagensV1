<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;

    protected $table = 'mensagens';
    

    protected $guarded = [];

    public function OrdensServicos() {

      return $this->hasMany('App\Models\OrdemServico', 'mensagem_id', 'id');

  }

}
