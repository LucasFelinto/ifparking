<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
           0 => [
                'cpf' => '00000000000',
                'name' => 'Miguel gabriel', 
                'email' => 'gabrielogabriel10@gmail.com',
                'password' => bcrypt('#DeusETop'),
                'telephone' => '081992765185',
                'registration' => '2018infig0563',
            ],
            1 => [
                'cpf' => '11111111111',
                'name' => 'Miguel gabriel', 
                'email' => 'gabriel10@gmail.com',
                'password' => bcrypt('EUSouDeJesus'),
                'telephone' => '081992765185',
                'registration' => '2020JesusVem',
            ],
            2 => [
                'cpf' => '22222222222',
               'name' => 'Gabriel miguel', 
               'email' => 'supremopoder@gmail.com',
               'password' => bcrypt('#salmos23'),
               'telephone' => '081992765185',
               'registration' => '2020infig0563',
            ],
       

            ];

            User::insert($users);
    }
}