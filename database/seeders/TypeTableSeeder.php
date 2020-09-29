<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('types')->insert([
      0 => [
        'name' => 'Carro',
      ],
      1 => [
        'name' => 'Moto',
      ],
      2 => [
        'name' => 'Bicicleta',
      ],
    ]);
  }
}
