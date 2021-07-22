<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;
use App\Models\Logs;
use Faker\Factory as Faker;

class AlunosController extends Controller
{

    //Metodo responsavel para Salvar os LOGs e Retorna o JSON com Lista dos Alunos
    public function reponseUserList()
    {

        //Inseri LOGs com faker names na base de dados
        $faker = Faker::create();
        Logs::create([
            "logname" => $faker->name()
        ]);

        //Retorna JSON com todos os registros dos Alunos
        return response()
            ->json(Alunos::all());
    }
}
