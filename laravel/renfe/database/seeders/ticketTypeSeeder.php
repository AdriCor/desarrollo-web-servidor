<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ticketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('TicketType')->insert([
            [
                'type' => 'Billete sencillo'
            ],
            [
                'type' => 'Abono mensual'
            ],
            [
                'type' => 'Abono trimestral'
            ]
            ]);
    }
}
