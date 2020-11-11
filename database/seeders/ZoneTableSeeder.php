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
                'parking_id' => 1,
                'number' => 1,
                'status' => 0
            ],
            1 => [
                'parking_id' => 1,
                'number' => 2,
                'status' => 0
            ],
            2 => [
                'parking_id' => 1,
                'number' => 3,
                'status' => 0
            ],
            3 => [
                'parking_id' => 1,
                'number' => 4,
                'status' => 0
            ],
            4 => [
                'parking_id' => 1,
                'number' => 5,
                'status' => 0
            ],
            5 => [
                'parking_id' => 2,
                'number' => 2,
                'status' => 0
            ]
        ];

        Zone::insert($zone);
    }
}
