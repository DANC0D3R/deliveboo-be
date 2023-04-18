<?php

namespace Database\Seeders;

// Model
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
    public function run()
    {
        $orders = [
            [
                'total_price' => '15.00',
                'client_name' => 'Claudio',
                'client_surname' => 'Brazof',
                'client_address' => 'Via Da Qui 1, Follonica (LI)',
                'client_phone' => '055 3476123',
                'client_email' => 'ciccio@email.com',
                'notes' => 'Niente da rilevare'
            ]
        ];

        foreach ($orders as $order) {

            order::create([
                'total_price' => $order['total_price'],
                'order_time' => $order['order_time'],
                'order_date' => $order['order_date'],
                'client_name' => $order['client_name'],
                'client_address' => $order['client_address'],
                'client_phone' => $order['client_phone'],
                'client_email' => $order['client_email'],
            ]);
        }


    }
}
