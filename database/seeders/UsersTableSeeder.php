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
                'adm' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            1 => [
                'cpf' => '11111111111',
                'name' => 'Miguel gabriel',
                'email' => 'gabriel10@gmail.com',
                'password' => bcrypt('EUSouDeJesus'),
                'telephone' => '081992765185',
                'registration' => '2020JesusVem',
                'adm' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            2 => [
                'cpf' => '22222222222',
                'name' => 'Gabriel miguel',
                'email' => 'supremopoder@gmail.com',
                'password' => bcrypt('#salmos23'),
                'telephone' => '081992765185',
                'registration' => '2020infig0563',
                'adm' => '0',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            3 => [
                'cpf' => '12345678912',
                'name' => 'Adm',
                'email' => 'admin@admin',
                'password' => bcrypt('password'),
                'telephone' => '123456789',
                'registration' => '123456789',
                'adm' => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

        ];

        User::insert($users);
    }
}
