<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            0 => [
                'user_id' => '1',
                'type_id' => '1',
                'board' => 'IHC-2020',
                'model' => 'Ferrari California',
                'color' => 'Vermelha'
            ],
            1 => [
                'user_id' => '2',
                'type_id' => '1',
                'board' => 'PHP-2020',
                'model' => 'Nissan Kicks',
                'color' => 'Vermelha'
            ],
        ]);
    }
}
