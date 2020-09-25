<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parking;
use Illuminate\Support\Facades\DB;

class ParkingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('parkings')->insert([
            0 => [
                'zone' => '1',
                'input' => '09/05/1945',
                'exit' => '26/12/1991',
                'table' => 'A1'
            ],
            1 => [
                'zone' => '2',
                'input' => '09/09/2020',
                'exit' => '10/09/2020',
                'table' => 'A2'
            ],
        ]);
    }
}
