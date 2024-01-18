<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ticketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            [
                'date'=>'10:00',
                'price'=>4.95,
                'train_id'=>, //traerme el id del tren
                'ticket_type_id'=> //traerrme el ide de tipos ticket
            ],
            [
                'nombre'=>'Chuletillas',
                'precio'=>9.95,
                'tipo_plato_id'=>2
            ],
            [
                'nombre'=>'Ensaladilla rusa',
                'precio'=>3.5,
                'tipo_plato_id'=>3
            ]
            ]);
    }
}
