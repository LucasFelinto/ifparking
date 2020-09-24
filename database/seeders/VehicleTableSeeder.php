<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicles;
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
                'user' => '1',
                'board' => 'IHC-2020',
                'model' => 'Ferrari California',
                'color' => 'Vermelha',
                'type' => 'Carro'
            ],
            1 => [
                'user' => '2',
                'board' => 'PHP-2020',
                'model' => 'Nissan Kicks',
                'color' => 'Vermelha',
                'type' => 'Carro'
            ],
        ]);
    }
}
