<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use App\Models\Food;
use App\Models\Restaurant;

// Helpers
use Illuminate\Support\Facades\Auth;
// storage
use Illuminate\Support\Facades\Storage;
// Controller
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Prendo l'id dell'user che è al momento loggato
        $user_id = auth()->user()->id;
        
        //Query che ritorna il piatto che corrisponde all'user id e al restaurant id
        $foods = Food::where("restaurant_id", $user_id)->get();
       
      

        return view('admin.food.index',compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user(); //acquisizione user loggato
        $userId = $user->id; //ricerca id dello user loggato
        $targetRestaurant = DB::table('restaurants')->where('user_id', '=', $userId)->get(); //salvataggio ristorante dello user
        return view('admin.food.create', compact('targetRestaurant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodRequest $request)
    {
        $data = $request->validated();

        if (array_key_exists('img', $data)) {
            $imgPath = Storage::put('posts', $data['img']);
            $data['img'] = $imgPath;
        }

        

        $newFood = Food::create($data);

        
        return redirect()->route('admin.foods.show', $newFood->id)->with('success', 'Piatto inserito con successo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        return view('admin.food.show',compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        $user = auth()->user(); //acquisizione user loggato
        $userId = $user->id; //ricerca id dello user loggato
        $targetRestaurant = DB::table('restaurants')->where('user_id', '=', $userId)->get(); //salvataggio ristorante dello user
        
        return view('admin.food.edit',compact('food', 'targetRestaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodRequest  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodRequest $request, Food $food)
    {
        $data = $request->validated();

        if (array_key_exists('delete_img', $data)) {
            if ($food->img) {
                // Cancella il vecchio file
                Storage::delete($food->img);

                $food->img = null;
                $food->save();
            }
        }
        else if (array_key_exists('img', $data)) {
            $imgPath = Storage::put('posts', $data['img']);
            $data['img'] = $imgPath;

            if ($food->img) {
                // Cancella il vecchio file
                Storage::delete($food->img);
            }
        }

        

        $food->update($data);

        return redirect()->route('admin.foods.show', $food->id)->with('success', 'Piatto modificato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        if ($food->img) {
            // Cancella il vecchio file
            Storage::delete($food->img);
        }

        $food->delete();

        return redirect()->route('admin.foods.index');
    }
}
