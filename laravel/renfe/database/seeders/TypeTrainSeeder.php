<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TypeTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('TrainType')->insert([
            [
                'type' => 'Cercanias'
            ],
            [
                'type' => 'Media distancia'
            ],
            [
                'type' => 'alta velocidad'
            ]
            ]);
    }
}
