<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ticketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Ticket')->insert([
            [
                'date'=>'24/10/25',
                'price'=>100,
                'train_id'=>2,
                'ticket_type_id'=> 3
            ],
            [
                'date'=>'23/7/24',
                'price'=>50,
                'train_id'=>3,
                'ticket_type_id'=> 2
            ],
            [
                'date'=>'5/5/24',
                'price'=>150,
                'train_id'=>1,
                'ticket_type_id'=> 1
            ]
            ]);
    }
}
