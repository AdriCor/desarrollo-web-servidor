<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name'=>'rojo',
                'passengers'=>300,
                'year'=>2020,
                'train_type_id'=>1
            ],
            [
                'name'=>'azul',
                'passengers'=>400,
                'year'=>2021,
                'train_type_id'=>2
            ],
            [
                'nombre'=>'verde',
                'passengers'=>350,
                'year'=>2021,
                'train_type_id'=>3
            ]
            ]);
    }
}
