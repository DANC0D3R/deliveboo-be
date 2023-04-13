<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Italiano',
            'Cinese',
            'Internazionale',
            'Giapponese',
            'Messicano',
            'Indiano',
            'Pesce',
            'Carne',
            'Pizza',
            'Thailandese'
            
         ];
         foreach ($types as $type) {
             $newType= new Type();
             $newType->name = $type;
             $newType->save();
         }
    }
}
