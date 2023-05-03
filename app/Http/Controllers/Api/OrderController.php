<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Food;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders = Order::paginate();
        // return OrderResource::collection($orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Qui nello store credo che potremmo inserire le funzioni che ci servono per calcolare il prezzo finale dell'ordine e per connetterlo con la tabella ponte.
        // Dovremmo anche pensare a come far passare i dati da una validazione back end prima di arrivare a creare l'ordine
        $data = $request->except(['foods', 'quantity']);
        $newOrder = Order::create($data); //così prendiamo i dati ricevuti dal front end in request e creiamo un nuovo ordine nel database

        $foodIndex = $request->foods;
        $foodIdArray = explode(',', $foodIndex);
        $food_id=Food::whereIn('id', $foodIdArray)->pluck('id')->toArray();

        $plateCounter = $request->quantity;
        $plateArray = [];
        foreach ($plateCounter as $singlePlate) {
            array_push($plateArray, $singlePlate);
        }
        for ($i=0; $i < count($food_id); $i++) { 
            $newOrder->foods()->attach($food_id[$i], ['quantity' => $plateArray[$i]]);
        }
        // $countArray = explode(',', $plateCounter);
        // $keys = [];
        // foreach ($plateCounter as $singlePlate) {
        //     $keys = $singlePlate->keys();
        // }

        
        // $newOrder->foods()->attach($singlePlate);
        // $newOrder->foods()->attach($food_id);

        // così in qualche modo salva la quantità, ma salva due volte anche il food id, e non si può fare
        // foreach ($plateCounter as $singlePlate) {
        //     $newOrder->foods()->attach($food_id, ['quantity' => $singlePlate]);
        // }  
        // if (array_key_exists('foods', $data)) {
        //     foreach ($data['foods'] as $foodId) {
        //         $newOrder->foods()->attach($foodId);
        //     }
        // }

        // if (array_key_exists('foods', $data)) {
        //     $newOrder->foods()->sync($data['foods']);
        // }

        return (['message' => 'Ordine ricevuto']); //il messaggio di ordine ricevuto verrà visualizzato nell'inspector, alla sezione network->fetch/xhr
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
