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
                'type_id' => '1',
                'name' => 'A01',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            1 => [
                'type_id' => '1',
                'name' => 'A01',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
