<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewOrder;
use App\Models\Order;
use Illuminate\Http\Request;

// Helpers
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Mail\Mailable;


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
        $user = Auth::user();

        $data = $request->all();
        $newOrder = Order::create($data); //così prendiamo i dati ricevuti dal front end in request e creiamo un nuovo ordine nel database

        Mail::to([
            $user->email,
            $newOrder->client_email
        ])->send(new NewOrder($newOrder));

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
