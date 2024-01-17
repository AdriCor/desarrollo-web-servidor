<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_platos')->insert([
            [
                'tipo_platos' => 'Ración'
            ],
            [
                'tipo_platos' => 'Media Ración'
            ],
            [
                'tipo_platos' => 'Tapa'
            ]
            ]);
    }
}
