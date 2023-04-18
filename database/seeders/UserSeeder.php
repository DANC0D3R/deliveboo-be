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
            [
                'name' => 'Alberto Giardina',
                'email' => 'alberto@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Zineb Atlassi',
                'email' => 'zineb@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Lorenzo Niccolai',
                'email' => 'lorenzo@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Daniele Minieri',
                'email' => 'Daniele@gmail.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Davide Di Girolamo',
                'email' => 'davide@gmail.com',
                'password' => Hash::make('password')
            ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
