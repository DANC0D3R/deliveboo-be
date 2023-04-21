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
            'Cafè',         //1
            'Cinese',       //2
            'Fast Food',    //3
            'Francese',     //4
            'Giapponese',   //5
            'Greco',        //6
            'Italiano',     //7
            'Indiano',      //8
            'Libanese',     //9
            'Messicano',    //10
            'Pizzeria',     //11
            'Ristorante',   //12
            'Steakhouse',   //13
            'Streetfood',   //14
            'Turco',        //15
            'Thailandese',  //16
            'Tradizionale', //17
            'Vietnamita',   //18
        ];
        foreach ($types as $type) {
            $newType= new Type();
            $newType->name = $type;
            $newType->save();
        }
    }
}
