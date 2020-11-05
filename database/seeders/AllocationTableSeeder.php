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
                'status' => true,
            ],
            1 => [
                'vehicle_id' => '2',
                'zone_id' => '2',
                'status' => true,
            ],
        ]);
    }
}
