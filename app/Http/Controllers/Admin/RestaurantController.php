<?php

namespace App\Http\Controllers\Admin;

use App\Models\Restaurant;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;


// Helpers
use Illuminate\Support\Facades\DB;

// Controller
use App\Http\Controllers\Controller;

// Storage
use Illuminate\Support\Facades\Storage;

//auth
use Illuminate\Support\Facades\Auth;

//Slug
use Illuminate\Support\Str;

// Models
use App\Models\Type;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $restaurant = Restaurant::all();

        $user = Auth::user();

        $restaurant = Restaurant::where('user_id', $user->id)->get();

        return view('admin.restaurant.index', compact('restaurant'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        return view('admin.restaurant.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  \App\Http\Requests\StoreRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(StoreRestaurantRequest $request)
    {
        $data = $request->validated();

        if (array_key_exists('img', $data)) {
            $imgPath = Storage::put('restaurants', $data['img']);
            $data['img'] = $imgPath;
        };

        $data['slug'] = Str::slug($data['name']);

        // test foreign key user
        $user = auth()->user();
        $data['user_id'] = $user->id;
        
        $newRestaurant = Restaurant::create($data);

        if (array_key_exists('types', $data)) {
            foreach ($data['types'] as $typeId) {
                $newRestaurant->types()->attach($typeId);
            }
        }

        return redirect()->route('admin.restaurants.show', $newRestaurant)->with('success', 'Ristorante inserito con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurant $restaurant)
    {
       // $user = Auth::user();

    //     $restaurant = Restaurant::where('user_id', $user->id)->get();

    //    $targetRestaurant = DB::table('restaurants')->where('user_id', '=', 1)->get();

        return view('admin.restaurant.show', compact('restaurant'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
