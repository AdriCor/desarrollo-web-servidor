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
        DB::table('train_types')->insert([
            [
                'train_type' => 'Cercanias'
            ],
            [
                'train_type' => 'Media distancia'
            ],
            [
                'train_type' => 'alta velocidad'
            ]
            ]);
    }
}
