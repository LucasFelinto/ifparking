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
        'name' => 'Miguel gabriel', 
        'email' => 'gabrielogabriel10@gmail.com',
        'password' => '#DeusETop',
        'class' => 'IPI',
        'telephone' => '081992765185',
        'office'  => '',
        'siape' => '',
        'registration' => '2018infig0563',

    ],
            1 => [
                'name' => 'Miguel gabriel', 
                'email' => 'gabriel10@gmail.com',
                'password' => 'EUSouDeJesus',
                'class' => '',
                'telephone' => '081992765185',
                'office'  => 'Diretor geral do campus',
                'siape' => '123jesus',
                'registration' => '',
        
            ]

            ];

            User::insert($users);
    }
}