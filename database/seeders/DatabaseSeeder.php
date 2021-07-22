<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Alunos;
use Database\Seeders\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Popula o banco de dados com dados da Lib FAKER
        Alunos::truncate();
        $faker  = Faker::create();
        foreach (range(1, 50) as $i) {
            Alunos::create([
                "name" => $faker->name(),
                "avatar" => $faker->imageUrl($width = 200, $height = 200, "SENAI"),
            ]);
        }
    }
}
