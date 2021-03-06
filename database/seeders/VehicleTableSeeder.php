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
                'board' => 'IHC2020',
                'model' => 'Ferrari California',
                'color' => 'Vermelha',
                'deleted' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            1 => [
                'user_id' => '2',
                'type_id' => '1',
                'board' => 'PHP2020',
                'model' => 'Nissan Kicks',
                'color' => 'Preto',
                'deleted' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            2 => [
                'user_id' => '1',
                'type_id' => '3',
                'board' => null,
                'model' => 'Monark Circular',
                'color' => 'Preto',
                'deleted' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            3 => [
                'user_id' => '1',
                'type_id' => '2',
                'board' => 'ABC2020',
                'model' => 'Suzuki - GSX-R 1000 R',
                'color' => 'Preto',
                'deleted' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            4 => [
                'user_id' => '1',
                'type_id' => '2',
                'board' => 'CDF2020',
                'model' => 'Honda - CB 600 F Hornet',
                'color' => 'Preto',
                'deleted' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
