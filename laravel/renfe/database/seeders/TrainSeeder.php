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
            'name'=>'Thomas',
            'passengers'=>250,
            'year'=>1984,
            'train_type_id'=> 3
        ],
        [
            'name'=>'Jack, la Locomotora',
            'passengers'=>150,
            'year'=>1962,
            'train_type_id'=> 1
        ],
        [
            'name'=>'Emily',
            'passengers'=>300,
            'year'=>1983,
            'train_type_id'=> 2
        ]
        ]);
    }
}
