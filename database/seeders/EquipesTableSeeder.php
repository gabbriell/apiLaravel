<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipes;
use Illuminate\Support\Facades\DB;

class EquipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create('pt_BR');
    for ($i=0; $i<50; $i++) {
        DB::table('Equipes')->insert([
            'nome_equipe' => $faker->lastName.' FS',
            'nome_representante' => $faker->name,
            'cpf_representante' => $faker->cpf,            
        ]);
    }

    }
}
