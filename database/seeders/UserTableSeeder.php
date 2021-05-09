<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'              => 'Geovane Vieira',
            'email'             => 'geovanerr@gmail.com',
            'password'          => Hash::make('secret'),
            'cpf'               => '992.153.492-00',
            'logradouro'        => 'Eneida Jucene',
            'numero'            => '742',
           
            'phone'             => '(95) 3626-2323',
            'celular'           => '(95) 98121-4111',
            'nascimento'        => '2021-07-21',
            'genero'            => 'Masculino',
            'funcao'            => 'Administrador',
            
        ]);
    }
}
