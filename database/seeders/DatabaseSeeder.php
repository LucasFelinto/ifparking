<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call([UsersTableSeeder::class, VehicleTableSeeder::class, ZoneTableSeed::class]);
=======
        $this->call([UsersTableSeeder::class, VehicleTableSeeder::class]);
>>>>>>> 23b65eb52f09ea93962945352eb8327972cf5f1c
    }
}
