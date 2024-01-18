<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeTrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('train_type')->insert([
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
