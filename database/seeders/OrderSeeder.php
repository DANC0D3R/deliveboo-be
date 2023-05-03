<?php

namespace Database\Seeders;

// Models
use App\Models\Food;
use App\Models\Order;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $orders = [
    //         [
    //             'total_price' => '15.00',
    //             'client_name' => 'Claudio',
    //             'client_surname' => 'Brazof',
    //             'client_address' => 'Via Da Qui 1, Follonica (LI)',
    //             'client_phone' => '055 3476123',
    //             'client_email' => 'ciccio@email.com',
    //             'notes' => 'Niente da rilevare'
    //         ]
    //     ];

    //     foreach ($orders as $order) {

    //         order::create([
    //             'total_price' => $order['total_price'],
    //             'client_name' => $order['client_name'],
    //             'client_surname' => $order['client_surname'],
    //             'client_address' => $order['client_address'],
    //             'client_phone' => $order['client_phone'],
    //             'client_email' => $order['client_email'],
    //             'notes' => $order['notes']
    //         ]);
    //     }


    // }
    public function run():void
    {
        // Ristorante da Paolo -> id: 2
        // Piatti Ristorante da Polo -> id: da 6 a 10

        // $dishIds = Food::whereIn('id', [6, 7])->pluck('id')->toArray();
        // $dishIds2 = Food::whereIn('id', [9, 7])->pluck('id')->toArray();
        // $dishIds3 = Food::whereIn('id', [9, 7])->pluck('id')->toArray();
        // $dishIds4 = Food::whereIn('id', [9, 7, 6, 8])->pluck('id')->toArray();

        // Crea tre ordini associati a questi piatti
        $food_id=Food::whereIn('id',[154,152])->pluck('id')->toArray();
        Order::create([
            'notes'=>'Scala B, secondo piano',
            'total_price' => '18.50',
            'client_name' => 'Zineb',
            'client_surname'=>'Atlassi',
            'client_address' => 'Via Boolean Careers, 6',
            'client_phone' => '3354234562',
            'client_email' => 'zineb@gmail.com',
            'restaurant_id' => '16',
            'created_at' => '2023/01/16 09:01:46',
            'updated_at' => '2023/01/16 09:01:46',
        ])->foods()->attach($food_id);

        $food_id=Food::whereIn('id',[151,152])->pluck('id')->toArray();
        Order::create([
            'notes'=>'Piano terra, interno 2',
            'total_price' => '17.50',
            'client_name' => 'Alberto ',
            'client_surname'=>'Giardina',
            'client_address' => 'Via Alberto, 6',
            'client_phone' => '3313131313',
            'client_email' => 'alberto@gmail.com',
            'restaurant_id' => '16',
            'created_at' => '2023/02/16 09:01:46',
            'updated_at' => '2023/02/16 09:01:46',
        ])->foods()->attach($food_id);

        $food_id=Food::whereIn('id',[151,157])->pluck('id')->toArray();
        Order::create([
            'notes'=>'Scala A, terzo piano',
            'total_price' => '22.50',
            'client_name' => 'Daniele ',
            'client_surname'=>' Minieri',
            'client_address' => 'Via Italia, 6',
            'client_phone' => '3313131313',
            'client_email' => 'daniele@gmail.com',
            'restaurant_id' => '16',
            'created_at' => '2023/01/16 09:01:46',
            'updated_at' => '2023/01/16 09:01:46',
        ])->foods()->attach($food_id);

        $food_id=Food::whereIn('id',[153,156])->pluck('id')->toArray();
        Order::create([
            'notes'=>'in lavorazione',
            'total_price' => '24.50',
            'client_name' => 'Lorenzo ',
            'client_surname'=>' Niccolai',
            'client_address' => 'Via lorenzo, 6',
            'client_phone' => '3313131313',
            'client_email' => 'lorenzo@gmail.com',
            'restaurant_id' => '16',
            'created_at' => '2023/03/16 09:01:46',
            'updated_at' => '2023/03/16 09:01:46',
        ])->foods()->attach($food_id);

        $food_id=Food::whereIn('id',[154,153])->pluck('id')->toArray();
        Order::create([
            'notes'=>'Scala A, terzo piano',
            'total_price' => '22.50',
            'client_name' => 'Daniele ',
            'client_surname'=>' Minieri',
            'client_address' => 'Via Italia, 6',
            'client_phone' => '3313131313',
            'client_email' => 'daniele@gmail.com',
            'restaurant_id' => '16',
            'created_at' => '2023/02/16 09:01:46',
            'updated_at' => '2023/02/16 09:01:46',
        ])->foods()->attach($food_id);

        $food_id=Food::whereIn('id',[158,160])->pluck('id')->toArray();
        Order::create([
            'notes'=>'Scala A, terzo piano',
            'total_price' => '22.50',
            'client_name' => 'Daniele ',
            'client_surname'=>' Minieri',
            'client_address' => 'Via Italia, 6',
            'client_phone' => '3313131313',
            'client_email' => 'daniele@gmail.com',
            'restaurant_id' => '16',
            'created_at' => '2023/03/16 09:01:46',
            'updated_at' => '2023/03/16 09:01:46',
        ])->foods()->attach($food_id);

        $food_id=Food::whereIn('id',[160,512])->pluck('id')->toArray();
        Order::create([
            'notes'=>'Scala B, primo piano',
            'total_price' => '22.50',
            'client_name' => 'Davide ',
            'client_surname'=>' Di Girolamo',
            'client_address' => 'Via Davide, 6',
            'client_phone' => '3313131313',
            'client_email' => 'davide@gmail.com',
            'restaurant_id' => '16',
            'created_at' => '2023/04/16 09:01:46',
            'updated_at' => '2023/04/16 09:01:46',
        ])->foods()->attach($food_id);

        $food_id=Food::whereIn('id',[153,154])->pluck('id')->toArray();
        Order::create([
            'notes'=>'Scala A, terzo piano',
            'total_price' => '22.50',
            'client_name' => 'Daniele ',
            'client_surname'=>' Minieri',
            'client_address' => 'Via Italia, 6',
            'client_phone' => '3313131313',
            'client_email' => 'daniele@gmail.com',
            'restaurant_id' => '16',
            'created_at' => '2023/04/16 09:01:46',
            'updated_at' => '2023/04/16 09:01:46',
        ])->foods()->attach($food_id);

        $food_id=Food::whereIn('id',[156,157])->pluck('id')->toArray();
        Order::create([
            'notes'=>'Scala A, terzo piano',
            'total_price' => '22.50',
            'client_name' => 'Daniele ',
            'client_surname'=>' Minieri',
            'client_address' => 'Via Italia, 6',
            'client_phone' => '3313131313',
            'client_email' => 'daniele@gmail.com',
            'restaurant_id' => '16',
            'created_at' => '2023/04/16 09:01:46',
            'updated_at' => '2023/04/16 09:01:46',
        ])->foods()->attach($food_id);

        $food_id=Food::whereIn('id',[156,152])->pluck('id')->toArray();
        Order::create([
            'notes'=>'Scala A, terzo piano',
            'total_price' => '22.50',
            'client_name' => 'Daniele ',
            'client_surname'=>' Minieri',
            'client_address' => 'Via Italia, 6',
            'client_phone' => '3313131313',
            'client_email' => 'daniele@gmail.com',
            'restaurant_id' => '16',
            'created_at' => '2023/04/16 09:01:46',
            'updated_at' => '2023/04/16 09:01:46',
        ])->foods()->attach($food_id);
    }
}
