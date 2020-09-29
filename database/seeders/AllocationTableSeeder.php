<?php

namespace Database\Seeders;

use App\Models\Parking;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allocations')->insert([
            0 => [
                'vehicle_id' => '1',
                'zone_id' => '1',
                'start' => '09/05/1945 13:00',
                'end' =>  '09/05/1945 14:00',
                'status' => true,
            ],
            1 => [
                'vehicle_id' => '1',
                'zone_id' => '1',
                'start' => '31/03/2019 12:00',
                'end' =>  '31/03/2019 17:00',
                'status' => true,
            ],
        ]);
    }
}
