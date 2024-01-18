<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ticketType extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ticket_types')->insert([
            [
                'ticket_type' => 'Billete sencillo'
            ],
            [
                'ticket_type' => 'Abono mensual'
            ],
            [
                'ticket_type' => 'Abono trimestral'
            ]
            ]);
    }
}
