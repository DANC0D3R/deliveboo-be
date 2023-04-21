<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            // 1
            [
                'name' => 'Zineb Atlassi',
                'email' => 'zineb@gmail.com',
                'password' => Hash::make('password')
            ],
            // 2
            [
                'name' => 'Davide Di Girolamo',
                'email' => 'davide@gmail.com',
                'password' => Hash::make('password')
            ],
            // 3
            [
                'name' => 'Alberto Giardina',
                'email' => 'alberto@gmail.com',
                'password' => Hash::make('password')
            ],
            // 4
            [
                'name' => 'Daniele Minieri',
                'email' => 'daniele@gmail.com',
                'password' => Hash::make('password')
            ],
            // 5
            [
                'name' => 'Lorenzo Niccolai',
                'email' => 'lorenzo@gmail.com',
                'password' => Hash::make('password')
            ],
            // 6
            [
                'name' => 'Saranya Thongchai',
                'email' => 'ledu@gmail.com',
                'password' => Hash::make('password')
            ],
            // 7
            [
                'name' => 'Lee Ming',
                'email' => 'dragodoro@gmail.com',
                'password' => Hash::make('password')
            ],
            // 8
            [
                'name' => 'Jamshedji Tata',
                'email' => 'tajmahalpalacehotel@gmail.com',
                'password' => Hash::make('password')
            ],
            // 9
            [
                'name' => 'Argyro Chiliadaky',
                'email' => 'thefunkygourmet@gmail.com',
                'password' => Hash::make('password')
            ],
            // 10
            [
                'name' => 'Bernard Pacaud',
                'email' => 'lambroisie@gmail.com',
                'password' => Hash::make('password')
            ],
            // 11
            [
                'name' => 'Sinan Kafadar',
                'email' => '360istanbul@gmail.com',
                'password' => Hash::make('password')
            ],
            // 12
            [
                'name' => 'Abdul Kader Al-Halabi',
                'email' => 'alhalabirestaurant@gmail.com',
                'password' => Hash::make('password')
            ],
            // 13
            [
                'name' => 'Nguyen Van Duc',
                'email' => 'templeclub@gmail.com',
                'password' => Hash::make('password')
            ],
            // 14
            [
                'name' => 'Salt Bae',
                'email' => 'nusretsteakhouse@gmail.com',
                'password' => Hash::make('password')
            ],
            // 15
            [
                'name' => 'Giuseppe Marotta',
                'email' => 'rossopomodoro@gmail.com',
                'password' => Hash::make('password')
            ],
            // 16
            [
                'name' => 'Ronald McDonald',
                'email' => 'mcdonalds@gmail.com',
                'password' => Hash::make('password')
            ],
            // 17
            [
                'name' => 'James McLamore',
                'email' => 'burgerking@gmail.com',
                'password' => Hash::make('password')
            ],
            // 18
            [
                'name' => 'Dan Carney',
                'email' => 'pizzahut@gmail.com',
                'password' => Hash::make('password')
            ],
            // 19
            [
                'name' => 'Harland Sanders',
                'email' => 'kfc@gmail.com',
                'password' => Hash::make('password')
            ],
            //20
            [
                'name' => ' Fred DeLuca',
                'email' => 'subway@gmail.com',
                'password' => Hash::make('password')
            ],
            // 21
            [
                'name' => 'Jerry Baldwin',
                'email' => 'starbucks@gmail.com',
                'password' => Hash::make('password')
            ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
