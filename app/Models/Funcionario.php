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
        'nome',
        'cpf',
        'email',
        'logradouro',
        'numero',
        'bairro',
        'password',
        'phone',
        'celular',
        'nascimento',
        'genero',
        'funcao',
        

    ];

    protected $dates = ['nascimento'];

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
