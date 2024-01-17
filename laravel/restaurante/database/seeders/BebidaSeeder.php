<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BebidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bebidas')->insert([
            [
                'nombre'=>'cocacolo',
                'precio'=>3.95,
                'tipo'=>'Con gas'
            ],
            [
                'nombre'=>'Noestea',
                'precio'=>2.95,
                'tipo'=>'Sin gas'
            ],
            [
                'nombre'=>'agua',
                'precio'=>0.65,
                'tipo'=>'careros'
            ]
            ]);
    }
}
