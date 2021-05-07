<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Funcionario extends Model implements Authenticatable
{
    use HasFactory;

    protected $table = 'funcionarios';

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'logradouro',
        'numero',
        'bairro_id',
        'password',
        'phone',
        'celular',
        'nascimento',
        'genero',
        'funcao',
        

    ];

    protected $dates = ['nascimento'];

    public function bairro()
    {

        return $this->belongsTo('App\Models\Bairro', 'bairro_id', 'id');

    }

    public function getAuthIdentifierName(){
        return $this->getKey();
    }
    public function getAuthIdentifier(){
        return $this->email;
    }
    public function getAuthPassword(){
        return $this->password;
    }
    public function getRememberToken(){

    }
    public function setRememberToken($value){

    }
    public function getRememberTokenName(){

    }

}
