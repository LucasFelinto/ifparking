<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zone;

class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zone = [ 	 
        	0 => [ 
        	'number' => 1,
        	'status' => true,
        	'type' => 'Carro',
        ],
        	1 => [
        	'number' => 2,
        	'status' => false,
        	'type' => 'Moto',
        	]
        ];

        Zone::insert($zone);
    }
}
